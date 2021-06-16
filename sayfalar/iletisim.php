<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="/js/iletisim.js" type="text/javascript" charset="utf-8" async defer></script>
<form class="iletisim transparan col-lg-5 col-md-6 col-sm-8 col-12 m-auto p-2">
    <div class="form-group m-auto py-1">
        <h7>Bunun yerine şu e-postadan bana ulaşabilirsiniz: <a class="alticizgilihv text-white text-decoration-none" href="mailto:iletisim@ozayakcan.xyz">iletisim@ozayakcan.xyz</a></h7>
    </div>
    <div class="form-group mt-3 m-auto py-1" data-nosnippet>
        <span id="eposta_hata" class="col-12 float-none text-start text-danger fs-6"></span>
    </div>
    <div class="form-group mt-3 m-auto py-1">
        <label id="eposta_placeholder" for="eposta" class="placeholder text-start" data-nosnippet>E-posta <span class="text-danger">*</span></label>
        <input type="email" autocomplete="on" class="form-control col-12 bg-transparent text-white" id="eposta">
    </div>
    <div class="form-group mt-3 m-auto py-1" data-nosnippet>
        <span id="mesaj_uyari" class="col-12 float-none text-start text-danger fs-6">Mesajiniz en az 20 karakter olmalıdır. Kalan: <span id="kalanmesaj"></span> <i id="mesajtamam" style="display: none;" class="fa fa-check"></i></span>
    </div>
    <div class="form-group mt-3 m-auto py-1">
        <label id="mesaj_placeholder" for="mesaj" class="placeholder text-start" data-nosnippet>Mesaj: <span class="text-danger">*</span></label>
        <textarea type="text" class="form-control bg-transparent col-12 text-white" autocomplete="off" id="mesaj"></textarea>
    </div>
    <div class="form-group mt-3 m-auto py-1" data-nosnippet>
        <span id="botkontrolu" class="col-12 float-none text-start text-danger fs-6">Bot kontrolünü tamamlayın *</span>
    </div>
    <div class="form-group mt-1 m-auto py-1" data-nosnippet>
        <div class="g-recaptcha" style="margin-top:20px;" data-callback="recaptchaOnaylandi" data-expired-callback="recaptchaSureBitti" data-sitekey="<?= $recaptcha_v2_site_key; ?>"></div>
    </div>
    <div class="form-group mt-2 m-auto py-1">
    </div>
    <div class="form-group mt-2 m-auto py-1" data-nosnippet>
        <div class="col-12 float-none text-start text-danger fs-6 mt-2">* Zorunlu alanlar.</div>
    </div>
    <div class="form-group mt-1 m-auto py-1" data-nosnippet>
        <div class="yukleniyor m-auto float-none">
            <div class="yukleniyor1">
                <div class="yukleniyor2"></div>
                <div class="yukleniyor2"></div>
                <div class="yukleniyor2"></div>
                <div class="yukleniyor2"></div>
                <div class="yukleniyor2"></div>
                <div class="yukleniyor2"></div>
            </div>
        </div>
        <input type="submit" id="gonder" class="btn btn-primary col-12" title="Formu göndermek için alanları doldurun." disabled value="Gönder" />
    </div>
</form>
<div id="mesajbasarisiz" class="modal fade text-dark" tabindex="-1" aria-labelledby="mesajbasarisizLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="mesajbasarisizLabel">Mesaj Gönderme Başarısız</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="mesajBasarisizAciklama" class="modal-body bg-light text-dark text-start">

            </div>
            <div class="modal-footer bg-light text-dark">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div id="mesajbasarili" class="modal fade text-dark" tabindex="-1" aria-labelledby="mesajbasariliLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-success text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="mesajbasariliLabel">Mesajınız Başarıyla Gönderildi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="mesajbasariliAciklama" class="modal-body bg-light text-dark text-start">
                Girdiğiniz eposta adresinden size ulaşılacaktır.
            </div>
            <div class="modal-footer bg-light text-dark">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>