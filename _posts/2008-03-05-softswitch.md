---
layout: post
title: Softswitch
date: 2008-03-05 21:29:45 +0700
categories: ["Telecom"]
comments: 1
---

Concept ของ Softswitch เริ่มขึ้นช่วงปลายทศวรรษที่แล้วโดยเป็นความพยายามของผู้ผลิตอุปกรณ์ที่จะสร้างทางเลือกใหม่นอกเหนือไปจากการผูกเรื่องของ call control และ service creation เข้ากับอุปกรณ์ TDM-based switch ในลักษณะของ integrated switch+applications+services อยู่ใน hardware platform เดียว ไปสู่การแยกส่วนของ call control functions ออกจาก switching platform ซึ่งจะทำให้ผู้ให้บริการสามารถสร้าง applications ที่หลากหลายได้โดยสะดวก และเป็นการ Offload พวก dial-up internet, voice VPN ออกจากอุปกรณ์พวก circuit switches หรือในที่สุดก็เป็นการทดแทนอุปกรณ์แบบดั้งเดิมได้ด้วย

<!--more-->
เวลาที่เราพูดถึง Softswitch กันนั้น บางคนก็มักจะหมายรวมถึงอุปกรณ์ที่เกี่ยวข้องในการทำระบบ packet-based voice infrastructure ซึ่งก็ประกอบด้วย media server, media gateway, application server, service creation environment, signaling gateway, etc. แต่ที่จะพูดถึงในที่นี้ softswitch จะหมายถึงอุปกรณ์ที่ทำหน้าที่เกี่ยวกับ call control, media gateway control และหน้าที่อื่นๆที่เกียวข้องเช่น call admission, call routing เป็นต้น โดย protocols ที่อุปกรณ์ softswitch สนับสนุนก็มักจะได้แก่ signaling ของ PSTN (SS7/TCAP, ISUP, ISDN) และก็ signaling ที่เป็น next generation ได้แก่ H.323, MGCP, SIP, SIP-I, BICC, SIGTRAN และ H.248 อีกส่วนหนึ่งที่เป็นส่วนสำคัญของ softswitch ที่ต้องพูดถึงก็คือ APIs มาตรฐานและเครื่องมือ service creation tools เช่น JAIN, Parlay, XML และ SOAP ที่ให้สำหรับ developers ทำการพัฒนา applications ต่างๆขึ้นได้เอง

การ implement softswitch บางที่ก็มีความ flexible สำหรับ end users ให้สามารถเลือกใช้บริการได้เองผ่านทาง web browser ในลักษณะ on-demand ซึ่งก็จะทำให้ผู้ให้บริการสามารถลดเวลาในการนำบริการใหม่ๆออกสู่ตลาดได้อย่างมาก นอกจากนี้ผู้ผลิตที่ทำ softswitch สำหรับโทรศัพท์พื้นฐานก็เริ่มหันมาพยายามที่จะทำระบบที่ไม่ขึ้นอยู่กับเทคโนโลยีในการ access เข้ามา (access-agnostic) ไม่ว่าจะเป็นทาง wireline หรือ wireless โดยทำระบบที่เป็นพื้นฐานในการให้บริการ multimedia content delivery ไปยังทั้งสองเทคโนโลยี ซึ่งก็ทำให้ผู้ผลิตเหล่านี้เริ่มที่จะรับเอากรอบของ IMS หรือ IP Multimedia Subsystem ของทาง 3GPP เข้ามาใช้ โดยกรอบของ IMS ก็จะมีการแบ่งออกเป็นสามส่วนด้วยกันคือ application server layer, session control layer และ transport & endpoint layer

ในแง่ของส่วนแบ่งทางการตลาด ณ กลางปีที่แล้ว(2007) ผู้นำได้แก่ Italtel, Nokia-Siemens, Nortel, Alcatel-Lucent และ Huawei ตามลำดับด้วย Market Share 20.6, 18.3, 17.1, 10.1 และ 5.0 percent ตามลำดับ รวม 5 เจ้า ครอบครองส่วนแบ่งทางการตลาด 71.1% ทั่วโลก

ความเคลื่อนไหวในวงการนี้มีอยู่หลายส่วนด้วยกันผมขอสรุปบางส่วนดังนี้ครับ

	<ul><li>SIP กับ IMS คงจะเป็นอะไรที่ hot ที่สุดแล้วในเวลานี้ IMS framework ก็เลือก SIP เป็น protocol ที่จะใช้กันเนื่องจากความ simple ไม่สลับซับซ้อนและ support multimedia content</li>


	<li>Quadruple Plays และ MVNO ถ้าจะพูดถึง Triple Play ก็อาจจะเชยแล้วนะครับเพราะเดี๋ยวนี้มี factor ที่สี่แล้วคือ mobility ทำให้เราเริ่มเห็น fixed operator เริ่มรวมกับ mobile operator เพื่อจะให้ mobility เข้าไปด้วย สอดคล้องกับความเคลื่อนไหว FMC(Fixed Mobile Convergence) และก็ทำให้เกิด term MVNO หรือ Mobile Voice Network Operator เรียกว่าเป็นการติดตามผู้ใช้ไปทุกฝีก้าวเลยทีเดียว</li>


	<li>Presence และ Personalization ต่อไปผู้ให้บริการจะทราบได้ว่าผู้ใช้บริการนั้นอยู่ที่ไหนและ access เข้ามาใช้บริการด้วย device ประเภทไหนและมีความต้องการรูปแบบของการใช้บริการหรือ preference สำหรับ แต่ละ location และ device อย่างไร database ที่เก็บข้อมูลเหล่านี้จะเรียกว่า HSS(Home Subscriber Server)</li>


	<li>กลุ่มของ vendors ที่เป็นลักษณะ second class รองจากกลุ่มของผู้นำก็มีพวก Cirpack, Ericsson, GENBAND, Sonus Networks, Tekelec, Telica, Veraz, Vocaltec</li></ul>




