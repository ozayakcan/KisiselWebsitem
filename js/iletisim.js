function geriSayim(div1, div2, sure2) {
    $(div1).show();
    var gerisay = setInterval(function() {
        var sure = sure2.split(":");
        var dakika = parseInt(sure[0], 10);
        var saniye = parseInt(sure[1], 10);
        --saniye;
        dakika = (saniye < 0) ? --dakika : dakika;
        if (dakika < 0 && saniye < 0) {
            $(div1).hide();
            clearInterval(gerisay);
        }
        saniye = (saniye < 0) ? 59 : saniye;
        saniye = (saniye < 10) ? "0" + saniye : saniye;
        $(div2).html(dakika + ":" + saniye);
        sure2 = dakika + ":" + saniye;
    }, 1000);
}
var mesajKarakter = 20;
var eposta_hata = "Geçerli bir e-posta adresi girin.";
var eposta_bos = "E-posta adresini boş bırakamazsınız.";
var botkontrolu = "Lütfen bot kontrolünü tamamlayın *";
var mesajbasarisiz = 'Mesajınız gönderilemedi lütfen daha sonra tekrar deneyin ya da <a class="alticizgilihv text-decoration-none" href="mailto:iletisim@ozayakcan.xyz">iletisim@ozayakcan.xyz</a> adresinden bana ulaşın.';

function gecerliEposta(v) {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
    return (v.match(r) == null) ? false : true;
}

function kalankarakter(kalan) {
    /*if ($("textarea#mesaj").val().length < 1) {
        $("#mesaj_placeholder").animate({
            marginTop: "0px",
            fontSize: "16px"
        }, 200);
    }*/
    classSilEkle("#mesaj_uyari", "text-success", "text-danger");
    $("#mesajtamam").hide();
    $("span#kalanmesaj").html(kalan);
}
var butonAciklama = $("#gonder").attr("title");

function butonKontrol() {
    if (gecerliEposta($("input#eposta").val()) && $("textarea#mesaj").val().length >= mesajKarakter && grecaptcha.getResponse() != "") {
        $("#gonder").prop("disabled", false);
        $("#gonder").removeAttr("title");
    } else {
        $("#gonder").prop("disabled", true);
        $("#gonder").attr("title", butonAciklama);
        if (grecaptcha.getResponse() == "") {
            $("#botkontrolu").text(botkontrolu);
        }
    }
}

function recaptchaOnaylandi() {
    return new Promise(function(resolve, reject) {
        butonKontrol();
        $("#botkontrolu").text("");
        resolve();
    });
}

function recaptchaSureBitti() {
    butonKontrol();
    $("#botkontrolu").text(botkontrolu);
}
$(document).ready(function() {
    kalankarakter(mesajKarakter);
    $(document).on("click", "#gonder", function() {
        var adsoyad = $("#adsoyad").val();
        var eposta = $("#eposta").val();
        var mesaj = $("#mesaj").val();
        $(".yukleniyor").show();
        $("#eposta_hata").text("");
        $("#mesajBasarisizAciklama").html("");
        if ($("#eposta").val().length > 0) {
            if (gecerliEposta($("input#eposta").val())) {
                if ($("#mesaj").val().length >= mesajKarakter) {
                    if (grecaptcha.getResponse() != "") {
                        $.ajax({
                            url: "/ajax/iletisim",
                            type: "post",
                            data: { eposta: eposta, mesaj: mesaj },
                            dataType: "json",
                            success: function(data) {
                                var gonderildi = data["gonderildi"];
                                var hataturu = data["hataturu"];
                                var hatamesaji = data["hatamesaji"];
                                grecaptcha.reset();
                                if (gonderildi == "1") {
                                    $('#mesajbasarili').modal("show");
                                    $("#mesaj").val("");
                                    kalankarakter(mesajKarakter);
                                } else {
                                    if (hataturu == "eposta") {
                                        $("#eposta_hata").text(hatamesaji);
                                    } else if (hataturu == "mesaj") {
                                        $("#mesajBasarisizAciklama").html(hatamesaji);
                                        $('#mesajbasarisiz').modal("show");
                                    } else {
                                        $("#mesajBasarisizAciklama").html(mesajbasarisiz);
                                        $('#mesajbasarisiz').modal("show");
                                    }
                                }
                                $(".yukleniyor").hide();
                                butonKontrol();
                            },
                            error: function(data) {
                                $("#mesajBasarisizAciklama").html(mesajbasarisiz);
                                $('#mesajbasarisiz').modal("show");
                                $(".yukleniyor").hide();
                                butonKontrol();
                            }
                        });
                    } else {
                        $("#botkontrolu").text(botkontrolu);
                    }
                }
            } else {
                $("#eposta_hata").text(eposta_hata);
            }
        } else {
            $("#eposta_hata").text(eposta_bos);
        }
        return false;
    });
    $("#eposta").on("keyup change", function(e) {
        butonKontrol();
        if ($("input#eposta").val().length > 0) {
            $("#eposta_hata").text("");
        }
        if (gecerliEposta($("input#eposta").val())) {
            $("#eposta_hata").text("");
        } else {
            $("#eposta_hata").text(eposta_hata);
        }
    });
    $("#eposta").focus(function() {
        classEkle("#eposta_placeholder", "aktif");
        $("#eposta_placeholder").animate({
            marginTop: "-22px",
            fontSize: "14px"
        }, 200);
    });
    $("#eposta").focusout(function() {
        classSil("#eposta_placeholder", "aktif");
        if ($("input#eposta").val().length < 1) {
            $("#eposta_placeholder").animate({
                marginTop: "0px",
                fontSize: "16px"
            }, 200);
        }
    });
    $("#mesaj").on("keyup change", function() {
        butonKontrol();
        if ($("textarea#mesaj").val().length >= mesajKarakter) {
            classSilEkle("#mesaj_uyari", "text-danger", "text-success");
            $("#mesajtamam").show();
            $("span#kalanmesaj").html("0");
        } else {
            kalankarakter(mesajKarakter - $("textarea#mesaj").val().length);
        }
    });
    $("#mesaj").focus(function() {
        classEkle("#mesaj_placeholder", "aktif");
        $("#mesaj_placeholder").animate({
            marginTop: "-22px",
            fontSize: "14px"
        }, 200);
    });
    $("#mesaj").focusout(function() {
        classSil("#mesaj_placeholder", "aktif");
        if ($("textarea#mesaj").val().length < 1) {
            $("#mesaj_placeholder").animate({
                marginTop: "0px",
                fontSize: "16px"
            }, 200);
        }
    });
});