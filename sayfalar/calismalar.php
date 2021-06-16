<?php 
	$calismalar_sql = "SELECT * FROM calismalar_kategori ORDER BY id ASC";
	$calismalar_conn = $conn->query($calismalar_sql);
	if(mysqli_num_rows($calismalar_conn) > 0){
		echo '<div class="row row-cols-1 row-cols-md-3 g-4 col-12 col-lg-9 col-md-10 m-auto">';
		while($calismalar = $calismalar_conn->fetch_assoc()){
			echo '<div class="col"><div class="calisma card transparan h-100"><img class="card-img-top p-4" title="'.$calismalar["adi"].'" alt="'.$calismalar["adi"].'" src="'.$calismalar["resim_url"].'"><div class="card-body p-0 m-0"><p class="card-text"></p></div><div class="card-footer bg-transparent"><span class="fw-bold fs-6">Dersin Öğretim Görevlisi</span></br>';
				if($calismalar["ogretim_gorevlisi_site"] == ""){
					echo $calismalar["ogretim_gorevlisi"];
				}else {
					echo '<a class="text-decoration-none text-white alticizgilihv" target="_blank" href="'.$calismalar["ogretim_gorevlisi_site"].'">'.$calismalar["ogretim_gorevlisi"].'</a>';
				}
				echo '</br><a href="/calismalar/'.$calismalar["seo"].'.html" class="btn btn-primary fs-6 mt-1">İçerikler</a></div></div></div>';
		}
		echo '</div>';
	}
	else {
		echo '<div class="col-5 m-auto transparan py-2"><h3>Henüz Bir Çalışma Eklenmedi</h3></div>';
	}
?>