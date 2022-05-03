<?php

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            "title" => "Özay Akcan",
            "description" => "Özay Akcan, Aydın Meslek Yüksek Okulu (Aymes) Bilgisayar Programcılığı Öğrencisi",
            "active_index" => 0,
            "content" => "main",
            "content_data" => array()
        );
        $this->load->view("index_p", $data);
    }
}
