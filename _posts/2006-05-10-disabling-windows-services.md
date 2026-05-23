---
layout: post
title: Disabling Windows Services
date: 2006-05-10 09:18:23 +0700
categories: ["IT"]
comments: 0
---

ลองศึกษาหาข้อมูลจากอินเตอร์เน็ตว่าจะสามารถ disable services อันไหนของ windows xp ได้บ้าง ปรากฏว่าสามารถ disable ได้เยอะมาก สุดท้ายผม disable ไปมากกว่าครึ่งจากของเดิม และก็ทำให้ start windows ได้เร็วขึ้นพอสมควร เหลือ services ที่ให้ start อยู่แค่ตามรูปด้านล่าง มีสองสามตัวที่ต้องจดไว้กันลืมที่ไป disable แล้วมีปัญหา
<img id="image29" alt="My XP enabled services" src="/assets/uploads/2006/05/xpservices.gif" />

อันแรกคือ DCOM Server Process Launcher ซึ่งพอ disable แล้วเวลา start Microsoft Word แล้วจะมี error ขึ้นประมาณว่า cannot register the document แต่พอมาเปลี่ยนให้เป็นแบบ Automatic เหมือนเดิมก็ไม่มีปัญหาอะไร แต่อย่าลืมเปลี่ยนแล้ว restart windows ด้วย

อีกตัวหนึ่งคือ Print Spooler ซึ่งถ้า disable หรือ manual จะทำให้ printer ทั้งหมดที่ set ไว้หายไปหมด แต่พอ start service ใหม่ก็กลับมาเหมือนเดิม ส่วน service ที่ชื่อ Theme ถ้า disable ไปหน้าตาของ xp ก็จะเปลี่ยนไปบ้าง ถ้าไม่สนใจก็ไม่เป็นไร (just look and feel)

[Update: May 28, 2006]
เวลาจะ update windows ต้อง enable Automatic Updates กับ Background Intelligent Transfer? Services แล้วต้อง restart นะครับ start services เฉยๆไม่ได้

อีกเรื่องที่ผมว่าจะทำให้ xp เร็วขึ้นบ้างสำหรับเครื่องเก่าที่มี memory น้อยก็คือในส่วนของ Performance Setting เข้าไป set ที่ Computer\Properties\Advance\Performance Setting ของผมเอา options ต่างๆ ออกหมดเหลือไว้แค่สองอันเท่านั้นตามรูปด้านล่าง

<img width="90%" id="image31" alt="xpperformance.jpg" src="/assets/uploads/2006/05/xpperformance.jpg" />

อีกอันหนึ่งที่ทำให้รู้สึกว่าดูเ้ร็วขึ้น ก็คือ Mouse setting โดย set Motion ให้เร็วที่สุดเท่าที่รู้สึกว่าไม่ขัดอะไร อันนี้อาจจะไม่ค่อยมีผลในแง่ performance เท่าไร แต่ผมว่าให้ความรู้สึกว่าเร็วขึ้นอย่างสังเกตุเห็นได้พอควร
<img width="90%" id="image32" alt="mousesetting.jpg" src="/assets/uploads/2006/05/mousesetting.jpg" />
