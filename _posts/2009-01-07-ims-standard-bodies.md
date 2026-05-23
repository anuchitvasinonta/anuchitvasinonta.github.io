---
layout: post
title: IMS Standard Bodies
date: 2009-01-07 07:25:48 +0700
categories: ["Telecom"]
comments: 0
---

ที่สำคัญๆ เห็นจะมี 3GPP, 3GPP2, TISPAN โดย 3GPP กับ 3GPP2 ไม่ได้เกี่ยวข้องกันแต่ 3GPP เป็นองค์กรทางฝั่งยุโรป เป็นผู้ที่พัฒนามาตรฐาน GSM และก็มีส่วนสำคัญในการผลักดัน IMS ส่วน 3GPP2 เป็นทางฝั่งอเมริกาพัฒนามาตรฐานต่างๆสำหรับระบบ CDMA ไปสู่ IMS Architecture โดย 3GPP นั้นย่อมาจาก 3rd Generation Partnership Project ส่วนทาง TISPAN นั้นก็เป็นองค์กรที่มีส่วนในการผลักดัน IMS แต่มาทางด้านผู้ให้บริการ Fixed Line ทั้งสามองค์กรนี้ก็มีความร่วมมือกันอยู่ เพื่อให้การพัฒนา IMS เป็นไปในแนวทางเดียวกัน

<img src="http://www.3gpp.com/IMG/siteon0.jpg" alt="" width="108" height="95" /><img src="http://www.3g.co.uk/PR/December06/Third.gif" alt="" width="173" height="72" /><img src="http://www.radvision.com/japan/images/TISPAN_logo.jpg" alt="" width="100" height="56" />

IMS หรือ IP Multimedia Subsystem โดยสรุปก็คือโครงสร้างโครงข่ายแบบใช้ IP เป็น Core และ Services ที่มีอยู่จะ access เข้ามาด้วย technology แบบไหนก็ได้ไม่ว่าจะเป็น fixed line telephone, mobile, broadband, TV, etc. โดยมีการ manage subscriber ได้แบบรวมศูนย์ ใช้ signaling SIP ใช้ concept ของ sessions เป็นหลัก เช่น subscriber รายหนึ่งอาจจะใช้บริการ โทรมือถืออยู่ก็เป็น 1 session พอต้องการ share video ให้คู่สนทนาดูก็เป็นอีก 1 session พร้อมๆกันไป operator ก็เก็บเงินตาม session ส่วน database ที่ใช้ manage subscriber ก็จะเรียกว่า HSS (คล้ายๆ HLR ใน cellular) components หลักๆที่ enable IMS ก็จะเป็น CSCF หรือ Call Session Control Function ซึ่งประกอบไปด้วยหลายตัวทำหน้าที่ต่างๆกัน เช่น S-CSCF, P-CSCF
