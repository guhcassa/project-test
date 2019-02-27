<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
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
        $this->load->view("registrasi/list", $data);
    }

    public function add()
    {
        $pasien = $this->pasien_model;
        $validation = $this->form_validation;
        $validation->set_rules($pasien->rules());

        if ($validation->run()) {
            $pasien->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("registrasi/new_form");
    }

}