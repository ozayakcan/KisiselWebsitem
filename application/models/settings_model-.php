<?php
##Bu dosyanın ismindeki kesme "-" işaretini kaldır.
class Settings_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public $recaptcha_site_key = "";

    public function getRecaptchaKey()
    {
        return $this->recaptcha_site_key;
    }
}
