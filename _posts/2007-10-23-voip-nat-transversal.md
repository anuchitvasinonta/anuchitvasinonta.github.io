---
layout: post
title: VoIP NAT Transversal
date: 2007-10-23 10:50:44 +0700
categories: ["Telecom"]
comments: 1
---

เพื่อที่จะสามารถใช้ VoIP จากบ้านที่มี router อยู่ทั่วไปนั้นจะมีอยู่สองเรื่องที่ต้องพิจารณา เรื่องแรกคือการที่ router จะมี firewall อยู่และจะไม่ยอมให้ inbound traffic initiate ขึ้นจากข้างนอกถ้าไม่ได้มีการ initiate โดย outbound traffic จากข้างในก่อน หรือที่พูดกันว่าจะไม่ allow unsolicited traffic หรือ traffic ที่ไม่ได้รับเชิญนั่นเอง ดังนั้นการที่จะมีใคร call มาหาเราก็ย่อมเป็นไปไม่ได้ถ้ายังไม่แก้ไขเรื่องนี้ และการที่ไป configure router ให้ยอมรับ traffic จากข้างนอกก็เป็นวิธีที่ไม่ถูกนะครับเพราะไป compromise security

อีกเรื่องก็คือการใช้ private ip จากการทำ NAT ถึงแม้ว่า router จะทำการ match private ip/port เข้ากับ public ip/port ให้ แต่เนื้อความใน signaling protocol เช่น SIP message ก็จะยังมี addressing ที่เป็น private ip อยู่ดี ซึ่งก็จะทำให้ไม่สามารถ work ได้เมื่อเข้าไปสู่ internet

วิธีการแก้ไขนั้นมีหลายแบบ แต่ที่เหมาะสมที่สุดที่ voip operator ใช้กันก็คือ การมีอุปกรณ์คล้่ายๆเป็น proxy ตัวหนึ่งอยู่ตรงกลางระหว่าง user agent software ที่อยู่ในเครื่องผู้ใช้ กับ call agent software ที่อยู่บน server กลาง ซึ่งอุปกรณ์พวก SBC (Sessio Border Controller) ก็มีหน้าที่หลักอันหนึ่งในการทำสิ่งต่างๆเหล่านี้

<img id="image171" src="/assets/uploads/2007/10/newport_sbc.jpg" alt="newport_sbc.jpg" />

ขั้นตอนก็คือ user agent จะมีการ register ไปที่ call agent server เพื่อบอกว่าตัวเอง up ขึ้นมาแล้ว operator ก็จะมีวิธีในการ route signaling message พวกนี้ผ่านไปยังอุปกรณ์ SBC อุปกรณ์ SBC ก็จะรู้ source ip/port ฝั่ง public ของ user และจำไว้ และก็เข้าไปแก้เนื้อความของ signaling message จาก private ip/port ของ user ให้เป็น public ip/port ของตัวอุปกรณ์ sbc เอง แล้วก็แก้ source ip/port ใ้ห้เป็นของตัวเองด้วย เสร็จแล้วค่อยส่งไปที่ call agent server ดังนั้นในฝั่งของ call agent server ก็จะไม่รู้เรื่องอะไรและทำงานเหมือนตัวเองกำลังทำงานกับ user agent รายหนึ่งปกติทุกอย่าง ในทางกลับกัน พอ call agent server ส่ง signaling message กลับมา SBC ก็จะเปลี่ยน destination ip/port ให้เป็น public source ip/port ที่จำไว้ในตอนแรก และก็ระบุในเนื้อความของ signaling message ไปด้วยว่าให้ใช้ media ip/port ของตัว SBC เอง เป็น channel ในการส่ง media ออกมา ซึ่ง user agent ก็จะใช้ public ip/port ของ SBC นี้เป็น destination ในการส่ง media ออกมาหา ทำให้ตัว SBC สามารถเป็น media proxy ไปด้วย และก็ทำให้สามารถทำการ connect control และ charge connection ที่มีการ set up ขึ้นได้ตามที่ต้องการ

ด้วยวิธีการนี้ก็จะทำให้แก้ปัญหาสองเรื่องคือ unsolicited connection กับ private ip ได้ เพราะ SBC รู้อยู่ตลอดเวลาว่าจะติดต่อ user ที่ ip/port ไหน และตัวเองทำตัวเป็น signaling proxy คอยแก้ไข mapping เรื่อง private ip ในเนื้อความของ signaling message ให้
