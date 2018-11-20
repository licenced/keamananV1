<?php
class Produk_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_all() {
		$query = $this->db->get('produk');
		return $query->result();
	}

	function get($id) {
		$query = $this->db->get_where('produk', array('id'=>$id));
		return $query->row();
	}


	public function simpanOrder($data){
		$this->db->insert('pesanan', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function simpanDetailorder($data){
		$this->db->insert('detail_order',$data);
	}
}
