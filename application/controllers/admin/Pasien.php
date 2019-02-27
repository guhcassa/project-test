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
        $this->load->view("admin/pasien/list", $data);
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

        $this->load->view("admin/pasien/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pasien');
       
        $pasien = $this->pasien_model;
        $validation = $this->form_validation;
        $validation->set_rules($pasien->rules());

        if ($validation->run()) {
            $pasien->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pasien"] = $pasien->getById($id);
        if (!$data["pasien"]) show_404();
        
        $this->load->view("admin/pasien/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pasien_model->delete($id)) {
            redirect(site_url('admin/pasien'));
        }
    }
}