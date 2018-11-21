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
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_login=$this->login_model->login_admin($username,$password);

        if($cek_login->num_rows() > 0){

          $data=$cek_login->row_array();
          $this->session->set_userdata('masuk',TRUE);

          $this->session->set_userdata('ses_nim',$data['nim']);
          $this->session->set_userdata('ses_nama',$data['nama']);
          $this->session->set_userdata('ses_uname',$data['username']);
          redirect('post');
       }else{
          $url=base_url().'login';
          echo $this->session->set_flashdata('msg','Username Atau Password Salah');
          redirect($url);
       }

     }

    function logout(){
         $this->session->sess_destroy();
         $url=base_url().'login';
         redirect($url);
     }

     function register(){
       $repass = $this->input->post('re_pass');
       if ($repass == $this->input->post('user_password') ) {
         $user= array(
           'nim' => $this->input->post('nim'),
           'nama' => $this->input->post('nama'),
           'username' => $this->input->post('user_name'),
           'password' => md5($this->input->post('user_password'))
         );

         $cek_nim=$this->login_model->cek_nim($user['nim']);
         if($cek_nim){
           $this->login_model->register($user);
           redirect('login/form_login');
         }

       } else {
         echo $this->session->set_flashdata('msg','Password Tidak Sama');
       }

     }

}
