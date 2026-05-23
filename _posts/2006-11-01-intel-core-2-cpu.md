---
layout: post
title: Intel Core 2 CPU
date: 2006-11-01 16:47:47 +0700
categories: ["IT"]
comments: 0
---

ผมได้ไปฟังสัมมนา Intel มา สรุปแล้วตอนนี้ CPU ใหม่ล่าสุดของทาง Intel ก็คือ Core 2 Architecture ซึ่งมีหลากหลาย platform และเรียกชื่อต่างๆกันไป สำหรับ desktop ทั่วไปก็คือ Core 2 Duo กับ Core 2 Extreme ซึ่งมี 2 Cores ใน 1 CPU โดย Core 2 Extreme จะมี clock speed ที่มากกว่าคือ 2.93 GHz ส่วน speed ต่ำกว่านี้จะเป็น Core 2 Duo ในส่วนของ Laptop จะเรียกว่า Centrino Duo ซึ่งต้องระวังให้ดีนะครับเพราะจะมีใช้ CPU อยู่สองแบบคือ Core Duo ซึ่งออกมาก่อนหน้านี้และ Core 2 Duo ซึ่งเป็นอันล่าสุดที่เิพิ่งจะออกมา ในส่วนของ Server Platform ก็จะมี Xeon กับ Itanium platform โดยจะมีทั้งแบบ DP (Dual Processor) โดยแต่ละตัวก็จะเป็น Core 2 Duo เพราะฉะนั้นก็จะมี 4 Core และถ้าเป็นแบบ MP (Multi Processor) เช่น 4 Processors ก็จะมี 8 Core จุดเด่นๆของ Core 2 Duo ก็คือมี Performance ดีกว่า ประมวลผลจำนวนคำสั่งต่อ clock cycle ได้มากขึ้น(รู้สึกจะจาก 3 เป็น 4) มีระบบ L2 Cache ที่ share ระหว่าง Core ได้ กินไฟน้อยกว่าเพราะ component ไหนไม่ใช้จะเข้าสู่ low power mode

อีก technology หนึ่งที่ผมว่าน่าสนใจมากๆก็คือ Intel vPro ซึ่งเป็นการ bundle หลายๆ component ทั้ง CPU, Network Chipset, Virtualization เข้าด้วยกันเพื่อใช้สำหรับการ manage Business Desktop computer โดยจะแยกการทำงานของ User Partition ออกจาก Service Partition โดยที่ Service Partition นี้ก็จะมี Service OS, Network Stack และมี Web Server อยู่ โดย Service Partition นี้ทำงานอยู่ใต้ OS เปรียบเสมือนเป็น Virtual Machine ที่ System Admin สามารถเข้าไป manage ได้ตลอดเวลา และสามารถสั่ง disable network, reboot, ปิดและเปิดเครื่องได้ โดย User Partition จะมอง network ผ่าน virtual network device แทน (ถูกควบคุมโดย service partition อีกทีหนึ่ง) ดังนั้นถึงแม้ OS จะ crash, system admin ก็ยัง browse เข้าไปดูรายละเีอียด, log และ events ต่างๆได้ผ่านทาง service partition ซึ่งมี web server run อยู่ ผมดู demo ในงานแล้วก็ไม่เลวเหมือนกันและน่าจะเป็น Trend ในอนาคต สำหรับองค์กรที่ต้องจัดการกับเครื่ีอง desktop จำนวนมาก
