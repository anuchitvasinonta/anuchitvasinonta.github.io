---
layout: post
title: Delete all bookmarks in del.icio.us
date: 2006-04-29 16:45:10 +0700
categories: ["Web Services"]
comments: 0
---

I did a comparison of social bookmarking sites recently (in Thai) when I was making a decision which one to use. There was no one totally matches my requirement. For example blinklist.com is good but there's no restore feature. del.icio.us is also very good and simple to use but in term of managing the bookmarks and tags, it is not quite as good. You cannot delete all bookmarks, all private tags for example. You cannot manage your private tags at all through the web interfaces. Furl.net gave me error when importing and spurl.net didn't import it at all (they said they will in 24 hours but nothing happened). In fact I got this message after 2 days "Your access to Spurl.net has been terminated as a result of serious misuse of the service." Tried log out and the message was still there. I guess it has something to do with IP of the NAT router of my ISP.

Anyway I finally decided to go with del.icio.us since the interface is simple and I can completely restore the bookmarks backuped by the site. You can also manage your private tags and bookmarks using the API. I also found one undocumented API to delete your tags (http://del.icio.us/api/tags/delete?tag=&lt;your tag name&gt;) which is what I needed. Don't understand why they do not put it up there.  I also wrote a little php script to simply delete all my bookmarks. I believe that there should be a better way to do this. This is like a brute force kind of thing but I didn't know how to do it otherwise. What I did was basically get all bookmarks from del.icio.us and then get all the links into an array and one by one execute an API to delete it. Don't forget to change the username and password and also the time taken to do this. This will depend on how many bookmarks you have. Also I cannot seem to delete some links with & and ?.  It would be nice if someone could recommend me the easier way to do this.

<font size="1">&lt;?php</font>

<font size="1">//This is a quick and simple but not so fool-proof php file to delete all my bookmark on del.icio.us
//Some of the complex with a lot of & and ? in the url cannot be deleted. I still cannot find a way
//to do this. Been played around with urlencode with no luck. So the rest I will have to delete it
//manually</font>

<font size="1">function Parse ($bookmark) {
//Get all posts into $content string variable and strip off all links into $links array
$content=file_get_contents($bookmark);
preg_match_all("'href=[\'\"](.*?)[\'\"]'si", $content, $output);
$links = $output[1];
$i=0;</font>

<font size="1">        foreach($links as $link) {
$result=file_get_contents("http://<span style="color: #3333ff">username:password</span>@del.icio.us/api/posts/delete?url=".$link);
}</font>

<font size="1">        $delete_result=file_get_contents("http://<span style="color: #3333ff">username:password</span>@del.icio.us/api/posts/all?");
preg_match_all("'href=[\'\"](.*?)[\'\"]'si",$delete_result,$out);
$remained=$out[1];</font>

<font size="1">        $j= count($links);
$k= count($remained);
$n=$j-$k;</font>

<font size="1">        $mystr= "Total of ".$n." links from ".count($links)." were deleted.";
return $mystr;
}</font>

<font size="1">set_time_limit(<span style="color: #3333ff">120</span>);
$total=Parse ("http://<span style="color: #3333ff">username:password</span>@del.icio.us/api/posts/all?");
echo $total;
?&gt;</font>
