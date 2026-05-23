---
layout: post
title: "Cannot Delete Files with \"apache\" Owner"
date: 2007-04-18 08:22:39 +0700
categories: ["Blogging", "IT"]
comments: 1
---

ผมใช้ Bytehoard ตั้งใจว่าจะใช้ manage files บน web แต่ปรากฎว่าเวลา upload files ขึ้นไปจะถูก set owner เป็น apache และ permission เป็น rw------- ซึ่งทำให้ใช้ plesk ลบไม่ได้และก็ download ไม่ได้ด้วย ผมว่าเป็นปัญหาที่เกิดจากสองส่วนด้วยกัน อันแรกคือตัว host เองซึ่ง run php เป็น module ทำให้เวลา spawn child process ออกมาจะมี user เป็น apache ซึ่งผมไม่รู้ว่ามีทาง config ให้ set user/group ให้เป็น user ที่ลูกค้าใช้ได้หรือเปล่า เพราะลองอ่านหนังสือ apache ดูเห็นมี directive AssignUserID สำหรับ Virtual Host อยู่ ไม่รู้ถ้าทาง hosting set อันนี้จะ OK หรือเปล่า อีกส่วนหนึ่งก็คงเป็นเพราะตัว script ของทาง Bytehoard เองที่ไม่รู้ทำไมไป set permission แบบนั้น อาจจะเป็นด้วยเหตุผลด้าน security แต่ก็ถือว่าทำไม่สมบูรณ์เพราะอย่างน้อยก็ทำให้ผม download file ที่ผม upload ขึ้นไปไม่ได้ คือได้ file มาแต่ size เป็น 0

workaround ที่ผมใช้ในการลบ files พวกนี้ก็คือเข้าไปใน plesk filemanager แล้วหา file ที่มี owner เป็น apache แล้วก็ทำการ edit เพื่อใส่ script unlink() กับ rmdir() เข้าไปแล้ว run script นี้ อย่าลืมว่าต้องใช้ absolute path เป็น parameter คือเริ่มตั้งแต่ /home/vhosts/.... (check ดูใน phpinfo())

directory cache กับ upload ของ wordpress ก็มี owner เป็น apache เหมือนกันแต่ดูเหมือน wordpress set permission ได้ถูกต้องจึงไม่มีปัญหาแต่อย่างใด

เพิ่มเติมตัวอย่าง php script ที่ใช้ จะมีทั้ง unlink, rmdir และ chmod ส่วน chown นั้นใช้ไม่ได้ เพราะต้องเป็น root เท่านั้น
<blockquote>
echo unlink("/home/httpd/vhosts/greatnote.com/httpdocs/..")? "success" : "fail";
echo rmdir("/home/httpd/vhosts/greatnote.com/httpdocs/..")? "success" : "fail";
echo chmod("/home/httpd/vhosts/greatnote.com/httpdocs/..",0777)? "success" : "fail";
</blockquote>

สำหรับ chmod ต้องเป็นสี่หลักนะครับคือ 0777 ถ้าเป็น 777 จะไม่ได้
