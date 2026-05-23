---
layout: post
title: Windows Genuine Advantage Check
date: 2006-05-16 06:33:14 +0700
categories: ["IT"]
comments: 0
---

กันหาข้อมูลไม่เจอภายหลังเลยขอ copy มาไว้ก่อน เอาข้อมูลมาจาก <a title="http://techtics.iblogzz.com" href="http://techtics.iblogzz.com/2006/05/07/disable-non-genuine-windows-warning-messages/">http://techtics.iblogzz.com</a>
<blockquote>So lots of people are having a bad time because of the ?This Windows is not genuine etc etc?.

Here?s a workaround:
Removing this is easy. Too easy infact. Click on the start menu and select run and type this:
<strong>%windir%\system32\wgatray.exe /u</strong>

Click on the start menu again and select run and type: regedit
Navigate to the following key and delete the key

HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon\Notify\WgaLogon
Reboot and enjoy

Or you may then safely delete the following files
Just click on the start menu and select run and type the following

cmd /c ?del %windir%\system32\wgatray.exe?
then this one
cmd /c ?del %windir%\system32\WGAlogon.dll?
and finally this one
cmd /c ?rmdir /s /q %windir%\SoftwareDistribution\Download\6c4788c9549d437
e76e1773a7639582a?</blockquote>
และอย่าลืมอันนี้ด้วย
<blockquote>Open Windows Update, and wait until you can choose between Express or Custom. Then clear the addressbar and paste this in it:
<pre style="font-size: 1em">javascript:void(window.g_sDisableWGACheck='all')</pre>
</blockquote>
