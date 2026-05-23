---
layout: post
title: Social Bookmarking
date: 2006-04-23 11:39:09 +0700
categories: ["Web Services"]
comments: 0
---

นั่งใช้เวลาประมาณครึ่งวันเพื่อเืลือกเวป social bookmark ไว้ใช้งาน เคยได้ยิน <a title="del.icio.us" href="http://del.icio.us">del.icio.us</a>, <a href="http://furl.net">furl.net</a>, <a href="http://spurl.net">spurl.net</a>, <a href="http://blinklist.com">blinklist.com</a>, <a href="http://ma.gnolia.com">ma.gnolia.com</a> เสียเวลาลองทุกอัน ได้ข้อสรุปว่าแต่ละอันก็คล้ายๆกัน จุดที่ต่างและเป็นเรื่องสำคัญที่ทำให้ผมตัดสินใจก็คือ เรื่องการ import/export และ sync ระหว่าง bookmark ของ browser กับตัวเวป สรุปไล่ไปแต่ละอันได้อย่างนี้ครับ

<span style="color: #ff0000">del.icio.us</span>
เป็นที่รู้กันว่า yahoo ซื้อไป user interface ก็ simple ดี ไม่สวยเท่าไร แต่ใช้ง่าย import ไม่มีปัญหา แต่ tag ห้ามมี white space คั่น นั่นก็คือผมต้องเปลี่ยนชื่อ folder ของ bookmark ใหม่ถ้าต้องการจะ sync ในส่วนของ export ไม่ work ครับ grouping และ folder ของผมหายหมดเวลา ต้องใช้ extension ของ firefox ชื่อ <a href="http://dietrich.ganx4.com/foxylicious/">foxylicious</a> ช่วยได้เยอะเลย คือเอา tag มาจัดเป็น folder ให้ แต่ปัญหาคือจะมีรายการซ้ำกันเยอะมากสำหรับ link ที่มี tag แปะอยู่หลายอัน

<span style="color: #ff0000">blinklist</span>.com
user interface สวยครับ ใช้ก็ไม่ยากเท่าไร แต่ความที่ graphics เยอะ จะโหลดช้ากว่าหน่อย import ไม่มีปัญหา tag มี white space ได้ เรียกว่า import ได้เนียนมาก ไม่มี export มี แต่ backup เป็น rss ซึ่งก็ไม่รู้ว่าจะ restore อย่างไร เห็นคนดูแลเวปตอบว่ากำลังจะมีเร็วๆนี้ แต่เท่ากับว่าผม sync กับ bookmark ของ browser ไม่ได้เลย

<span style="color: #ff0000">spurl.net</span>
ไม่ค่อยชอบ user interface เท่าไรอ่ะ มี google ads ด้วย แถม import และยังต้องให้รอ 24 ชั่วโมง export ก็เหมือน del.icio.us คือไม่ work และ ยังไม่ได้ลองหา extension ดู น่าจะหายากกว่าของ del.icio.us แต่ตอน import อันนี้ดีสุดครับเพราะเลือกได้เป็นรายการเลยว่า bookmark ไหนจะ import อันไหนจะไม่ import

Update: หลังจากได้ลองใช้งานแล้วผมว่าในแง่ฟังชั่นก์การทำงานแล้ว อันนี้ work สุดครับ เพราะมีทั้ง Categories กับ Tags โดยเวลา export กลับไปที่ Browser เขาก็จะใช้ Categories แทนเพื่อให้ได้ structure ของ folder เหมือนเดิม ตกลง export ใช้ได้นะครับ ผมพูดผิดไปตอนแรก แต่ผมมักจะได้ error ประหลาดๆอยู่เรื่อยๆเลยเวลาใช้ "misuse...terminated" อะไรประมาณนี้แหละครับ ทั้งๆที่ผมก็ไม่ได้ทำอะไร

Update 2nd time : Error ที่ว่าหายไปแล้ว สรุปแล้วผมว่า spurl ดีที่สุด จะลบจะ import ก็ง่าย ลบได้ทั้งหมดหรือจะเลือกลบทีละ category ก็ได้ เหลือที่ด้อยอยู่สองเรื่องคือ เวลา import ไม่ทำ tagging ให้ แต่นั่นก็เพราะว่าเอา folder structure ไปทำ categories นั่นเอง จะว่าเป็นข้อด้อยก็ไม่ค่อยจะถูกเท่าไร อีกเรื่องหนึ่งก็คือ tag แต่ละอันห้ามมี space คั่น เหมือน del.icio.us

<span style="color: #ff0000">furl.net</span>
มีปัญหาตั้งแต่ตอน import เลย ขึ้น error และ import ได้ครึ่งๆกลางๆ น่าเสียดาย เลยไม่ได้สนใจลองต่อ

สรุปแล้วผมคงตัดสินใจดูระหว่าง del.icio.us กับ blinklist.com ผมว่าถ้าจะใช้ online bookmarking นั้น สิ่งหนึ่งที่ powerful มากๆ ก็คือเรื่อง tagging ทำให้การค้นหาเป็นไปได้งานและ flexible มาก แต่ในขณะเดียวกันก็ทำให้การ sync กลับมาที่ browser นั้นแทบจะเป็นไปไม่ได้เลยเพราะไม่รู้จะจัด folder ยังไง เพราะฉะนั้นก็คือได้อย่างเสียอย่าง ผมว่าประเด็นคือจะ backup ได้อย่างไรมากกว่า เช่นถ้า export เป็น html แล้วสามารถ import กลับไปได้หรือเปล่า หรือในกรณีของ blinklist สามารถเอา file rss กลับไปได้หรือเปล่า ซึ่งก็คงจะต้องรอดูสำหรับ blinklist แต่ del.icio.us นั้นผมได้ทดสอบแล้วว่า import ออกมาแล้วเอากลับไปได้โดยสมบูรณ์ 100%

สุดท้ายผมตัดสินใจที่จะใ้ช้ del.icio.us ครับ ถึงแม้จะเสียดายความสวยงามของ blinklist
