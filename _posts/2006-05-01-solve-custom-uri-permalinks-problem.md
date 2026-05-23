---
layout: post
title: Solve Custom URI Permalinks Problem
date: 2006-05-01 07:49:53 +0700
categories: ["Web Services"]
comments: 0
---

 I found out how to solve problem with the Custom URI Permalinks in Wordpress now. Earlier when I tried changing the structure of the Permalinks to date and name based (basically more user-friendly url) on my local machine, I always got this error saying "Page not Found". Googled around and corrected the cgi_force_redirect and it still didn't work. On the hosting server it is OK though. Finally I found the way. You have to set the doc_root to your web path in the file php.ini. For example I change mine to "D:\Inetpub\wwwroot\". Then it works like a charm. Commenting it out doesn't work. Oh, don't forget to restart the IIS (iisreset /restart for a quick one).<br>
