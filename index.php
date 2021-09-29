<!DOCTYPE html>
<html lang="tr">

<head>
	<?php
	$klasor = $_SERVER['DOCUMENT_ROOT'];
	$baglan = $klasor . "/sayfalar/baglan.php";
	$fonksiyonlar = $klasor . "/sayfalar/fonksiyonlar.php";
	include($baglan);
	include($fonksiyonlar);
	$func = new func;

	$url = $func->url();
	?>
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="9AQApqs50f4dVbwuzqIiQbI-qqlrZUfFkn1U7UVCFtU">
	<meta name="yandex-verification" content="f7ec56c391f9f309">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	$aciklama = "Aydın Meslek Yüksek Okulu (Aymes) Bilgisayar Programcılığı Öğrencisi";
	$aktifclass = " aktif";
	$currentPageOzelligi = " aria-current=\"page\"";
	$anasayfaclass = $aktifclass;
	$anasayfacurrentpage = $currentPageOzelligi;
	$hakkimdaclass = "";
	$hakkimdacurrentpage = "";
	$iletisimclass = "";
	$iletisimcurrentpage = "";
	$fotogalericlass = "";
	$fotogalericurrentpage = "";
	$linklerclass = "";
	$linklercurrentpage = "";
	$calismalarclass = "";
	$calismalarcurrentpage = "";
	if (isset($_GET["sayfa"])) {
		switch ($_GET["sayfa"]) {
			case 'hakkimda':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$hakkimdaclass = $aktifclass;
				$hakkimdacurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan, ' . $aciklama . '">';
				echo '<title>Hakkımda - Özay Akcan</title>';
				break;
			case 'iletisim':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$iletisimclass = $aktifclass;
				$iletisimcurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan iletişim bilgileri, ' . $aciklama . '">';
				echo '<title>İletişim - Özay Akcan</title>';
				break;
			case 'fotogaleri':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$fotogalericlass = $aktifclass;
				$fotogalericurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan foto galeri, ' . $aciklama . '">';
				echo '<title>Foto Galeri - Özay Akcan</title>';
				break;
			case 'linkler':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$linklerclass = $aktifclass;
				$linklercurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan linkler sayfası, ' . $aciklama . '">';
				echo '<title>Linkler - Özay Akcan</title>';
				break;
			case 'calismalar':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$calismalarclass = $aktifclass;
				$calismalarcurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan çalışmalar, ' . $aciklama . '">';
				echo '<title>Çalışmalarım - Özay Akcan</title>';
				break;
			case 'calisma':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				$calismalarclass = $aktifclass;
				$calismalarcurrentpage = $currentPageOzelligi;
				echo '<meta name="description" content="Özay Akcan çalışmalar, ' . $aciklama . '">';
				break;
			case '404':
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				echo '<meta name="description" content="Özay Akcan, ' . $aciklama . '">';
				echo "<title>Sayfa Bulunamadı - Özay Akcan</title>";
				break;

			default:
				$anasayfaclass = "";
				$anasayfacurrentpage = "";
				echo '<meta name="description" content="Özay Akcan, ' . $aciklama . '">';
				echo "<title>Sayfa Bulunamadı - Özay Akcan</title>";
				break;
		}
	} else {
		echo '<meta name="description" content="Özay Akcan, ' . $aciklama . '">';
		echo '<title>Özay Akcan</title>';
	}
	?>

	<meta name="author" content="Özay Akcan">
	<link rel="shortcut icon" href="/images/favicon.png" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-90ELK27RSE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-90ELK27RSE');
	</script>
	<script src="/js/fonksiyonlar.js" type="text/javascript" async defer></script>
	<script src="/js/ara.js" type="text/javascript" async defer></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
	<nav class="navbar fixed-top navbar-dark navbar-expand-lg temaRengi row" aria-label="navmenu">
		<div class="container ps-2 pe-4 m-0 col-12 temaRengi text-white border-bottom border-warning">
			<a href="/" class="navbar-brand ps-3">Özay Akcan</a>
			<div class="order-1 order-lg-2">
				<ul class="navbar-nav flex-row" style="display:block;width: 200px;">
					<input id="ara" class="form-control form-control-sm me-2 temaRengi text-white" type="search" placeholder="Ara" aria-label="Ara">
				</ul>
				<div class="list-group araListe position-absolute temaRengi" style="display:block;width: 250px;max-height:300px;overflow-y:auto;">

				</div>
			</div>
			<div class="d-flex flex-row order-2 order-lg-3">
				<ul class="navbar-nav flex-row">
					<li class="nav-item"><a class="nav-link px-2 text-white sosyal-medya facebook animate__animated animate__shakeY" target="_blank" href="https://www.facebook.com/"><span class="fab fa-facebook" style="font-size:1.1rem;"></span></a></li>
					<li class="nav-item"><a class="nav-link px-2 text-white sosyal-medya instagram animate__animated animate__shakeY" target="_blank" href="https://www.instagram.com/"><span class="fab fa-instagram" style="font-size:1.1rem;"></span></a></li>
					<li class="nav-item"><a class="nav-link px-2 text-white sosyal-medya twitter animate__animated animate__shakeY" target="_blank" href="https://www.twitter.com/"><span class="fab fa-twitter" style="font-size:1.1rem;"></span></a></li>
				</ul>
				<button type="button" class="menu-butonu navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#ustmenu" aria-controls="ustmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div id="ustmenu" class="collapse navbar-collapse">
				<ul class="navbar-nav ms-auto navmenu">
					<li class="nav-item px-2<?= $anasayfaclass; ?>">
						<a href="/" class="nav-link text-white" <?= $anasayfacurrentpage; ?>>Anasayfa</a>
					</li>
					<li class="nav-item px-2<?= $hakkimdaclass; ?>">
						<a href="/hakkimda.html" class="nav-link text-white" <?= $hakkimdacurrentpage; ?>>Hakkımda</a>
					</li>
					<li class="nav-item px-2<?= $iletisimclass; ?>">
						<a href="/iletisim.html" class="nav-link text-white" <?= $iletisimcurrentpage; ?>>İletişim</a>
					</li>
					<li class="nav-item px-2<?= $fotogalericlass; ?>">
						<a href="/fotogaleri.html" class="nav-link text-white" <?= $fotogalericurrentpage; ?>>Foto Galeri</a>
					</li>
					<li class="nav-item px-2<?= $linklerclass; ?>">
						<a href="/linkler.html" class="nav-link text-white" <?= $linklercurrentpage; ?>>Linkler</a>
					</li>
					<li class="nav-item px-2<?= $calismalarclass; ?> dropdown">
						<a href="#" id="calismalar-butonu" class="nav-link text-white dropdown-toggle" id="calismalarButon" data-bs-toggle="dropdown" aria-expanded="false" <?= $calismalarcurrentpage; ?>>Çalışmalarım</a>
						<ul id="acilir-menu" class="dropdown-menu temaRengi" aria-labelledby="calismalarButon">
							<?php
							$calismalar_navbar_sql = "SELECT * FROM (SELECT * FROM calismalar_kategori ORDER BY id DESC LIMIT 6) tmp ORDER BY tmp.id ASC LIMIT 6";
							$calismalar_navbar_conn = $conn->query($calismalar_navbar_sql);
							if (mysqli_num_rows($calismalar_navbar_conn) > 0) {
								while ($calismalar_menu = $calismalar_navbar_conn->fetch_assoc()) {
									echo '<li><a class="dropdown-item text-white text-lg-center" href="/calismalar/' . $calismalar_menu["seo"] . '.html">' . $calismalar_menu["adi"] . '</a></li>';
								}
								echo '<li><a class="dropdown-item text-white text-lg-center" href="/calismalar.html" style="text-decoration:underline;">Daha Fazlası</a></li>';
							} else {
								echo '<li><a class="dropdown-item text-white text-lg-center" href="javascript:;">Eklenecek</a></li>';
							}
							?>

						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="icerik" class="d-flex flex-column justify-content-center p-1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-white text-center">
					<?php
					if (isset($_GET["sayfa"])) {
						switch ($_GET["sayfa"]) {
							case 'hakkimda':
								include("sayfalar/hakkimda.php");
								break;
							case 'fotogaleri':
								include("sayfalar/fotogaleri.php");
								break;
							case 'iletisim':
								include("sayfalar/iletisim.php");
								break;
							case 'linkler':
								include("sayfalar/linkler.php");
								break;
							case 'calismalar':
								include("sayfalar/calismalar.php");
								break;
							case 'calisma':
								include("sayfalar/calisma.php");
								break;
							case '404':
								include("sayfalar/404.php");
								break;
							default:
								include("sayfalar/404.php");
								break;
						}
					} else {
						include("sayfalar/anasayfa.php");
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer font-small pt-4 text-white temaRengi">
		<div class="container-fluid text-center text-md-left">
			<div class="row w-100">
				<div class="col-md-6 mb-md-0 mb-3">
					<h6 style="height: 30px;">Çalışmalarım</h6>
					<ul id="altkisim" class="list-unstyled">
						<?php
						$calismalar_footer_sql = "SELECT * FROM (SELECT * FROM calismalar_kategori ORDER BY id DESC LIMIT 6) tmp ORDER BY tmp.id ASC LIMIT 6";
						$calismalar_footer_conn = $conn->query($calismalar_footer_sql);
						if (mysqli_num_rows($calismalar_footer_conn) > 0) {
							while ($calismalar_footer = $calismalar_footer_conn->fetch_assoc()) {
								echo '<li><h7><a href="/calismalar/' . $calismalar_footer["seo"] . '.html" class="text-white text-decoration-none">' . $calismalar_footer["adi"] . '</a></h7></li>';
							}
							echo '<li><h7><a href="/calismalar" class="text-white">Daha Fazlası</a></h7></li>';
						} else {
							echo '<li><h7><a href="javascript:;" class="text-white text-decoration-none">Eklecenek</a></h7></li>';
						}
						?>
					</ul>
				</div>
				<div class="col-md-6 mb-md-0 mb-3">
					<h6 style="height: 30px;">İletişim</h6>
					<ul id="altkisim" class="list-unstyled">
						<?php
						$iletisim_sql = "SELECT * FROM iletisim_bilgileri";
						$iletisim_conn = $conn->query($iletisim_sql);
						if (mysqli_num_rows($iletisim_conn) > 0) {
							while ($iletisim = $iletisim_conn->fetch_assoc()) {
								echo '<li>
								<h7><i class="' . $iletisim["fa_icon"] . '" aria-hidden="true"></i> ' . $iletisim["bilgi"] . '</h7>
							</li>';
							}
						}
						?>
					</ul>
				</div>

			</div>
		</div>
		<div class="col-12 d-flex justify-content-center">
			<ul class="list-unstyled">
				<?php
				$linkler_1_sql = "SELECT * FROM linkler WHERE tur='1' ORDER BY id ASC";
				$linkler_1_conn = $conn->query($linkler_1_sql);
				if (mysqli_num_rows($linkler_1_conn) > 0) {
					while ($linkler_1 = $linkler_1_conn->fetch_assoc()) {
						$linki = $linkler_1["linki"];
						$aciklama = $linkler_1["adi"] . "'" . $linkler_1["ek"] . " websitesine gitmek için tıklayın.";
						$target = ' target="_blank"';
						if (!filter_var($linkler_1["linki"], FILTER_VALIDATE_URL)) {
							$linki = "javascript:;";
							$aciklama = $linkler_1["adi"] . "'" . $linkler_1["ek"] . " websitesi henüz eklenmedi.";
							$target = '';
						}
						echo '<li class="float-sm-start"><a class="text-decoration-none btn btn-outline-primary text-white m-1" style="width:250px;" title="' . $aciklama . '" alt="' . $aciklama . '"' . $target . ' href="' . $linki . '">' . $linkler_1["adi"] . '</a></li>';
					}
				}
				?>
			</ul>
		</div>
		<div class="footer-copyright text-center py-3">© 2020
			<a href="<?= $url; ?>" class="text-white text-decoration-none">Özay Akcan</a>
		</div>
	</footer>
</body>

</html>