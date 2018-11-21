<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    function index(){
        $this->load->view('admin/register_admin');
    }

    function form_login(){
      $this->load->view('admin/login_admin');
    }
    function logout(){
         $this->session->sess_destroy();
         $url=base_url().'login';
         redirect($url);
     }

}
