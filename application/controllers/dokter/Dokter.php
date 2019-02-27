<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dokter_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dokter"] = $this->dokter_model->getAll();
        $this->load->view("dokter/list", $data);
    }

    public function add()
    {
        $dokter = $this->dokter_model;
        $validation = $this->form_validation;
        $validation->set_rules($dokter->rules());

        if ($validation->run()) {
            $dokter->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dokter/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dokter/dokter');
       
        $dokter = $this->dokter_model;
        $validation = $this->form_validation;
        $validation->set_rules($dokter->rules());

        if ($validation->run()) {
            $dokter->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dokter"] = $dokter->getById($id);
        if (!$data["dokter"]) show_404();
        
        $this->load->view("dokter/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->dokter_model->delete($id)) {
            redirect(site_url('dokter/dokter'));
        }
    }
}