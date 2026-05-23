---
layout: post
title: Various RFID Standards and Frequencies
date: 2007-03-19 22:45:06 +0700
categories: ["Telecom"]
comments: 0
---

ขอสรุปเรื่อง RFID ที่อ่านมาหน่อย มาตรฐานหลักๆของ RFID ในปัจจุบันมีสองค่ายด้วยกันคือ ISO กับ EPCGlobal ทางฝั่ง ISO ก็จะมีมาตรฐาน Air Interface ในย่าน UHF คือ 18000-6A กับ 18000-6B ส่วนทางด้าน EPCGlobal ก็จะมีมาตรฐานออกมาสองรุ่น รุ่นแรกคือ EPCGlobal Gen 1 ซึ่งประกอบไปด้วย Class 0 กับ Class 1 Tag อีกรุ่นหนึ่งคือ EPCGlobal Gen 2 ซึ่งเตรียมไว้สำหรับ Class 1 ขึ้นไป แต่ตอนนี้ใช้กันหลักๆก็เห็นจะมีแต่เฉพาะ Class 1 เท่านั้น

ถ้าพูดกันถึงการจำแนกตาม Class ของ Tag ก็จะมีตั้งแต่ Class 0, Class 1, Class 2 ไปจนถึง Class 3  โดยจะแบ่งตามความสามารถในการเขียนข้อมูลลงไปบน Tag และเรื่อง passive/active ถ้า Class 0 ก็จะเป็น passive และเขียนไม่ได้ Tag ID ถูก fixed มาตั้งแต่โรงงาน พอเป็น Class 1  ก็ัยังคงเป็น passive อยู่ แต่จะ read/write ได้ ส่วน Class 2 ก็จะเป็น semi-passive คือตอนรับข้อมูลจาก Reader เป็นแบบ passive แต่พอจะส่งข้อมูลจะใช้ power จาก battery ช่วยในการส่ง สุดท้ายคือ Class 3 ก็จะเป็น active tag
<p align="right"><!--more--></p>
ส่วนถ้าจะแบ่งกันตามความถี่ก็จะมีอยู่ 4 ช่วงด้วยกันคือ
1. Low Frequency (10-500 kHz) แต่ส่วนใหญ่จะทำงานในช่วย 125-135 kHz ใช้หลักการ modulated backscatter, inductively-coupled เป็น application ในแบบ near-field ย่านนี้ผ่านโลหะไม่ดีแต่ผ่าน tissue, ไม้และน้ำได้ จึงมักใช้ในปศุสัตว์ พวก animal identification
2. High Frequency (10-15 MHz) แต่ส่วนใหญ่ก็จะใช้ 13.56 MHz ใช้หลักการ modulated backscatter, inductively-coupled เป็น application ในแบบ near-field เช่นกัน ระยะทางจะได้มากกว่าแบบ LF ขึ้นมาหน่อยประมาณ 0.7m ผ่านโลหะได้ไม่ดีเช่นกัน มักใช้กับงาน access control และ smart card
3. Ultra High Frequency (860-960 MHz) แต่ส่วนใหญ่ก็จะใช้ช่วง 865-928 MHz ใช้หลักการ modulated backscatter, capacitively-coupled เป็น application ในแบบ far-field ได้ระยะทางประมาณไม่เกิน 10m โลหะพอไหว แต่พวกน้ำกับ tissue ไม่ค่อยดี มักเอาไปใช้กับพวกงาน Logistics
4. Microwave (2.4-5.0 GHz) มักใช้ย่าน 2.4 GHz ใช้หลักการ modulated backscatter, capacitively-coupled เป็น application ในแบบ far-field เช่นกัน แต่ได้ระยะทางที่สั้นกว่าคือประมาณ 1m ย่านนี้จะมีสัญญาณรบกวนง่ายเพราะเป็นย่านที่แออัด

ข้อสังเกตครับในย่าน LF กับ HF ที่ใช้แบบ inductive นั้น ยิ่งความถี่สูงยิ่งได้ระยะทางมากขึ้น ในขณะที่ในย่าน UHF กับ Microwave ที่ใช้แบบ capacitive นั้น ยิ่งความถี่สูงยิ่งได้ระยะทางน้อยลง ผมคิดว่าคงจะเกี่ยวกับว่าแบบ inductive นั้นใช้สนามแม่เหล็กเป็นตัวถ่ายพลังงานให้ Tag ยิ่งรอบ vary มาก Tag ก็น่าจะได้พลังงานที่มากขึ้น ในขณะที่แบบ capacitive นั้นใช้สนามไฟฟ้าจากการรับพลังงานจากคลื่นที่วิ่งเข้ามา ซึ่งยิ่งความถี่สูด ระยะทางจะสั้นลง เพราะความถี่สูงนั้นถูก attenuate เร็วกว่าเมื่อเทียบกับระยะทาง
