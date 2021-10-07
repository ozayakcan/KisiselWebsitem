<?php
class func
{
	public function url()
	{
		if (isset($_SERVER['HTTPS'])) {
			$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
		} else {
			$protocol = 'http';
		}
		return $protocol . "://" . $_SERVER['HTTP_HOST'];
	}
	public function standart_url()
	{
		return $_SERVER['HTTP_HOST'];
	}
	public function domain(){
		$host = $_SERVER['SERVER_NAME'];
		return str_replace("www.", "", $host);
	}
	public function protocol(){
		$protocol = 'http';
		if (isset($_SERVER['HTTPS'])) {
			$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
		}
		return $protocol . "://";
	}
	public function ip()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip_bul = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip_bul = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip_bul = $_SERVER['REMOTE_ADDR'];
		}
		return $ip_bul;
	}
	public function bosYadaNull($str)
	{
		return (!isset($str) || trim($str) === '');
	}
	public function vurgula($kelime, $yazi)
	{
		$vurgulanacakKisim = substr($yazi, stripos($yazi, $kelime), strlen($kelime));
		$sonuc = str_ireplace($kelime, "<b>" . $vurgulanacakKisim . "</b>", $yazi);
		return $sonuc;
	}
	function harfleri_kucult($yazi)
	{
		$harfler = array(
			"A" => "a",
			"B" => "b",
			"C" => "c",
			"Ç" => "ç",
			"D" => "d",
			"E" => "e",
			"F" => "f",
			"G" => "g",
			"Ğ" => "ğ",
			"H" => "h",
			"I" => "ı",
			"İ" => "i",
			"J" => "j",
			"K" => "k",
			"L" => "l",
			"M" => "m",
			"N" => "n",
			"O" => "o",
			"Ö" => "ö",
			"P" => "p",
			"Q" => "q",
			"R" => "r",
			"S" => "s",
			"Ş" => "ş",
			"T" => "t",
			"U" => "u",
			"Ü" => "ü",
			"V" => "v",
			"W" => "w",
			"X" => "x",
			"Y" => "y",
			"Z" => "z"
		);
		$kucult = strtr($yazi, $harfler);
		//$kucult = mb_strtolower($yazi, "UTF-8");
		return $kucult;
	}
}
