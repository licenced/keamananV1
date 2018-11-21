<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');

	}

	function index(){
		$data['product_list'] = $this->produk_model->get_all();
		//$this->load->view('indexcart', $data);
		$this->load->view('visitor/form', $data);
	}

	function belanja(){
		$data['product_list'] = $this->produk_model->get_all();
		$this->load->view('indexcart', $data);
	}
}
