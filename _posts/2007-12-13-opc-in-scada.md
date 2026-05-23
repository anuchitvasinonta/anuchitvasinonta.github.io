---
layout: post
title: OPC in SCADA
date: 2007-12-13 19:25:32 +0700
categories: ["General Technology"]
comments: 0
---

ได้คุยกับคนที่เขียน program คุมพวกอุปกรณ์ control device และเครื่องจักรต่างๆ เดี๋ยวนี้จริงๆก็ง่ายขึ้นเยอะ แต่ก่อนจะเขียนโปรแกรมเพื่อคุมอุปกรณ์อะไรจะต้องมี driver เฉพาะ แต่เดี๋ยวนี้ใช้มาตรฐานที่เรียกว่า OPC หรือ OLE(Object Linking and Embedding) for Process Control ซึ่งอุปกรณ์ทุกตัวก็จะมี OPC Server เป็น interface เพื่อให้ application ที่ต้องการ get ข้อมูล interface เข้ามาโดยทำตัวเป็น OPC Client ส่วน tool ที่ใช้กันเยอะก็คือ Intouch ของบริษัท Wonderware ซึ่งเป็นลักษณะของ IDE platform จุดเด่นของ Intouch คือรองรับอุปกรณ์ได้เยอะมาก
