---
layout: post
title: Ellacoya DPI Appliances Tackle Encrypted Traffic
date: 2006-10-15 22:36:29 +0700
categories: ["Telecom"]
comments: 0
---

ผมได้เคยเข้าไปยุ่งเกี่ยวกับเรื่องของ technology การ manage bandwidth อยู่พักหนึ่ง ซึ่งผมสรุปง่ายๆตามประสาผมเองว่ามีวิธีการทำงานอยู่สองลักษณะคือแบบที่เรียกว่า DPI หรือ Deep Packet Inspection กับแบบ Flow-Based แบบแรกคือการเข้าไปดูเนื้อ content ของ packet เลยว่าเป็น protocol อะไร เป็น application อะไร เป็นของ user คนไหน ซึ่งจุดอ่อนของแบบนี้ก็คือไม่สามารถใช้กับ packet ที่มีการ encrypt ได้และต้องเป็น traffic ในลักษณะ symmetry คือเข้าและออกต้องผ่านอุปกรณ์ DPI ตัวเดียวกันเพื่อให้สามารถควบคุมการ manage bandwidth ได้จริง ส่วนแบบ flow-based นั้น ใช้การตรวจสอบ characteristics ของ flow เช่น packet size, interpacket gap และอีกหลายๆค่าเอาเพื่อจะพยายามที่จะแยกแยะว่า flow นั้นเป็น traffic ประเภทไหน เป็น real time หรือ non-real time และพอจะแยกแยะได้ด้วยว่าเป็น traffic ของ application ประเภท peer-to-peer หรือเปล่า การ identify flow แต่ละ flow ก็จะใช้สิ่งที่เรียกว่า 5-tuples คือประกอบไปด้วย source ip address, source ip port, destination ip address, destination port และ protocol id ข้อดีของลักษณะ flow-based ก็คือถึงแม้ว่าจะมีการ encrypt packet ก็ไม่มีผลเพราะยังไงก็ยังมี characteristics เหมือนเดิม ไม่ได้ต้องลงไปดูในเนื้อ packet เหมือนอย่างของกรณีแบบ DPI อีกเรื่องหนึ่งก็คือ traffic ไม่จำเป็นต้องอยู่ในลักษณะของ symmetrical คือสามารถเข้าออกไม่ต้องผ่านอุปกรณ์ที่ใช้ควบคุม bandwidth ตัวเดียวกัน เพราะจะใช้การทำงานในลักษณะ unidirectional

พอเห็นข่าวว่า Ellacoya DPI สามารถเข้าไปจัดการ traffic ที่ถูก encrpyt ได้แล้วเลยมาเขียน update เกี่ยวกับเรื่องนี้ ผมว่า DPI เก่งขึ้นเรื่อยๆนะ เรื่องที่ต้องพิจารณาก็คือเรื่อง latency และก็เรื่อง scalability เพราะเท่าที่ทราบพวกอุปกรณ์ในลักษณ DPI Applicance นี้มี port Gigabit Ethernet ไม่กี่ port ไม่มี port 10 Gigabit Ethernet หรือ STM-64 เหมือนอย่างพวกอุปกรณ์ flow-based อย่างเช่นยี่ห้อ Caspian
