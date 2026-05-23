---
layout: post
title: Put del.icio.us on your blog
date: 2006-04-16 21:51:01 +0700
categories: ["Blogging", "Web Services"]
comments: 0
---

อย่างสรุปเลยนะครับ ผมต้องการเอา bookmarks ที่ผมเก็บไว้ใน del.icio.us มาแสดงใน sidebar ของ blog ผม โดยผมใช้ plugin ชื่อ <a href="http://soderlind.no/archives/2004/11/08/aggrss-an-rss-aggregator/">aggrss</a> สำหรับ wordpress ซึ่งเจ้า plugin ตัวนี้ต้องใช้ function จาก <a href="http://lastrss.webdot.cz/lastRSS.zip">lastRSS</a> (ทั้งสองไฟล์ผม save local ไว้ด้วย just in case ที่นี่เลยครับ <a id="p17" onmousedown="selectLink(17);" href="/assets/uploads/2006/04/aggrss.php.txt">aggrss.php.txt</a> และ <a id="p18" onmousedown="selectLink(18);" href="/assets/uploads/2006/04/lastRSS.php.txt">lastRSS.php.txt</a>) ขั้นตอนในเรื่อง plugin นี้มี 4 ขั้นตอนง่ายๆ คือ

1. สร้าง directory lastRSS ใต้ wp-content/plugins และ download lastRSS.php มาเก็บไว้ใน wp-content/plugins/lastRSS แล้วก็

2. download aggrss.php มาไว้ในใน directory plugins สร้าง directory aggrss-cache ไ้ว้ใต้ wp-content (ถ้าต้องการเปลี่ยนให้เปลี่ยนได้ใน aggrss.php) อย่าลืม set ให้เป็น read+write ด้วย
<!--more-->
3. แล้วก็ activate aggrss พร้อมทั้ง set ค่า $items_limit ใน lastRSS.php ตามที่ต้องการ ซึ่งน่าจะเป็นอันเดียวที่ต้อง set แล้วก็อ่านวิธีใช้ aggrss ในส่วนต้นๆของ aggrss.php ซึ่งไม่ซับซ้อนอะไรมาก

4. ใส่ code ตามตัวอย่างที่ให้ไว้ในส่วนต้นของ aggrss.php เช่นของผมใส่ del.icio.us bookmarks ไว้ใน sidebar ของผมก็จะใส่ code เหมือนใน file <a id="p16" onmousedown="selectLink(16);" href="/assets/uploads/2006/04/delicious_feed.txt">del.icio.us Feed Code example on sidebar</a> ไว้ใน sidebar

เป็นอันเสร็จเรียบร้อยครับ วิธีการที่ผมใช้ในการเอา links จาก del.icio.us มาจะมีเพิ่มเติมใน style ของผมเองนิดหน่อยคือเนื่องจากใน rss feed ที่ del.icio.us ส่งให้นั้นถ้าเป็น feed จาก level แรกเลยคือเช่นในกรณีของผมก็จะเป็น del.icio.us/rss/anuchit มันจะไม่มี description field ส่งมาให้ แต่ถ้าเพิ่มให้เอา feed เฉพาะของแต่ละ tag มามันจะมี description field มาให้ ผมก็เลย tag คำ่ว่า Public ให้กับทุก link ที่ผมต้องการจะ share อยู่แล้วซึ่งมันก็สอดคล้องกับความต้องการผมพอดี เพราะพวก link ที่ผมไม่ต้องการจะ share ผมก็จะ tag คำว่า Private ทำให้ง่ายในการ manage bookmarks บน del.icio.us ของผมด้วย เสร็จแล้วเวลาผมเลือก link มาแสดงบน blog ของผม ผมก็แค่ให้เอา link ที่มี tag Public อยู่มา โดย set เวลา call function ใช้งานและก็ทำให้ผมได้ description field มาด้วย
