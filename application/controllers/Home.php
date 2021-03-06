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
  public function index_artikel(){
    $this->load->library('pagination');

    $config['base_url'] = base_url('Home/index_artikel');
    $config['total_rows'] = $this->post_model->count_article();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = array('class' => 'page-link');
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();
    $data['konten'] = $this->post_model->get_post_pagination_article($config["per_page"], $page);

    $this->load->view('visitor/templates/header');
    $this->load->view('visitor/index_artikel',$data);
    $this->load->view('visitor/templates/footer');
  }
  public function index_tools(){
    $this->load->library('pagination');

    $config['base_url'] = base_url('Home/index_tools');
    $config['total_rows'] = $this->post_model->count_tools();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = array('class' => 'page-link');
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();
    $data['konten'] = $this->post_model->get_post_pagination_tools($config["per_page"], $page);

    $this->load->view('visitor/templates/header');
    $this->load->view('visitor/index_tools',$data);
    $this->load->view('visitor/templates/footer');
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
