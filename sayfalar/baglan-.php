<?php
$mysql_sunucuadi = "localhost:3306"; //Mysql host adı 
$mysql_kullaniciadi = "root"; //Mysql kullanıcı adı
$mysql_sifresi = ""; //Mysql şifresi 
$mysql_vertabani_adi = ""; //Mysql veritabanı adı
$recaptcha_v2_site_key = ""; // Recaptcha v2 site keyi
date_default_timezone_set('Europe/Istanbul');
$conn = new mysqli($mysql_sunucuadi, $mysql_kullaniciadi, $mysql_sifresi, $mysql_vertabani_adi);
$conn->query("set character_set_client='utf8'"); 
$conn->query("set character_set_results='utf8'"); 
$conn->query("set collation_connection='utf8_turkish_ci'");
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
?>