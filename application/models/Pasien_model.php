<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    private $_table = "pasien";

    public $pasien_id;
    public $poliknik;
    public $nama;
    public $alamat;
    public $telp;
    public $tglpendaftaran;

    public function rules()
    {
        return [
            ['field' => 'poliknik',
            'label' => 'Poliknik',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required']


            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["pasien_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->pasien_id = uniqid();
        $this->poliknik = $post["poliknik"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->tglpendaftaran = date("Y-m-d H:i:s");

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->pasien_id = $post["id"];
        $this->poliknik = $post["poliknik"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->tglpendaftaran = date("Y-m-d H:i:s");
        $this->db->update($this->_table, $this, array('pasien_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("pasien_id" => $id));
    }
}
