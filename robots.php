<?php
$klasor = $_SERVER['DOCUMENT_ROOT'];
$fonksiyonlar = $klasor . "/sayfalar/fonksiyonlar.php";
include($fonksiyonlar);
$func = new func;
$url = $func->url();
$domain = $func->domain();
$protocol = $func->protocol();
header('Content-Type: text/txt');
?>
User-agent: *
Allow: /

User-agent: *
Disallow: /css/

User-agent: *
Disallow: /images/

User-agent: *
Disallow: /js/

User-agent: *
Disallow: /posts/

User-agent: *
Disallow: /post/

User-agent: *
Disallow: /PHPMailer/

User-agent: *
Disallow: /composer/

Sitemap: <?=$protocol.$domain;?>/sitemap.xml
