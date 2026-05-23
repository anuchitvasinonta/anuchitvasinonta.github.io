---
layout: post
title: Photonics Integrated Circuit (PIC)
date: 2007-09-22 20:56:02 +0700
categories: ["Telecom"]
comments: 0
---

PIC หรือ Photonics Integrated Circuit น่าจะเป็นอะไรที่ปฎิวัติวงการ optical communications เหมือนกับที่ Electronics Integrated Circuit หรือ IC ที่เรารู้จักกันปฎิวัติวงการ Electronics เมื่อหลายปีก่อน ถ้าจะอธิบายว่า PIC คืออะไรก็ให้คิดง่ายๆว่า ก็เหมือนกับการนำเอา optical components ต่างๆไม่ว่าจะเป็น laser, amplifier, multiplexer มารวมกันอยู่บน chip ตัวเดียวกัน เปรียบเหมือนกับ IC เป็นการนำเอา transistors, capacitors, resistor มารวมกันบน chip ตัวเดียวกันนั่นเองครับ ตอนนี้บริษัทที่ทำ PIC ที่ดูเหมือนจะเป็นผู้นำอยู่เจ้าเดียวก็คือ Infinera ซึ่งมี product ประเภท Digital ROADM ออกมาแล้วโดยใช้เทคโนโลยี PIC อันนี้แหละ การที่เป็น Digital ROADM ก็หมายความว่า wavelenth หรือ subwavelenght แต่ละ channel จะถูก convert ไปใน digital domain ทุกครั้งที่ผ่าน Digital ROADM ซึ่งจะทำให้การ provision wavelengths มีความ flexible มาก ไม่มีปัญหาเรื่อง wavelength blocking และมีความสามารถด้าน OAM มากกว่า อีกทั้งยังสามารถนำ control plane เข้ามาใช้กับ optical domain ได้ง่ายขึ้นด้วยเพราะการ engineering optical path ไม่ยุ่งยากเหมือนเดิม
<center>
<img id="image157" src="/assets/uploads/2007/09/pic.gif" alt="pic.gif" /></center>

เทคโนโลยี PIC ทำให้ต้นทุนลดลงมากกว่าครึ่งหนึ่งเมื่อเทียบกับ discrete optical components อย่างในปัจจุบัน นอกจากนี้ยังทำให้ลด internal fiber patching ภายในอุปกรณ์อีกด้วย ซึ่งเชื่อกันว่าเป็นสาเหตุถึง 70% ที่ทำให้อุปกรณ์ fail ตอนนี้การผลิต PIC ก็มีสองแบบคือแบบ hybrid กับแบบ monolithic แบบ hybrid ก็เป็นการนำเอา component บน material ที่ต่างกันมารวมกันบนเป็น chip เดียวกัน ซึ่งก็จะได้คุณสมบัติที่ดีที่สุดสำหรับ component แต่ละตัวบน material ที่เหมาะสม ส่วนแบบ monolithic ก็ง่ายในการผลิตมากกว่าโดยเอา component ทุกอันมาอยู่บน substrate อันเดียวกัน แต่ก็ compromise optimum characteristics ของแต่ละ component ไป

ผมว่า PIC นี่น่าติดตามมาก ใครที่กำลังจะลงทุนสร้าง optical core backbone ในเมืองไทย ถ้ายังมีเวลาไม่รีบ ก็น่ารอดูอีกสักระยะจริงๆ

reference : <a href="http://www.infinera.com/pdfs/articles/What_are_Photonic_Integrated_Circuits_Capacity.pdf ">PIC Whitepaper</a>

