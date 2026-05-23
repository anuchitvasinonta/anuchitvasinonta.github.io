---
layout: post
title: Getting Read More... to Work
date: 2006-04-02 00:53:00 +0700
categories: ["Blogging"]
comments: 1
---

ผมนึกว่าจะเป็นเรื่องง่ายๆ แต่เอาเข้าจริงก็เสียเวลาไปหลายชั่วโมงเหมือนกัน เพราะห่างหายเรื่องเขียนเวป เรื่อง CSS, HTML ไปนานเลยเงอะๆงะๆเล็กน้อย เลยคิดว่าต้องเขียนสรุปไว้สักหน่อยกันลืม สิ่งที่ผมต้องการก็คือต้องการให้มี Read More... สำหรับแต่ละ Blog Post ของผมเพราะบางทีผมเขียนยาวและไม่ต้องการแสดงทั้งหมดในหน้าแรกของ Blog เพราะมันจะยาวไป ก็เลยต้องการให้มีปุ่ม Read More... เฉพาะกรณีที่ Blog อันนั้นยาวไป ผมอ่านจาก Help ของ Blogger.com และก็ไปเจอ Blog ของ <a href="http://nerdierthanthou.nfshost.com/2004/10/i-did-it.html">Amit Upadhyay</a>   ที่บอกวิธีที่ผมต้องการไว้ มาเสริมปรับแต่งอีกนิดหน่อยก็ได้สิ่งที่ผมต้องการ สรุปแล้วผมทำอย่างนี้ครับ<!--more-->
1. เริ่มต้นโดยใส่ code ดังนี้เข้าไปใน Style tag ด้านบน (ให้อยู่ระหว่าง &lt;style&gt;&lt;/style&gt;)

&lt;mainorarchivepage&gt;
span.fullpost {display:none;}
&lt;/mainorarchivepage&gt;

&lt;itempage&gt;
span.fullpost {display:inline;}
&lt;/itempage&gt;

2. ใส่ Javascript ด้านล่างนี้เข้าไปก่อน body คืออยู่ใน head ก็ได้

&lt;script type="text/javascript"&gt;
var memory = 0;
var number = 0;
&lt;/script&gt;

3. หาช่วงของ html body ที่เป็น

&lt;div class="post-body"&gt;
&lt;$BlogItemBody$&gt;
&lt;/div&gt;

แล้วใส่ Javascript นี้ต่อ

&lt;MainOrArchivePage&gt;
&lt;script type="text/javascript"&gt;
spans = document.getElementsByTagName('span');
number = 0;
for(i=0; i &lt; spans.length; i++){
var c = " " + spans[i].className + " ";
if (c.indexOf("fullpost") != -1)
number++;
}
if(number != memory){
document.write('&lt;div class="post-readmore"&gt;&lt;a xhref="&lt;$BlogItemPermalinkUrl$&gt;" mce_href="&lt;$BlogItemPermalinkUrl$&gt;"    title="permanent link"&gt;Read More...&lt;/a&gt;&lt;/div&gt;');
}
memory = number;
&lt;/script&gt;
&lt;/MainOrArchivePage&gt;

4. เพิ่ม style div.post-readmore เข้าไป โดยหลักๆก็คือทำให้ font ได้ขนาดที่ต้องการ และ ให้วางชิดด้านขวาของหน้า และก็ทำ padding ด้วย (font-family, font-size, text-align:right, bottom-padding)

5. เสร็จแล้วครับ ตอนใช้งานก็ให้ใส่ code

&lt;span class="fullpost"&gt; &lt;/span&gt;
ครอบส่วนที่ต้องการละไว้ในหน้าแรกใส่เข้าไป ก็เป็นอันเสร็จพิธีครับ
