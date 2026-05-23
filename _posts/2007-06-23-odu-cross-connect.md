---
layout: post
title: ODU Cross Connect
date: 2007-06-23 11:00:36 +0700
categories: ["Telecom"]
comments: 0
---

ในอุปกรณ์ BBXC ของทาง Telecom ที่ใช้เทคโนโลยี SDH มักจะมี spec ที่สำคัญคือขนาดของ Cross Connect ครับ โดยจะบอกเป็น ตัวเลขของ High Order และ Low Order ตัวเลข High Order คือการ cross connect กันที่ระดับ VC-4 หรือ STM-1 ส่วนตัวเลขของ Low Order คือการ cross connect กันที่ระดับ VC-3 (34 Mbps) หรือ VC-12 (2 Mbps) ส่วนล่าสุดนั้นเมื่อมีเทคโนโลยี DWDM นั้น แต่ละ wavelength จะถูกหุ้มด้วย overhead อีกชั้นหนึ่งนอกเหนือไปจาก SDH Overhead หรือ Overhead ของอะไรก็ตามที่หุ้มอยู่ใน wavelength นั้นๆ แต่ก่อนเรียกกันว่าเป็น Digital Wrapper ซึ่งเป็นไปตามมาตรฐาน G.709 มีเป็นลำดับชั้นเลียนแบบ SDH เช่น OCH, OPU, ODU, OMS และ OTS ดังนั้นอุปกรณ์ BBXC ใหม่ๆที่ทันสมัยหน่อยก็จะสามารถ cross-connect กันในระดับ ODU ได้เลย ไม่จำเป็นต้องแกะลงไปถึง VC-4 เพราะไม่จำเป็น และ traffic ที่วิ่งอยู่ใน wavelength อาจจะไม่ใช่ SDH traffic ก็ได้ แต่ทุก wavelength จะมี ODU เหมือนกันหมดถ้าเป็นไปตาม G.709 ครับ
