---
layout: post
title: Get Login Page in Drupal
date: 2007-09-10 07:54:38 +0700
categories: ["Blogging", "Web Services"]
comments: 0
---

ผมไปลองตั้งให้ User Login module ใน Drupal เห็นเฉพาะ authenticate user ทีนี้พอ logout ออกมาแล้วก็จะหาทาง login ไม่เจอจะเข้าไปเปลี่ยนอะไรอีกทีก็ไม่ได้ วิธีเอาหน้า login เข้ามาก็คือไปที่ ?q=user ดูง่ายๆแต่บางทีก็ลืมหรือนึกไม่ถึงเหมือนกัน ที่ต้อง disable login ก็เพราะ site ที่ทำอยู่ยังไม่จำเป็นต้องเปิดรับ user และยังมีปัญหานิดหน่อยกับ IE เรื่อง frameset ด้วย
