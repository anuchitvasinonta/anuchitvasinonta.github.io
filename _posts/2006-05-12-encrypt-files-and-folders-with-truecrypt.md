---
layout: post
title: Encrypt Files/Folders with TrueCrypt
date: 2006-05-12 15:04:58 +0700
categories: ["IT"]
comments: 0
---

ว่าจะเขียนเกี่ยวกับ <a title="truecrypt" href="http://www.truecrypt.org">truecrypt</a>   มานานแล้ว ผมว่าถ้ายกเว้นเรื่องที่ว่าต้องมี user level เป็นระดับ admin เวลาจะ mount files หรือ devices แล้ว อย่างอื่นก็ ok หมด secure มาก หลักการสั้นๆก็คือ truecrypt จะทำการ encrypt drive ทั้ง drive หรือสร้าง file ที่สามารถจะ mount ไปเป็น drive ได้ขึ้นมา (create volume) ข้อมูลที่อยู่บน drive หรือ file ที่มีการ encrypt นี้จะมองดูเสมือนเป็น random data ทั้งหมด ไม่มีทางที่จะพยายามดูด้วย hex หรืออะไรทั้งนั้น ทางเดียวที่จะดูได้ก็คือต้องให้ truecrypt ทำการ mount เข้ามาเป็น drive อันหนึ่ง ซึ่งก็จะต้องมี password ที่ถูกต้อง นอกจากนี้ในขณะที่ mount อยู่นั้น ข้อมูลทุกอย่างที่มีการเขียนลงใน truecrypt container นี้จะถูก encrypt ตลอด จะไม่มีการเขียนข้อมูลที่ถูก decrypt กลับไปใน container นี้แต่อย่างใด ข้อมูลที่ถูก decrypt เพื่อนำไปใช้งานจะผ่านทาง memory อย่างเดียวเท่านั้น เรียกว่าเป็นแบบ On-the-fly encrypt/decrypt

วิธีการที่ผมจะนำมาใช้งานก็คือ ผมจะสร้าง truecrypt container ในแบบ file-hosted แล้วก็เก็บข้อมูลลงใน file นี้จากนั้นผมก็สามารถจะเก็บ file อันนี้ไว้ที่ไหนก็ได้ ไม่มีทางที่ใครจะสามารถดู content ของไฟล์นี้ได้ถ้าไม่มี password ที่ถูกต้อง สำหรับ encryption mechanism ของ truecrypt ก็มีให้เลือกหลายแบบ ถือเป็นโปรแกรมที่เป็นที่นิยมและเป็นที่แนะนำของคนในวงการ security หลายคนเช่น Steve Gibson เป็นต้น

ส่วนเวลาจะ run truecrypt ก็ไม่จำเป็นต้องลงโปรแกรมก็ได้ ให้สร้าง executable files ที่ใช้ run ได้เลยจาก tool ที่มีอยู่แล้วในโปรแกรม truecrypt โดยไปที่ menu Tools\Traveller Disk Setup... แล้วก็เลือก location ที่จะให้โปรแกรมสร้างพวก executable files ที่ต้องการ ซึ่งก็จะประกอบไปด้วย 4 files ด้วยกันคือ Truecrypt Format.exe, Truecrypt.exe, Truecrypt.sys และ Truecrypt-x64.sys เวลาจะ run ก็แค่ double click Truecrypt.exe ก็สามารถจะ mount file ที่เก็บ truecrypt container อยู่ได้

<img alt="tc_travellerdisktool.gif" id="image39" src="/assets/uploads/2006/05/tc_travellerdisktool.gif" />

เพราะฉะนั้นผมก็สามารถเก็บไฟล์สำคัญๆไว้บน usb drive หรือ internet ได้ เพียงแค่อย่าลืม copy files 4 files เข้าไปด้วยเพื่อใช้ run truecrypt ก็เป็นอันเรียบร้อย สุดท้ายเป็น feature ที่อยากให้มี คือแทนที่จะต้อง run โปรแกรม truecrypt เวลาต้องการ decrypt เนี่ย น่าจะสามารถมีแบบ self decrypt ได้เลยโดยแค่ double click เท่านั้น แต่ผมว่ามันอาจจะเกี่ยวข้องกับการที่โปรแกรมมันทำงานแบบ on-the-fly ด้วยละมั๊ง แต่ยังไงข้อดีก็กลบข้อเสียได้ แล้วก็ข้อดีอีกอย่างหนึ่งก็คือตัวโปรแกรมเป็น Open Source ด้วย
