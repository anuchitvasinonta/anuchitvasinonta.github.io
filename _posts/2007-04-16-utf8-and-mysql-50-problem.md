---
layout: post
title: UTF8 and MySQL 5.0 Problem
date: 2007-04-16 07:27:50 +0700
categories: ["Blogging", "IT"]
comments: 0
---

ลืมเรื่อง set default-character-set หรือ collation หรือ init-connect settings ใน my.ini ไปได้เลย นั่ง set มาทั้งคืน ไม่ได้มีผลเปลี่ยนอะไรเลย สุดท้ายแค่ใส่ skip-character-set-client-handshake เข้าไปใต้ [mysqld] ก็แก้เรื่องภาษาไทยได้เลย ที่ผมต้องพยายามหาทางให้ได้เพราะผมไม่อยากไปเปลี่ยน code ใน wp-db.php และผมแน่ใจว่า ข้อมูลใน database เป็น utf8 จริงๆ แต่แน่นอนแหละครับ พอเอาไปขึ้น host ของคนอื่นก็ต้องเปลี่ยน wp-db.php นั่นแหละ

ใส่อันนี้เข้าไป mysql_query("SET NAMES 'UTF8'"); ก่อน $this->select($dbname);
