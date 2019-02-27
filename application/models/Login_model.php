<?php
class Login_model extends CI_Model{
    
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE nama='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
    
    function auth_dokter($username,$password){
        $query=$this->db->query("SELECT * FROM dokter WHERE nama='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}