---
layout: post
title: Adding CNAME for Google Sites
date: 2008-03-22 08:45:11 +0700
categories: ["Web Services", "IT"]
comments: 0
---

เวลาใช้ google sites พวก mail หรือ calendar แล้วต้องการ set ให้ mail.yourdomain.com หรือ calendar.yourdomain.com อันหนึ่งที่ต้องทำคือ add CNAME ใน DNS Record ของ Hosting ที่ใช้อยู่ให้ชี้ไปที่ ghs.google.com Host ของผมใช้ directadmin เวลา add CNAME ต้องอย่าลืม add "." ไปข้างหลังด้วยคือต้องเป็น ghs.google.com. ไม่งั้นไม่ work ครับ
