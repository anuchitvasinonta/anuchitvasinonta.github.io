---
layout: post
title: ASON Protection
date: 2008-12-21 16:39:32 +0700
categories: ["Telecom"]
comments: 0
---

ยี่ห้อจีนที่ดังๆมี ASON Protection อยู่สามสี่แบบโดยจะเรียกดังนี้

<ul>
	<li>Permanent 1+1 คือการมี Protection แบบ dedicate อยู่ตลอดเวลา สามารถ switch ภายใน 50ms ได้ ถ้าวงจรที่ใช้ protect fail ไป (ไม่กระทบ traffic)ASON ก็จะ restore หาวงจรสำหรับให้เพื่อให้เป็น 1+1 protect อีกครั้งหนึ่ง คล้ายๆกับมี MSP 1+1 หรือ SNCP อยู่ตลอดเวลา</li>
	<li>Rerouting 1+1 คือการมี Protection แบบ dedicate ตอนแรกที่ setup วงจร แต่จะไม่มีการทำ restoration จนกระทั่งวงจรทั้งสองส่วน fail</li>
	<li>Non Rerouting 1+1 มีค่าเท่ากับ protection แบบ MSP หรือ SNCP ธรรมดา</li>
	<li>Rerouting เฉยๆ</li>
</ul>


