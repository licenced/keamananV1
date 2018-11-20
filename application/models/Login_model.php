<?php
class Login_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function login_admin($username,$password)
  {
    $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  public function cek_nim($nim){
    $query=$this->db->query("SELECT * FROM admin WHERE nim='$nim'");
    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

/*  public function register($data){
    $this->db->insert('admin' , $data);
  }*/





}
