<nav class="navbar fixed-top navbar-dark navbar-expand-lg temaRengi row" aria-label="navmenu">
    <div class="container ps-2 pe-4 m-0 col-12 temaRengi text-white border-bottom border-warning">
        <a href="<?= base_url(); ?>" class="navbar-brand ps-3">Özay Akcan</a>
        <div id="aradiv1" class="order-1 order-lg-2 d-md-block d-none">
            <ul class="navbar-nav flex-row" style="display:block;width: 200px;">
                <input id="ara1" class="form-control form-control-sm me-2 temaRengi text-white" type="search" placeholder="Ara" aria-label="Ara">
            </ul>
            <div class="list-group araListe1 position-absolute temaRengi border border-primary" style="display:none;width: 250px;max-height:300px;overflow-y:auto;">

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
                <li class="nav-item px-3<?= $active_index == 0 ? " aktif" : ""; ?>">
                    <a href="<?= base_url(); ?>" class="nav-link text-white" <?= $active_index == 0 ? " aria-current=\"page\"" : ""; ?>>Anasayfa</a>
                </li>
                <li class="nav-item px-3<?= $active_index == 1 ? " aktif" : ""; ?>">
                    <a href="<?= base_url("hakkimda"); ?>" class="nav-link text-white" <?= $active_index == 1 ? " aria-current=\"page\"" : ""; ?>>Hakkımda</a>
                </li>
                <li class="nav-item px-3 me-3<?= $active_index == 2 ? " aktif" : ""; ?>">
                    <a href="<?= base_url("iletisim"); ?>" class="nav-link text-white" <?= $active_index == 2 ? " aria-current=\"page\"" : ""; ?>>İletişim</a>
                </li>
                <li id="aradiv2" class="d-md-none d-block">
                    <ul class="navbar-nav flex-row" style="display:block;width: 200px;">
                        <input id="ara2" class="form-control form-control-sm me-2 temaRengi text-white" type="search" placeholder="Ara" aria-label="Ara">
                    </ul>
                    <div class="list-group araListe2 position-absolute temaRengi border border-primary" style="display:none;width: 250px;max-height:300px;overflow-y:auto;">

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>