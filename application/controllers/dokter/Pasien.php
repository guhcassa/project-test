<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pasien_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pasien"] = $this->pasien_model->getAll();
        $this->load->view("dokter/pasien/list", $data);
    }

    
}