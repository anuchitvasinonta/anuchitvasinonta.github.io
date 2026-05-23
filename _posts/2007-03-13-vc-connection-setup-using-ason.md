---
layout: post
title: VC Connection Setup Using ASON
date: 2007-03-13 22:07:38 +0700
categories: ["Telecom"]
comments: 0
---

ASON หรือ Automatically Switched Optical Network กำลังเป็นที่พูดถึงกันมากในวงการ Telecom ที่เกี่ยวกับ SDH หรือ DWDM Transmission ถ้าพูดกันง่ายๆสั้นๆ ASON ก็คือความสามารถที่จะ setup connection ในโครงข่าย SDH โดยใช้ signaling คุยกันระหว่างอุปกรณ์ SDH ในโครงข่ายเองโดยไม่ต้องมีการ setup อย่างที่คุ้นเคยกันผ่านทางระบบบริหารโครงข่ายหรือ NMS เปรียบเสมือนกับเวลาเราโทรศัพท์ วงจรคู่สายจะถูก setup ผ่านชุมสายแต่ละที่โดยใช้ signaling คุยกัน พอคุยเสร็จก็คือวงจรคู่สายกลับไปให้คนอื่นใช้ต่อ ซึ่งเมื่อโครงข่ายมีความสามารถในลักษณะนี้ก็จะทำให้ผู้ให้บริการสามารถให้บริการที่หลากหลายได้ และทำ bandwidth on demand ได้ ในการ setup connection เราก็สามารถเลือกได้ว่าจะให้ใช้ criteria อะไรบ้างเช่น อาจจะใช้ว่า ผ่านจำนวน node น้อยที่สุด ผ่านเส้นทางเป็นระยะทางน้อยที่สุด หรือผ่านเส้นทางที่มี capacity ที่ว่างมากที่สุด

<img id="image83" alt="ASON" src="/assets/uploads/2007/03/ASON.jpg" />

เทคโนโลยีที่นำมาใช้ทำ ASON ก็ประกอบไปด้วยเรื่องของการทำ routing เพื่อให้อุปกรณ์แต่ละตัวรู้ topology และสภาพ traffic ในโครงข่ายว่า congest ตรงไหนบ้าง Protocol ที่ใช้เพื่อการนี้ก็คือ OSPF-TE (Traffic Engineering) เทคโนโลยีอีกส่วนหนึ่งก็คือเรื่องของ signaling เพื่อให้อุปกรณ์แต่ละตัวส่ง message คุยกันเวลาที่จะต้องจองวงจรและ setup connection Protocol ที่ใช้ก็ได้แก่ RSVP-TE เทคโนโลยีส่วนสุดท้ายที่สำคัญก็คือ Link Management Protocol ที่มีหน้าที่จัดการข้อมูลของ local link ที่ต่ออยูกับ node แต่ละ node เทคโนโลยีทั้งหมดนี้ก็เรียกรวมๆกันว่า GMPLS ครับ เพราะยืมเทคโนโลยีส่วนใหญ่มาจาก MPLS เพียงแต่เอามา Generalized ให้มันใช้ได้กับ domain อื่นๆ ด้วย คือ TDM Domain, Wavelength Domain และ Fiber Domain สำหรับ Fiber Domain ก็จะเห็นกันชัดเจนมากขึ้นเมื่อไรก็ตามที่มีอุปกรณ์ประเภท Optical Cross Connection ออกมาใช้งานกันอย่างแท้จริงครับคงเอาสั้นๆแค่นี้พอครับ
