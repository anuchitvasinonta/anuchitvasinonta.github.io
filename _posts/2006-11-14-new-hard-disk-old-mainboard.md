---
layout: post
title: "New Hard Disk, Old Mainboard"
date: 2006-11-14 22:03:22 +0700
categories: ["IT"]
comments: 0
---

ผมซื้อ Hard Disk 250GB/7200RPM/8MB ของ Seagate มาเมื่อวานเพื่อมาเปลี่ยนในเครื่อง PC ที่บ้าน ส่วน Hard Disk อันเดิมก็จะย้ายไปเครื่อง PC อีกตัวหนึ่งซึ่งเป็นตัวเก่าเป็น AMD 800 MHz Mainboard ของ Gigabyte ตอนแรกนึกว่าจะง่ายๆ ใส่ปุ๊ปใช้ได้ปั๊ป ปรากฏว่าเสียเวลาอยู่เกือบทั้งคืน ด้วยความที่ลืมพื้นฐานง่ายๆไปซะนี่

<strong>Primary vs Extended Partition</strong>
ผมใช้ Acronis จัด Partition ให้กับ Hard Disk ตัวใหม่ และก็ไปคิดง่ายๆว่าจะเอา Logical Partitions 2 อัน ก็เลยสร้างเป็น Logical Partition ทั้งคู่ Acronis ก็ดันยอมให้ทำ แต่ไปขึ้น error เอาตอน Commit สุดท้ายเลยไปใช้ Tool ของ Windows XP ตัว Disk Mananagement มาจัดการเลยกลับมาจำได้ว่า Disk แต่ละก้อนนั้นต้องมี Primay Partition อย่างน้อย 1 Partition ก่อนจากนั้นจึงจะมี Extended Partition เพื่อบรรจุ Logical Partition ได้ ...ตายน้ำตื้นครับ

<strong>Old Bios Do Not Support Hard Disk > 32GB</strong>
พอเปลี่ยน Hard Disk เสร็จผมก็เอา Hard Disk ตัวเก่าขนาด 80GB ไปใส่ใน PC ตัวเก่าปรากฏว่าไม่ได้แฮะ เครื่องมันหาไม่เจอ ไล่ไปไล่มาพบว่า Bios version ที่ใช้อยู่เก่าไปต้องทำการ Update เสียก่อน Web Gigabyte นี่ดีเหมือนกันมีข้อมูลและ Utility ในการ Upgrade ครบและใช้ง่าย ผม Upgrade จาก model 7ZX F8 เป็น 7ZX Fg พอ Upgrade เรียบร้อยก็มองเห็น Hard Disk ทันที

<strong>Cable Select vs Master/Slave</strong>
สุดท้ายมาติดปัญหาว่าใน Secondary IDE Bus นั้นผมใส่ไอ้เจ้า Hard Disk 80G กับ Combo Drive อยู่และ Set Jumper เป็น Cable Select ทั้งคู่ ปรากฏว่าเครื่องเห็น Hard Disk แต่ไม่เห็น Combo Drive ทำยังไงก็ไม่เห็น ผมเลยลอง Set Hard Disk ให้เป็น Master และ Set Combo Drive ให้เป็น Slave ก็เลยได้ในที่สุด อันนี้คาดว่าก็คงเป็นอะไรที่ง่ายๆเหมือนกัน แต่ผมไม่รู้มาก่อน สุดท้ายก็เลยเสียเวลาเกือบทั้งคืน

[Edit] เพิ่งรู้เนี่ย ว่าต้องใช้ Cable ให้ถูกประเภทด้วยครับเพื่อที่จะ set เป็น Cable Select ได้
