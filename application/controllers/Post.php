<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if (! $this->session->userdata('masuk')) {
      redirect('login');
    }
    $this->load->model('post_model');
    $this->load->model('produk_model');
    $this->load->helper('url_helper');
    $this->load->library('upload');

  }

  public function index()
  {
    $this->load->library('pagination');

    $config['base_url'] = base_url('Post/index');
    $config['total_rows'] = $this->post_model->count_all();
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
    $data['konten'] = $this->post_model->get_post_pagination($config["per_page"], $page);

    $this->load->view('admin/templates/header');
    $this->load->view('admin/index_artikel',$data);
    $this->load->view('admin/templates/footer');

  }
  public function new_post()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/form_create');
    $this->load->view('admin/templates/footer');
  }

  public function create_post()
  {
    echo "<script>alert('ERROR JANCOK!')</script>";
    $config['upload_path'] = './assets/upload/img/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if(!empty($_FILES['foto']['name'])){
        if ($this->upload->do_upload('foto')){
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/upload/img/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            $config['width']= 700;
            $config['height']= 300;
            $config['new_image']= './assets/upload/img/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $gambar=$gbr['file_name'];
            $jdl=$this->input->post('title');
            $kategori=$this->input->post('category');
            $slug= url_title($jdl,'dash',TRUE);
            $berita=$this->input->post('text');

            $this->post_model->create_post($jdl,$slug,$berita,$gambar,$kategori);
            redirect('post');
    }else{
      echo "<script>alert('ERROR JANCOK!')</script>";
      redirect('post/new_post');

    }

    }else{
      echo "<script>alert('ERROR JANCOK!')</script>";
      redirect('post/new_post');
    }
    echo "SAMPAI SINI";
  }

  public function form_edit($id)
  {
    $data['konten'] = $this->post_model->get_post_id($id);

    $this->load->view('admin/templates/header');
    $this->load->view('admin/form_update',$data);
    $this->load->view('admin/templates/footer');

  }

  public function edit_post(){
    $config['upload_path'] = './assets/upload/img/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if(!empty($_FILES['foto']['name'])){
        if ($this->upload->do_upload('foto')){
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/upload/img/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '100%';
            $config['width']= 700;
            $config['height']= 300;
            $config['new_image']= './assets/upload/img/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $slug= url_title($title,'dash',TRUE);
      $text=$this->input->post('text');
      $gambar=$gbr['file_name'];

      $this->post_model->update_post($id,$title,$slug,$text,$gambar);
      redirect('post');
      }
    }

  }

  public function delete_post($id){
    $this->post_model->delete_post($id);
    redirect('post');
  }

  public function index_pemesanan(){
    $data['konten'] = $this->produk_model->getCustomer();
    $this->load->view('admin/templates/header');
    $this->load->view('admin/form_pemesanan',$data);
    $this->load->view('admin/templates/footer');
  }

  public function pesanan($id){
    $data['konten'] = $this->produk_model->getPesanan($id);
    $this->load->view('admin/templates/header');
    $this->load->view('admin/tabel_pesanan',$data);
    $this->load->view('admin/templates/footer');
  }



}
