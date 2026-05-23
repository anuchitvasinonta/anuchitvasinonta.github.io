---
layout: post
title: ECOC 2007 ASON Detail
date: 2007-09-26 02:09:01 +0700
categories: ["Telecom"]
comments: 0
---

จริงๆแล้วผมหวังอยู่ลึกๆว่า OIF จะพยายาม push ให้มีการทำ Interop เรื่อง restoration ต่าง vendor ผ่าน E-NNI ในงาน ECOC (European Conference on Optical Communications) ที่ Berlin ในครั้งนี้เลย แต่พอดู detail แล้วก็ผิดหวังนิดหน่อย พอดีงานที่ต้องทำมีต้องไปเกี่ยวข้องกับ restoration ต่าง vendor ด้วย ก็เลยลุ้นอยู่ว่าจะเอากันหรือยังน้อ

<center><img src="http://www.ecocexhibition2007.com/images/general/logo.gif" alt="ECOC2007" /></center>

มาสรุปรายละเอียดของการทำ demo ในครั้งนี้กันหน่อย อย่างที่รู้กันครับ ครั้งนี้เป็นครั้งที่สาม ครั้งแรกทำปี 2004 ที่งาน SuperComm โดยครั้งนั้นเป็นการทดสอบการสร้างวงจร SDH แบบ dynamic จาก client (ผ่าน UNI) ผ่าน multi-vendor ต่อมาครั้งที่สองในงาน SuperComm ปี 2005 ก็เป็นทดสอบการสร้างวงจร Ethernet บน SDH ผ่าน multi-vendor โดยใช้ control plane ดีขึ้นมาจากครั้งแรกหน่อยคือหันมา show การสร้าง Ethernet circuit บน SDH แทนที่จะเป็นวงจร SDH เฉยๆ สุดท้ายในปีนี้ ก็ทำอะไรเพิ่มขึ้นเยอะเหมือนกัน

โดยปีนี้ก็จะเป็นการทดสอบ UNI 2.0 กับ E-NNI โดย client จะใช้ UNI-C ขอ Ethernet bandwidth โดยฝั่ง transport network ก็จะใช้ UNI-N ทำการ map Ethernet ที่ขอเข้าไปใน SDH ผ่าน GFP และ VCAT และ setup วงจรผ่าน network โดยใช้ ASON control plane และใช้ E-NNI ผ่านต่าง vendor ในส่วนของ control plane เองก็มีการคุยกันระหว่าง embedded controller ที่อยู่ในตัวอุปกรณ์เองกับ proxy controller ที่คุย ASON แทนอุปกรณ์อีกทีหนึ่ง

เทคโนโลยีหลักๆที่มีการ show กัน ก็มีดังนี้ครับ

1. การปรับ Ethernet service bandwidth แบบ in-service โดยใช้ VCAT/LCAS โดย UNI-C ทำการขอ  bandwidth เพิ่มหรือลดมา แล้ว network ก็ทำการเพิ่มหรือลดจำนวน member ของ VCAT ให้โดยไม่กระทบ traffic

2. ปรับปรุง control plane ให้ทำงานในลักษณะ multi layer โดยจะประกอบไปด้วยสามส่วนคือ Ethernet Layer วิ่งอยู่บน VCAT Layer และ VCAT Layer ก็วิ่งอยู่บน SDH Layer อีกทีหนึ่ง การทำ call setup ก็ independent กันระหว่าง layer

3. show ว่าถ้า control plane fail ไป จะไม่มีผลกระทบต่อ traffic และเมื่อ control plane channel recover กลับมา จะต้องมีกระบวนการในการทำ synchronization ใน control plane layer ใหม่

4. ทำการสร้าง service แบบ EPL ตามที่กำหนดใน MEF โดยใช้ control plane (UNI 2.0/E-NNI)

จะเห็นว่าแต่ละปีมีการทำอะไรเพิ่มขึ้นมาค่อนข้างช้าเหมือนกันนะครับ ไม่ได้เร็วอย่างที่ผมคิดเท่าไร แต่พอลงในรายละเอียด มันก็คงมีเรื่องที่ซับซ้อนอยู่เยอะเหมือนกัน เขาถึงค่อยๆขยับทีละนิดๆ
