<?php
$fotogaleri_sql = "SELECT * FROM fotogaleri ORDER BY id ASC";
$fotogaleri_conn = $conn->query($fotogaleri_sql);
if (mysqli_num_rows($fotogaleri_conn) > 0) {
	echo '<div id="fotoGaleri" class="carousel slide col-12 col-md-10 m-auto" data-bs-ride="carousel">
	<div class="carousel-indicators">';
	$foto_sayisi = mysqli_num_rows($fotogaleri_conn);
	for ($i = 0; $i < $foto_sayisi; $i++) {
		echo '<button type="button" data-bs-target="#fotoGaleri" data-bs-slide-to="' . $i . '"';
		if ($i == 0) {
			echo 'class="active" aria-current="true"';
		}
		echo 'aria-label="' . $i . '"></button>';
	}
	echo '</div><div class="carousel-inner">';
	$foto_numarasi = 0;
	while ($fotogaleri = $fotogaleri_conn->fetch_assoc()) {
		echo '<div class="carousel-item';
		if ($foto_numarasi == 0) {
			echo ' active';
		}
		echo '"><img src="' . $fotogaleri["resim_url"] . '" class="d-block w-100"></div>';
		$foto_numarasi++;
	}
	echo '</div><button class="carousel-control-prev" type="button" data-bs-target="#fotoGaleri" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Önceki</span></button><button class="carousel-control-next" type="button" data-bs-target="#fotoGaleri" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Sonraki</span></button></div>';
} else {
	echo '<div class="col-5 m-auto transparan py-2"><h3>Foto Galeri Yakında Eklenecek</h3></div>';
}
?>