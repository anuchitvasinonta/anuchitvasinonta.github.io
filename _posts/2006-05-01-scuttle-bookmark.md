---
layout: post
title: Scuttle Bookmark
date: 2006-05-01 10:40:56 +0700
categories: ["Web Services"]
comments: 10
---

Check this out. I just downloaded this and implement social bookmarking on my site. The download page is here <a title="http://sourceforge.net/projects/scuttle/" href="http://sourceforge.net/projects/scuttle/">http://sourceforge.net/projects/scuttle/</a>   To make it work on my local developing maching (windows xp/iis/mysql/php5), I had to enable the multibyte string module (php_mbstring.dll) and also did one modification in functions.inc.php line 8 :

original : T_setlocale(LC_MESSAGES, $locale);
changed to : $ret = T_setlocale(LC_ALL, $locale);

This is because the LC_MESSAGES is not supported in my installed PHP. If needed it has to be compiled using something I don't remember but you can check the documentation. It's there.

Hopefully one day I will have time to develop an extended version of the scuttle to be the my ideal online bookmark with the following features:

1. can import bookmarks from browser, add bookmarks to the web and being able to export back into browser keeping the folder structures intact.
2. to do that each bookmark will have to include both categories and tags independently since to keep the folder structure when importing back you cannot do it with tags since one bookmark can have many tags (this is something spurl.net is very good at, unfortunately they always give me the misuse error every once in a while and it's so annoying)
3. can manage posts and tags easily with features like delete all bookmarks, delete all tags, etc.
4. public and private bookmarks
