---
layout: post
title: Application Session Controller
date: 2007-12-16 17:02:37 +0700
categories: ["Telecom"]
comments: 0
---

อ่านเจอ term ใหม่คือ ASC หรือ Application Session Controller ซึ่งเป็น software solutions เป็นตัวกลางระหว่าง applications กับ network transport ประเภทต่างๆเพื่อให้ applications ทีมีอยู่ independent ออกมาจาก network technology ซึ่งกำลังมีการเปลี่ยนแปลงอยู่อย่างตลอดเวลา 

background ก็คือที่ผ่านมาเวลามีการพัฒนาพวก IN applications นั้นมักจะต้องมีไปผูกกับประเภทของ network/transport technology ที่ applications นั้นๆจะไปวิ่งอยู่ developer ก็จะต้องเขียนส่วนหนึ่งของ applications เชื่อมต่อไปยังส่วนของ network ด้วย ซึ่งพอมีการเปลี่ยน network หรือต้องการให้ applications นั้นๆสามารถให้บริการได้โดยไม่ขึ้นกับ network เช่น ทั้ง wireless กับ wireline ก็จะต้อง มีการใช้ gateway ในการเชื่อมต่อกัน ซึ่งกับกลายเป็นการสร้างความยุ่งยากเพิ่มขึ้นไปอีก architecture แบบนี้บางทีเรียกว่า Silo Deployment Model

<center><img id="image184" src="/assets/uploads/2007/12/asc1.jpg" alt="asc1.jpg" /></center>

idea ของ ASC ก็คือการมี software solution เป็นตัวกลาง shield application layer ออกจาก network layer โดย ASC จะมี API ที่ครบถ้วนให้กับทาง Application developer เพื่อให้สามารถ access components ต่างใน network layer ผ่านทาง API นี้ ไม่ว่าจะเป็น HLR, Media Gateway, etc. ดังนั้นเมื่อมีการเปลี่ยนแปลง components ใน network ก็จะไม่มีผลกระทบต่อ applications แต่อย่างใด

<img id="image185" src="/assets/uploads/2007/12/asc2.jpg" alt="asc2.jpg" />

บริษัทที่เป็นคนคิด solutions อันนี้รายแรกก็คือ <a href="http://www.apptrigger.com">AppTrigger</a> ซึ่งตอนนี้กำลังให้หนังสือ ASC for Dummies ฟรีอยู่ในหน้าำแรกของเวปของเขา เพียงแค่ลงทะเบียนแล้วรอหนังสือส่งมาทาง email เป็นอีกเทคโนโลยีที่ผมต้อง catch up ครับ

<img id="image186" src="/assets/uploads/2007/12/asc3.jpg" alt="asc3.jpg" />
