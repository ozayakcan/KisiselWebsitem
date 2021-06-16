<?php
$klasor = $_SERVER['DOCUMENT_ROOT'];
//$baglan = $klasor . "/sayfalar/baglan.php";
//$fonksiyonlar = $klasor . "/sayfalar/fonksiyonlar.php";
//include($baglan);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $klasor . '/PHPMailer/src/Exception.php';
require $klasor . '/PHPMailer/src/PHPMailer.php';
require $klasor . '/PHPMailer/src/SMTP.php';

$eposta = $_POST['eposta'];
$mesaj = $_POST['mesaj'];
$gonderildi = "0";
$hatamesaji = "";
$hataturu = "";
if ($eposta != "") {
	if (filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
		if ($mesaj != "") {
			//$iletisim_sql = "INSERT INTO `iletisim` (`eposta`, `mesaj`, `tarih`) VALUES ('$eposta', '$mesaj', '".time()."')";
			//$iletisim_conn = $conn->query($iletisim_sql);
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->CharSet = 'UTF-8';
			$mail->SMTPDebug = 0;
			$mail->Host = "hostadı";
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "kullanıcıadı";
			$mail->Password = "şifre";
			$mail->setFrom("info@ozayakcan.xyz", "info@ozayakcan.xyz");
			$mail->addAddress("iletisim@ozayakcan.xyz", "İsim");
			$mail->Subject = 'Mesaj: ' . $eposta;
			$mail->msgHTML($mesaj);
			$mail->AltBody = 'HTML mesajı desteklenmiyor.';
			if (!$mail->send()) {
				$gonderildi = "0";
				$hataturu = "";
				$hatamesaji = "";
			} else {
				$gonderildi = "1";
				$hataturu = "";
				$hatamesaji = "";
			}
		} else {
			$hataturu = "eposta";
			$hatamesaji = "E-posta adresi boş olamaz.";
			$gonderildi = "0";
		}
	} else {
		$hataturu = "eposta";
		$hatamesaji = "Lütfen geçerli bir eposta adresi girin.";
		$gonderildi = "0";
	}
} else {
	$hataturu = "eposta";
	$hatamesaji = "E-posta adresi boş olamaz.";
	$gonderildi = "0";
}
$iletisim = array("gonderildi" => $gonderildi, "hataturu" => $hataturu, "hatamesaji" => $hatamesaji);
echo json_encode($iletisim);
?>