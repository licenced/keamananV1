<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('post_model');
    $this->load->helper('url_helper');
    $this->load->library('upload');
  }

  public function index()
  {
    $data['artikel'] = $this->post_model->get_post_article();
    $this->load->view('visitor/beranda',$data);
  }
  public function view_artikel($slug = NULL)
  {
    $data['konten'] = $this->post_model->get_post($slug);


    $this->load->view('visitor/templates/header');
    $this->load->view('visitor/artikel', $data);
    $this->load->view('visitor/templates/footer');
  }

  public function view_tools($slug = NULL)
  {
      $data['konten'] = $this->post_model->get_post($slug);
      $this->load->view('visitor/templates/header');
      $this->load->view('visitor/tools', $data);
      $this->load->view('visitor/templates/footer');
  }

}
