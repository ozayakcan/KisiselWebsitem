<?php
$klasor = $_SERVER['DOCUMENT_ROOT'];
$fonksiyonlar = $klasor . "/sayfalar/fonksiyonlar.php";
include($fonksiyonlar);
$func = new func;
$url = $func->url();
$domain = $func->domain();
$protocol = $func->protocol();
header('Content-Type: text/xml');
?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?=$protocol.$domain;?>/</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/hakkimda.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/iletisim.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/linkler.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/calismalar/web-tasarimin-temelleri.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/calismalar/programlama-temelleri.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/calismalar/grafik-ve-animasyon-I.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/calismalar/grafik-ve-animasyon-II.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?=$protocol.$domain;?>/calismalar.html</loc>
        <lastmod>2021-10-08T09:23:19+00:00</lastmod>
        <priority>0.80</priority>
    </url>
</urlset>