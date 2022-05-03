<?php

class Iletisim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model("settings_model");
        $recaptcha_site_key = $this->settings_model->getRecaptchaKey();
        $data = array(
            "title" => "İletişim - Özay Akcan",
            "description" => "Özay Akcan iletişim bilgileri, Aydın Meslek Yüksek Okulu (Aymes) Bilgisayar Programcılığı Öğrencisi",
            "active_index" => 2,
            "content" => "contact",
            "content_data" => array("recaptcha_site_key" => $recaptcha_site_key)
        );
        $this->load->view("index_p", $data);
    }
}
