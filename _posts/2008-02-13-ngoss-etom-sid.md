---
layout: post
title: "NGOSS, eTOM & SID"
date: 2008-02-13 16:36:23 +0700
categories: ["Telecom"]
comments: 0
---

Another acronyms soup for you. ผมได้มีโอกาสไปดูงานระบบ OSS ของ China Telecom ที่จีนมาก็ได้ความรู้เพิ่มมาพอสมควร ที่ NOC(Network Operation Center) ของเขาดูโอ่โถงใหญ่โตมากเลยครับ เมื่อเทียบกับของ operators ในบ้านเราที่ผมเห็นมา ในบรรดาระบบ Integrated NMS นั้นมีการเรียกกันไปต่างๆนานา เช่น TNMS, TNDM, iNMS แต่โดย concept แล้วก็คือการรวมเอา FCAPS (Fault, Configuration, Accounting, Performance และ Security) และบางทีรวมถึง Inventory Management จากหลายๆอุปกรณ์เข้ามาทำการ manage โดย system เดียวกันผ่านทาง API Interfaces มาตรฐานแบบต่างๆ เช่น CORBA หรือ SNMP เป็นต้น แต่เท่าที่เห็นในบ้านเราก็มักจะทำแค่ Fault, Performance แล้วก็ Inventory เท่านั้น ส่วนการทำ Configuration ก็มักจะทำการ Cut through เข้าไป manage ผ่านทาง NMS ของแต่ละยี่ห้อเหมือนเดิม 

<img id="image201" src="/assets/uploads/2008/02/chinatelecom_noc.jpg" alt="chinatelecom_noc.jpg" />

เดี๋ยวนี้มีการพูดถึง NGOSS หรือ New Generation Operation Support System อ่านออกเสียงว่า เอ็น-กอส นะครับ ซึ่งเป็นหลักการของทาง TMF(TeleManagement Forum) ที่พูดถึงการ Management Business/Component Process ในแบบใหม่ๆที่แยกกระบวนการทางธุรกิจไม่ให้ไปผูกกับการ manage ระบบหรืออุปกรณ์โดยให้อยู่ในลักษณะ distributed มี interfaces มาตรฐานต่อเชื่อมระหว่างกันเป็นแบบ SOA (Service Oriented Architecture) ส่วน information ที่แต่ละระบบหรือส่วนใช้ก็ควรจะต้องเป็นไปในทำนองเดียวกัน (Shared Information Model หรือ SID) อีกคำที่ต้องรู้กันไว้คือ eTOM หรือ enhanced Telecom Operation Map อ่านว่า อี-ทอม นะครับ เป็น framework ในแง่  Business Process ของทาง NGOSS
