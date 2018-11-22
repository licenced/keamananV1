<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->library('cart');
		$this->load->helper('form');
	}

	function index(){
		$data['cart_list'] = $this->cart->contents();
		//$this->load->view('cartbaru', $data);
		$this->load->view('visitor/keranjang', $data);
	}

	function form_customer(){
		$this->load->view('visitor/templates/header');
		$this->load->view('visitor/form_customer');
		$this->load->view('visitor/templates/footer');
	}

	function add($id) {
		$product = $this->produk_model->get($id);

		$data = array(
			'id'      => $product->id,
			'qty'     => 1,
			'price'   => $product->harga,
			'name'    => $product->nama,
			'foto'    => $product->foto
		);
		$this->cart->insert($data);
	//	echo '<script type="text/javascript">alert("Produk Dimasukkan ke Keranjang")</script>';
	echo "<script>
	alert('Produk Dimasukkan ke Keranjang');
	window.location.href = '" . base_url() . "pemesanan';;
	</script>";
	}

	function remove($rowid) {

		$data = array(
			'rowid' => $rowid,
			'qty' => 0
		);
		$this->cart->update($data);
		redirect('cart');
	}

	function simpan() {
		$order = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => date('Y-m-d')
		);
		$idPesanan = $this->produk_model->simpanOrder($order);

		if ($cart = $this->cart->contents()){
			foreach ($cart as $item){
				$pesanan = array(
					'id_pemesan' => $idPesanan,
					'idproduk' => $item['id'],
					'jumlah' => $item['qty'],
					'harga' => $item['price']
				);
				$this->produk_model->simpanDetailorder($pesanan);
			}
			$this->cart->destroy();
			echo "<script>
			alert('Terimakasih ,Pesanan Anda Akan Segera Diproses ,Mohon Cek Email Anda');
			window.location.href = '" . base_url() . "pemesanan';;
			</script>";

		}

	}

	function update_cart(){

	// Recieve post values,calcute them and update
		$cart_info = $_POST['cart'] ;

		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];

			$data = array(
				'rowid' => $rowid,
				'price' => $price,
				'amount' => $amount,
				'qty' => $qty
			);

			$this->cart->update($data);
		}
		redirect('cart');
	}



}
