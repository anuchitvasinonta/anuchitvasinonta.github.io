---
layout: post
title: 3rd ASON Interop Test
date: 2007-09-18 09:41:18 +0700
categories: ["Telecom"]
comments: 0
---

วันที่ 17-19 กันยายน 2550 บรรดา optical vendors และ operators รายใหญ่ทั้งหลายมาร่วมกันทดสอบ Interop ของ ASON กันอีกครั้งเป็นครั้งที่สามโดยครั้งนี้ผู้ที่เข้าร่วมทดสอบในฝั่ง vendors ก็มี Alcatel-Lucent, Ciena, Ericsson, Huawei Technologies, Marben Products, Sycamore Networks, Tellabs และ ZTE ส่วนในฝั่งของ operators ก็มี AT&T, China Telecom, Deutsche Telekom, KDDI Labs, Telecom Italia และ Verizon หลายคนอาจจะไม่คุ้นกับ Marben Products บริษัทนี้เป็นบริษัทที่ทำ software ที่เกี่ยวกับ network protocol stack ทั้งหลายเช่น protocol ต่างๆใน GMPLS และบริษัท vendor หลายๆรายก็ใช้บริการของบริษัทนี้

ปีนี้ก็จะทดสอบในเรื่อง Ethernet Private Line ผ่านหลาย vendor โดยใช้ UNI 2.0 ร่วมกับ E-NNI โดย features หลักๆที่ทดสอบกันประกอบด้วย การ setup Ethernet Private Line ผ่่าน control plane, การทดสอบเรื่อง neighbor discovery, การทดสอบเรื่อง control plane failure recovery และการทดสอบเรื่อง in-service bandwidth modification (คงจะใช้ LCAS)  นอกจากนี้ใน control plane ก็จะมีการทดสอบการ interwork กันระหว่าง ASON controller ที่ฝังอยู่ใน network element กับ proxy controller ที่เป็น server ที่ทำหน้าที่แทน network element ในการคุย protocol ASON กับคนอื่นอีกที

เพียงแค่วันแรกทาง OIF ก็ประกาศว่าทดสอบสำเร็จเรียบร้อยแล้วครับ ก็คงจะเตรียมการกันมาก่อนหน้าแล้วแหละครับ สามวันนี้ก็คงจะ show ให้ public ทราบเท่านั้นเอง ดูรายละเอียดได้ที่เวป oif ครับ <a href="http://www.oiforum.com">www.oiforum.com</a>

Update นิดครับ ผมเพิ่งสังเกตุว่า ITU-T ออกมาตรฐาน 8011.1 สำหรับ EPL และ 8011.2 สำหรับ EVPL ออกมาแล้วนะครับ
