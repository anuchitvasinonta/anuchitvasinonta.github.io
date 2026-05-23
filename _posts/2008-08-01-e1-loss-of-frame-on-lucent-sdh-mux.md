---
layout: post
title: E1 Loss of Frame on Lucent SDH Mux
date: 2008-08-01 17:22:04 +0700
categories: ["Telecom"]
comments: 0
---

SDH Mux ของ Lucent รุ่น Metropolis ADM Universal ที่ port E1 จะสามารถ set ได้ว่าจะ  monitor timeslot 0 หรือเปล่า ค่า default setting จะเป็น monitored ซึ่งถ้าต้องต่อเข้าเครื่องมือวัดแล้วยิง E1 ออกมาเป็นแบบ unframed ก็จะมี error E1 LOF ขึ้นที่อุปกรณ์ ต้องปรับให้เป็นแบบ framed หรือไม่ก็ not monitored ที่ port E1
