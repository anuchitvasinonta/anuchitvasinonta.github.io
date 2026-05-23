---
layout: post
title: TWiki Installation Tips
date: 2007-08-13 08:49:06 +0700
categories: ["Digital Content"]
comments: 0
---

ผมได้ลองติดตั้ง TWiki ที่ใช้กันมากในกลุ่มบริษัททางด้านเทคโนโลยีทั้งหลาย โดยมักจะใช้เป็น platform สำหรับ product development หรือสำหรับ technical archive โดยผมได้ลงทั้งบน Windows XP ของผมเองและลงบน Linux Server ของบริษัท มีจุดเล็กๆน้อยๆที่ทำให้เสียเวลาค่อนข้างมากถ้าไม่รู้มาก่อนเลยเอามาจดไว้กันลืม เผื่ออนาคตต้องลงใหม่ (ทั้งสองแบบใช้ Apache เป็น Web Server) จะขอสรุปจุดหลักๆที่ต้องทำนอกเหนือไปจากการติดตั้งตามปกติดังนี้

1. TWiki ใช้ perl เป็นหลักแทบไม่ได้ใช้ php เลย ดังนั้นต้องลง perl ก่อนเลยเป็นอันดับแรก ผมใช้ perl ของ ActivePerl 5.8.8 สำหรับ Windows ส่วน Linux นั้นมีอยู่แล้ว

2. จะมี module อันหนึ่งของ perl ที่ต้องใช้เพื่อให้สามารถ Login และ Logout ได้ใน TWiki คือ CGI::Session (อันนี้เป็นชื่อ module เลยครับ) ซึ่งวิธีการลง module บน ActivePerl ก็ไม่ได้มีเขียนไว้ละเอียดเท่าไรเลย ถ้าไม่รู้อาจเสียเวลาพอสมควร วิธีการก็คือต้อง download CGI::Session module ในรูปแบบ zip file แล้วมาติดตั้งผ่านทาง command line จริงๆแล้ว ActivePerl จะมีโปรแกรม Perl Package Manager มาให้ โดยตามหลักก็คือตัว Perl Package Manager นี้จะ sync เข้ากับ web site ของ ActivePerl แล้วเราควรจะเลือกได้ว่าจะลง module ไหนเพิ่มเติม แต่ผมมีปัญหากับการ sync นี้มาก เพราะลองเท่าไรก็ไม่เห็นจะได้สักที ส่วนวิธีการลงแบบ manual ก็จะมีเขียนไว้ใน help ของ Perl Package Manager ดังนี้
<blockquote>As an alternate method for installing packages, you can download zip files for the packages that you need from http://ppm.activestate.com/PPMPackages/zips/. To use these files:
1. Unzip the package to a temporary directory.
2. Install the package by specifying the ppd file directly:
ppm install c:\tmp\module-name.ppd</blockquote>
ส่วนใน Linux ก็ต้องลง Perl Module เพิ่มเหมือนกันครับ แต่ของผมจะต้องลง FreezeThaw Module ก่อนที่จะลง CGI::Session ด้วย วิธีลงก็ให้ download ทั้ง FreezeThaw กับ CGI::Session RPM มาแล้วลงโดยใช้ rpm -i (ลอง man rpm ดูด้วยแล้วกันว่ามี options อะไรบ้าง) ทั้งสาม modules ผมเอามาไว้ที่นี่ครับ

<a id="p140" href="/assets/uploads/2007/08/CGI-Session-3.95.zip">cgi session module on windows</a>
<a id="p142" href="/assets/uploads/2007/08/perl-FreezeThaw-0.43-1.2.el5.rf.noarch.rpm">freezethaw module on linux</a>
<a id="p141" href="/assets/uploads/2007/08/perl-CGI-Session-4.20-1.rh9.rf.noarch.rpm">cgi session module on linux</a>

3. File ที่มากับ TWiki Installation ใน directory bin จะเป็น perl script ที่ไม่มีนามสกุลอะไร ซึ่งถ้าเราลอง browse มาที่ perl script พวกนี้ผ่าน Apache ใน Windows มันก็จะไม่ run script แต่จะขึ้นมาเป็น text แทน ต้องไปทำการเปลี่ยนนามสกุลให้เป็น .pl ถึงจะยอม วิธีที่จะแก้ปัญหานี้ก็คือต้องเพิ่ม file .htaccess เข้าไปใน directory bin นี้ โดยให้ใส่ settings สองอันนี้เข้าไป
<blockquote>Options ExecCGI FollowSymLinks
SetHandler cgi-script</blockquote>
และอย่าลืมแก้ไฟล์ perl ใน bin ที่หัวไฟล์ให้ชี้ไปยัง location ของโปรแกรม perl ด้วย

4. พอลงทุกอย่างเรียบร้อยแล้ว ก็ให้ไป configure TWiki installation โดยทั่วไปก็จะเป็นที่ http://localhost/TWiki/bin/configure สำหรับใน Windows ให้ไปที่ Store Settings แล้วให้เปลี่ยน parameter ตัวแรกเลยคือ Store Impl ให้เป็น RCSLite ไม่งั้นจะยังใช้ไม่ได้ จริงๆแล้วจะใช้ RCSWrap ก็ได้แต่คุณจะต้องหาโปรแกรมพวก RCS ต่างๆมาลงให้ครบเลยแนะนำให้ใช้ RCSLite ดีกว่าไม่ยุ่งยากดี

5. ใน Windows เพื่อที่จะให้สามารถ search ได้ใน TWiki จะต้องหา script พวก egrep, grep และ ls สำหรับ Windows มาลงด้วย ไม่งั้นจะ search อะไรไม่เจอเลยเพราะ TWiki ใช้ scripts พวกนี้เวลา search อย่าลืมนะครับว่า TWiki นั้นไม่มี database แต่อย่างใด ทุกอย่างเก็บเป็น file based หมด และอย่าลืม set path ไปหา scripts พวกนี้ใน Store Settings ด้วย

6. ทั้ง RCS Support files และ egrep/grep/ls ผม upload ขึ้นมาไว้ที่นี้  <a id="p139" href="/assets/uploads/2007/08/twikiUnixSupportFiles.rar">twikiUnixSupportFiles.rar</a> ครับ

7. เวลาจะ edit templates ให้ดูให้ดีว่า template path set ถูกต้องหรือยัง อย่าลืม set ใน Miscellaneous Settings ด้วย

8. TWiki จะใช้ concept ของ Hierarchy โดยจะเริ่มจาก มี concept ของ Web ซึ่งเราสามารถสร้าง web เพื่อวัตถุประสงค์ต่างๆกันได้ เช่นผมสร้าง technical support web กับ project web ขึ้นมาเพื่อใช้ในการเก็บข้อมูลที่เกี่ยวข้องแต่ละส่วน ถัดจาก web ก็จะเป็น page แต่ละ page โดยที่เราสามารถ set ได้ว่า page ไหนเป็น child หรือ parent ของ page ไหน แต่ละ web ก็จะมี default page คือ WebHome และสามารถ set preferences ของ web นั้นๆได้โดยการ edit หน้า WebPreferences ของแต่ละ web ส่วน Global Settings จะอยู่ที่ TWiki.TWikiPreferences ทั้งนี้ TWiki Web เปรียบเสมือน Root Web ส่วน Default Web ที่ลงมาให้จะเรียกว่า Main web

9. TWiki จะเก็บข้อมูลแต่ละ page ในรูป file โดยข้อมูลที่เป็น internal เช่น FileAttachmentInfo, TopicMovement และข้อมูลใน User-defined form ต่างๆ จะถูกเก็บใน META Tag แต่ก็อยู่ใน file นั้นแหละ

10. FINALPREFERENCES ใช้กันการ set parameter ใน  hierarchy ที่เล็กกว่ามา Override hierarchy ที่ใหญ่กว่า

11.  TWiki page ทุก page จะถูก evaluate ทั้งหมดก่อน ก่อนที่จะเริ่ม output html ออกมา

12. การ add form เข้าใน page ทำโดยการสร้าง table ที่ประกอบไปด้วย fields ของ form ก่อนแล้วเวลาจะสร้าง page ที่ต้องการให้มี form นี้ ก็ให้ทำผ่านตัวแปร formtemplate รายละเอียดดูได้ใน TWiki Documentation

13. เวลาย้ายเครื่องให้เริ่มจากลงใหม่เรียบร้อยแ้ล้วทำการ register user ที่ต้องการใหม่ (ให้ disable mail send ใน security setting กับ mail and proxies setting ผ่าน configure) แล้วย้ายข้อมูลเดิมจาก directory  data กับ pub แค่นั้น ง่ายดีไม่ยาก เหมาะกับการทำงานกับ local ที่อาจต้องมีการย้ายเครื่อง ภายหลัง อย่าลืม backup แล้วกัน
