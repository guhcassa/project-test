<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model
{
    private $_table = "dokter";

    public $dokter_id;
    public $noktp;
    public $poliknik;
    public $nama;
    public $pass;

    public function rules()
    {
        return [
            ['field' => 'noktp',
            'label' => 'NoKTP',
            'rules' => 'required'],

            ['field' => 'poliknik',
            'label' => 'Poliknik',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'pass',
            'label' => 'Pass',
            'rules' => 'required'],
            

            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["dokter_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->dokter_id = uniqid();
        $this->noktp = $post["noktp"];
        $this->poliknik = $post["poliknik"];
        $this->nama = $post["nama"];
        $this->pass = $post["pass"];
        
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->dokter_id = $post["id"];
        $this->noktp = $post["noktp"];
        $this->poliknik = $post["poliknik"];  
        $this->nama = $post["nama"];
        $this->pass = $post["pass"];
        $this->db->update($this->_table, $this, array('dokter_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("dokter_id" => $id));
    }
}
