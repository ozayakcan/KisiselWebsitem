<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Özay Akcan">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.png"); ?>" />
    <?php $this->load->view("includes/style"); ?>
    <?php $this->load->view("includes/robots"); ?>
    <?php

    //sayfayı yükleme 
    //$data = array("title"=>"Başlık", "description"=> "Açıklama", "active_index" => "Navbardaki aktif index numarası", "content"=> "Gösterilecek view adı", "content_data" => "View'e değişken gönderilecekse array şeklinde eklenecek");
    //$this->load->view("index_p", $data);

    ?>
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
</head>

<body>
    <?php $this->load->view("includes/scripts"); ?>
    <?php $this->load->view("includes/header"); ?>
    <div id="icerik" class="d-flex flex-column justify-content-center p-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-white text-center">
                    <?php $this->load->view($content, $content_data); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("includes/footer"); ?>
</body>

</html>