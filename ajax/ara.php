<?php
$klasor = $_SERVER['DOCUMENT_ROOT'];
$baglan = $klasor . "/sayfalar/baglan.php";
include($baglan);
$fonksiyonlar = $klasor . "/sayfalar/fonksiyonlar.php";
include($fonksiyonlar);
$func = new func;
$domain = $func->domain();
$arama = $_GET['arama'];
if (strlen($arama) > 1) {
    $sonuc = "";
    $kucult = $func->harfleri_kucult($arama);
    $sayfalar = array(
        array("/", "Anasayfa"),
        array("/hakkimda.html", "Hakkımda"),
        array("/iletisim.html", "İletişim"),
        array("/fotogaleri.html", "Foto Galeri"),
        array("/linkler.html", "Linkler"),
        array("/calismalar.html", "Çalışmalarım")
    );
    foreach ($sayfalar as &$sayfa) {
        if (preg_match('/\b(\w*'.$kucult.'\w*)\b/', $func->harfleri_kucult($sayfa[1]))) {
            //$deger = str_replace($kucult, '<b>'.$kucult.'</b>', $sayfalar[$sayfalardaAra]);
            $deger = $func->vurgula($kucult, $sayfa[1]);
            $sonuc .= '<a href="' . $sayfa[0] . '" class="list-group-item list-group-item-action temaRengi text-white">' . $deger. '</a>';
            if($sayfa[1] == "İletişim"){
                $iletisim_sql = "SELECT * FROM iletisim_bilgileri";
                $iletisim_conn = $conn->query($iletisim_sql);
                if(mysqli_num_rows($iletisim_conn) > 0){
                    while ($iletisim = $iletisim_conn->fetch_assoc()) {
                        $iletisimadresi = $iletisim["bilgi"];
                        if($iletisim["yerel"] == 1){
                            $iletisimadresi = $iletisim["bilgi"]."@".$domain;
                        }
                        $sonuc .= '<a href="mailto:'.$iletisimadresi.'" class="list-group-item list-group-item-action temaRengi text-white"><i class="'.$iletisim["fa_icon"].'" aria-hidden="true"></i> ' . $iletisimadresi.'</a>';
                    }
                }
            }
        }
    }
    $calismalar_ara_sql = "SELECT * FROM calismalar_kategori WHERE adi LIKE '%".$arama."%'";
    $calismalar_ara_conn = $conn->query($calismalar_ara_sql);
    if(mysqli_num_rows($calismalar_ara_conn) > 0){
        while ($calismalar_ara = $calismalar_ara_conn->fetch_assoc()) {
            $deger = $func->vurgula($kucult, $calismalar_ara["adi"]);
            $sonuc .= '<a href="/calismalar/'.$calismalar_ara["seo"].'.html" class="list-group-item list-group-item-action temaRengi text-white">' . $deger . '</a>';
        }
    }
    echo $sonuc;
    
}
