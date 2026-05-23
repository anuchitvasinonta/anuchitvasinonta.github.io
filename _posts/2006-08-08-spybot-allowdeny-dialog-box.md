---
layout: post
title: Spybot Allow&Deny Dialog Box
date: 2006-08-08 08:31:35 +0700
categories: ["IT"]
comments: 0
---

ถ้าใครใช้โปรแกรม Spybot Search & Destroy คงต้องเจอปัญหาปุ่ม Allow กับ Deny มันซ้อนกันจนอ่านไม่รู้เรื่องและ Click ลำบากมาก ผมเจอวิธีแก้จากฟอรัมของเขาใช้ได้ดีและแก้ง่ายมากเลยครับ ยังงงๆว่าทำไม่ทาง Spybot ไม่ทำ patch แก้ออกมาซะเลย ผม copy วิธีการมาไว้ที่นี่กันเผื่อ site นั้นมันหายไป

<strong>1.-</strong> Download <a id="p56" title="SpybotResHack" href="http://www.greatnote.com/blog/2006/08/08/spybot-allowdeny-dialog-box/spybotreshack/" rel="attachment">SpybotResHack</a>
<strong>2.-</strong> Deactivate the <font color="#0000ff">TeaTimer </font>
<em>Go into Spybot <strong>> Mode > Advanced Mode > Tools > Resident.</strong>
Uncheck the following: Resident <font color="#0000ff">"TeaTimer"</font> (Protection of over-all system settings) </em>
<strong>3.- </strong>Use <strong><font color="#008000">"ResHacker"</font></strong> to open <font color="#0000ff">TeaTimer.exe</font>.
<strong>4.- </strong>Press <font color="#000080"><strong>Ctrl+F</strong></font> and searched for the word: <strong><font color="#ff0000">decision</font></strong>

Code:
object cbRemember: TCheckBox
??? Left = 8
??? Top = <strong><font color="#ff0000">160</font></strong>
??? Width = 339
??? Height = 17
??? Anchors = [akLeft, akTop, akRight]
??? Caption = '&Remember this decision.'
??? TabOrder = 2
? end
<strong>5.-</strong> Change the value <strong>"Top"</strong> from <font color="#ff0000">160</font> to <font color="#006400">190</font>
<strong>6.- </strong>Press in <strong>"Compile Script"</strong> and <strong>File > Save</strong>
<strong>7.- </strong>Close the <strong><font color="#008000">"Resource Hacker"</font></strong> and activate the <font color="#0000ff">TeaTimer</font> again
