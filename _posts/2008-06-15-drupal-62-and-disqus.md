---
layout: post
title: Drupal 6.2 and Disqus
date: 2008-06-15 22:40:24 +0700
categories: ["Blogging"]
comments: 0
---

เพิ่ง upgrade จาก drupal 5.x เป็น 6.2 เสร็จ ราบรื่นดี ไม่มีปัญหาเรื่องภาษาไทย ไม่เหมือน wordpress ที่ต้องเข้าไป edit เรื่อง set NAME แต่ยุ่งกับ theme นิดหน่อยเพราะต้อง upgrade theme ด้วย ทำให้อะไรที่ customization ไว้ต้องมาคอยแก้ใหม่ นอกจากนี้ก็ทำการ enable search module ด้วยตอนแรกงงกับเรื่อง permission นิดหน่อย เพราะใน drupal จะมีการ set permission ว่า user แต่ละกลุ่มจะใช้งาน module ไหนอย่างไรได้บ้างทำให้ต้องเข้าไป set ตรงนั้นด้วย และก็ใน search settings ต้องมีการ run เพื่อทำ indexing ก่อนด้วยถึงจะ search ได้ จากนั้นก็ได้ลอง integrate กับ disquss เพราะเห็นล่าสุดมีคนทำเป็น modules สำหรับเอาไปลงได้ แต่ผมลองหลายรอบแล้วมันยังไม่ค่อย work จนไปได้คำแนะนำของ <a href="http://seanreiser.com/node/1336">http://seanreiser.com/node/1336</a> เรื่องการ integrate ซึ่งผมลองแล้ว work เลยขออนุญาตเอามาเก็บไว้ในที่นี้ด้วย


<blockquote>
# Goto Administer / Site building / Blocks / Add New Block
# Set the block description to 'Disqus'
# Paste the HTML and JavaScript Code into the block body
# Select "Full HTML" as Input Format
# Goto Administer / Site building / Blocks / List
# Scroll down to the 'Disqus' block you just added and select configure
# Scroll down "Page specific visibility settings"
# Select "Show if the following PHP code returns TRUE (PHP-mode, experts only)."
# In the box labeled "Pages" Paste the following:

      <?php
      $match = FALSE;
      $types = array('story' => 1, 'page' => 1, 'blog' => 1);
      if (arg(0) == 'node' && is_numeric(arg(1))) {
      $nid = arg(1);
      $node = node_load(array('nid' => $nid));
      $type = $node->type;
      if (isset($types[$type])) {
      $match = TRUE;
      }
      }
      return $match;
      ?>

# Scroll down to the 'Disqus' block you just added and select content from the dropdown.
# Scroll down to the comments modules and disable it.</blockquote>
