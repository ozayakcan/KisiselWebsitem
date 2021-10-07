<?php
if (isset($_GET["calisma"])) {
	$kategori = $_GET["calisma"];
	$calismalar_sql = "SELECT * FROM calismalar_kategori WHERE seo='" . $kategori . "' ORDER BY id ASC LIMIT 1";
	$calismalar_conn = $conn->query($calismalar_sql);
	if (mysqli_num_rows($calismalar_conn) == 1) {
		$calismalar = mysqli_fetch_array($calismalar_conn);
		echo '<title>' . $calismalar["adi"] . ' - Özay Akcan</title>';
		echo '<div class="col-5 m-auto transparan py-2"><h5>'.$calismalar["adi"].' Çalışmalarım</h5></div>';
		$calisma_sql = "SELECT * FROM calismalar WHERE kategori_id='" . $calismalar["id"] . "' ORDER BY id ASC";
		$calisma_conn = $conn->query($calisma_sql);
		if (mysqli_num_rows($calisma_conn) > 0) {
			echo '<div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 col-12 m-auto">';
			while ($calisma = $calisma_conn->fetch_assoc()) {
				$uzanti = $calisma["uzanti"] . ' Dosyası';
				$calismaAdi = "";
				if ($calisma["uzanti"] == "HTML") {
					$uzanti = 'Çalışma Sayfası';
				}
				if ($calisma["kucuk_resim"] == $calisma["resim_url"]) {
					$calismaAdi = $calisma["calisma_adi"];
				}
				echo '<div class="col"><div class="calisma card transparan h-100">
				<img class="card-img-top p-4" title="' . $calisma["calisma_adi"] . '" alt="' . $calisma["calisma_adi"] . '" src="' . $calisma["kucuk_resim"] . '">';
				
				echo '<div class="card-body"><p class="card-text"></p></div>';
				echo '<div class="card-footer bg-transparent mt-0 pt-0">';
				if ($calismaAdi != "") {
					echo '<a href="javascript:;" class="mb-2 text-white text-decoration-none" style="cursor:default;"><h5 class="card-title fs-5">' . $calismaAdi . '</h5></a>';
				}
				if ($calisma["kucuk_resim"] != $calisma["resim_url"]) {
					echo '</br><a target="_blank" href="' . $calisma["resim_url"] . '" class="btn btn-primary fs-6 mb-3">Görselin Tam Boyutu</a>';
				}
				echo '</br><a target="_blank" href="';
				
				if(strlen($calisma["altsayfa"]) > 0){
					echo $protocol.$calisma["altsayfa"].".".$domain.$calisma["calisma_linki"];
				}else{
					echo $calisma["calisma_linki"];
				}
				echo '" class="btn btn-danger fs-6">' . $uzanti . '</a></div></div></div>
					';
			}
			echo '</div>';
		} else {
			echo '<div class="col-5 m-auto transparan py-2"><h3>Henüz Bir Çalışma Eklenmedi</h3></div>';
		}
	} else {
		echo "<script>window.location.href='/calismalar.html';</script>";
		exit;
	}
} else {
	echo "<script>window.location.href='/calismalar.html';</script>";
	exit;
}
?>
<div style="margin-bottom:80px;"></div>