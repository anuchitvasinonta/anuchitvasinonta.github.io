---
layout: post
title: Packet-based Transport Acronym Soup
date: 2007-10-16 07:26:47 +0700
categories: ["Telecom"]
comments: 0
---

<center><img id="image164" src="/assets/uploads/2007/10/pbt_pw_tmpls.jpg" alt="pbt_pw_tmpls.jpg" /></center>

ตอนนี้มีความพยายามพัฒนาเทคโนโลยีที่เป็น packet-based transport ออกมาหลากหลาย มี acronyms เยอะแยะไปหมดจนจะจำไม่ไหวแ้ล้ว ทางฝั่ง ITU ก็เสนอให้เอาเทคโนโลยี MPLS นี่แหละมาทำเป็น transport layer เลย โดยตัด feature ที่ไม่เกี่ยวข้องออกไป โดยเฉพาะในส่วนของ control protocol นี่ให้ตัดออกไปเลยแล้วใช้การ provision ผ่าน network management แทน และก็เน้นเฉพาะ feature ที่จะรองรับ connection-oriented circuit เท่านั้น ITU เรียกอันนี้ว่า T-MPLS

อีกค่ายหนึ่งก็เป็นกลุ่มของทาง IEEE เิริ่มจากการพัฒนาโดยเอา concept ของ 802.1q (VLAN tag), 802.1ad (QinQ) มาใช้พัฒนาเป็นเทคโนโลยีแบบ MAC in MAC ในมาตรฐาน 802.1ah ซึ่งมีชื่อว่า PBB (Provider Backbone Bridge) แล้วก็พัฒนาต่อขึ้นไปอีกเป็น PBT (Provider Backbone Transport) ซึ่งต่อมาก็เปลี่ยนชื่อมาเป็น PBB-TE (Provider Backbone Bridge - Traffic Engineering) โดยใน PBB-TE นี้จะมี frame เหมือนใน PBB แต่จะ disable หลายๆอย่างด้วยกันเช่น mac learning/flooding และใช้การ configure จาก NMS เอาแทน รายละเอียดต่างๆ คงต้องมาเขียนเก็บไว้อีกที

จริงๆแล้วก่อนหน้านี้ก็มีการเอาโครงข่าย MPLS มาเสนอให้เป็น Transport ของ packet traffic เหมือนกัน แต่ใช้ความสามารถของ MPLS network โดยตรง โดยอยู่ในลักษณะของ L2 VPN ที่เรียกว่า Pseudo-wire ที่ IEEE ตั้งมาตรฐานว่า PWE3 (Pseduo-wire emulation edge-to-edge) E3 ก็คือ E ยกกำลังสามไงครับ จำง่ายๆว่าคือของ IEEE โดย PW นี้ก็จะมีทั้งแบบ point-to-point ที่ใช้ martini-draft RFC กับแบบ multipoint ที่เรียกว่า VPLS (Virtual Private LAN Service) บนอุปกรณ์ MPLS ของ Cisco นั้นรองรับ PW มานานแล้วและเรียกว่า AToM (Any Transport over MPLS)

เยอะดีไหมครับ สรุปทั้งสามส่วนนั้นก็เป็นความพยายามจะสร้าง Transport Network ที่มีความเหมาะสมกับการส่งผ่าน Packet มากที่สุดแหละครับ สรุปง่ายๆดังรูปด้านบนนั่นเองครับ จริงๆแล้วในปัจจุบันเราก็พยายามจะใช้ transport network ที่มีอยู่มานานมากแล้วคือ SDH/DWDM นั่นเองโดยเพิ่มความสามารถในการรองรับ Layer 2 เข้าไปและเพิ่ม GFP/VCAT/LCAS เข้าไปเพื่อให้เหมาะสมต่อการ encapsulate และ map Ethernet bandwidth ได้ดีขึ้น นอกจากนี้ก็เอา signaling เข้ามาใช้เพิ่มเข้าไป ก็คือ ASON/GMPLS นั่นเอง ซึ่งความเห็นส่วนตัวผมคิดว่าคงจะไปในแนวนี้อีกนานครับ กว่าทั้ง T-MPLS กับ PBB-TE จะ mature พอ และอย่าลืมนะครับว่า traffic ที่เป็น TDM ก็ยังคงมีอยู่ไม่ได้หายไปไหนมาเป็นเวลานานมากแล้ว ผมคิดว่าโครงข่าย Transport กับ Service ใน core คงจะเป็นดังในรูปข้างล่างนี้ไปอีกพักใหญ่ๆครับ

<center><img id="image167" src="/assets/uploads/2007/10/convergence.jpg" alt="convergence.jpg" /></center>


