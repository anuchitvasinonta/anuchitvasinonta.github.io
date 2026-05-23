---
layout: post
title: New DWDM/CWDM Equipment Features
date: 2009-08-23 20:29:01 +0700
categories: ["Telecom"]
comments: 1
---

อุปกรณ์พวก DWDM/CWDM ใหม่ๆ มักจะเน้นขนาดเล็กประมาณ 2U มีความเป็น modular สูง เพื่อให้ initial investment ต่ำ scale ได้ง่าย features ที่สำคัญๆ เช่น รองรับ Ethernet grooming และ/หรือ Ethernet Switching รองรับ Ethernet Protection Ring Switching ที่ sub-50ms โดยถ้าทำตามมาตรฐาน ITU-T ก็จะเป็นเบอร์ G.8032 นอกจากนี้ในบางยี่ห้อก็จะมีการ์ดที่เป็นพวก Muxponder ที่รองรับหลาย protocol เช่น GE, FC, SDH, SDI โดยใช้ software config เอา การ์ด Muxponder พวกนี้บางยี่ห้อจะมี 2 Line Ports ทำให้สามารถทำ protection ในลักษณะคล้ายๆ SNCP ได้ ทำให้มีประโยชน์มากเพราะสะดวกในการใช้งานในโครงข่ายที่เชื่อมต่อเป็น Ring หรือ Chain และทำให้ไม่เปลือง slot ด้วย Line Port บน Muxponder การ์ด นั้นควรจะสามารถเลือกได้ว่าจะใช้ framing แบบไหนระหว่าง STM-64 หรือ OTU-2 (ในกรณี 10G Muxponder)
Features อื่นที่ถือเป็นมาตรฐานที่ควรจะรองรับได้ ก็คือ รองรับ Carrier Ethernet 802.3ah, MEF9, MEF14 สามารถ Monitor Ethernet Performance ได้พอสมควร และ รองรับ ROADM โดยอย่างน้อยก็น่าจะ drop ได้สัก 8 channels ROADM เริ่มต้นก็จะเป็น 2 degree แต่ถ้าสามารถรองรับ Multi-degree ได้ด้วยก็จะดี
