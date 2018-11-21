<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('post_model');
  }

  public function index()
  {
    $data['artikel'] = $this->post_model->get_post_article();
    $this->load->view('visitor/beranda',$data);
  }

}
