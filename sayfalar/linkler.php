<div class="card col-11 m-auto transparan">
	<h3 class="col-lg-6 col-12 m-auto">Arkadaşlarımın Websiteleri</h3>
	<ul class="list-group list-group-flush">
		<?php
		$linkler_0_sql = "SELECT * FROM linkler WHERE tur='0' ORDER BY id ASC";
		$linkler_0_conn = $conn->query($linkler_0_sql);
		if (mysqli_num_rows($linkler_0_conn) > 0) {
			while ($linkler_0 = $linkler_0_conn->fetch_assoc()) {
				$linki = $linkler_0["linki"];
				$aciklama = $linkler_0["adi"] . "'" . $linkler_0["ek"] . " websitesine gitmek için tıklayın.";
				$eklenmediclass = "";
				$target = ' target="_blank"';
				if (!filter_var($linkler_0["linki"], FILTER_VALIDATE_URL)) {
					$linki = "javascript:;";
					$aciklama = $linkler_0["adi"] . "'" . $linkler_0["ek"] . " websitesi henüz eklenmedi.";
					$eklenmediclass = " eklenmedi";
					$target = '';
				}
				echo '<li class="list-group-item bg-transparent col-lg-5 col-12 m-auto"><a class="text-decoration-none alticizgilihv fs-transform' . $eklenmediclass . '" title="' . $aciklama . '" alt="' . $aciklama . '"' . $target . ' href="' . $linki . '">' . $linkler_0["adi"] . '</a></li>';
			}
		} else {
			echo '<li><a class="dropdown-item text-white text-lg-center" href="javascript:;">Eklenecek</a></li>';
		}
		?>
	</ul>
</div>