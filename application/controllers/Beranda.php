<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        views("halaman-depan", "MA MA'AHID");
    }
}

/* End of file Beranda.php */
