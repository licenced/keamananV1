<?php
class Post_model extends CI_Model{
  public function __construct(){
    $this->load->database();

  }

public function get_post($slug = FALSE){

  if($slug == FALSE){
    $query = $this->db->get('content');
    return $query->result_array();
  }
  $query = $this->db->get_where('content',array('slug' => $slug));
  return $query->row_array();
}

public function get_all_post()
{
    $query = $this->db->get('content');
    return $query->result_array();
}

public function get_post_article()
{
  $query = $this->db->get_where('content',array('category' => 'article'));
  return $query->result_array();
}

public function get_post_tools()
{
  $query = $this->db->get_where('content',array('category' => 'tools'));
  return $query->result_array();
}

public function create_post($title,$slug,$text,$foto,$kategori)
{
  $data = array(
    'title' => $title,
    'category' => $kategori,
    'slug' => $slug,
    'text' => $text,
    'foto' => $foto
  );
  return $this->db->insert('content',$data);
}

public function get_post_slug($slug){
  $query = $this->db->get_where('content',array('slug' => $slug));
  return $query->result_array();
}

public function get_post_id($id){
  $query = $this->db->get_where('content',array('id' => $id));
  return $query->row_array();
}

public function update_post($id,$title,$slug,$text,$foto)
{
  $data = array(
    'title' => $title,
    'slug' => $slug,
    'text' => $text,
    'foto' => $foto
  );
  $this->db->where('id',$id);
  return $this->db->update('content',$data);

}

public function delete_post($id){
  return $this->db->delete('content', array('id'=>$id));
}


public function count_all(){
  $this->db->select("COUNT(*) as num_row");
  $this->db->from('content');
  $query = $this->db->get();
  $result = $query->result();
  return $result[0]->num_row;
}

public function count_article(){
  $this->db->select("COUNT(*) as num_row");
  $this->db->from('content');
  $this->db->where('category','article');
  $query = $this->db->get();
  $result = $query->result();
  return $result[0]->num_row;
}

public function count_tools(){
  $this->db->select("COUNT(*) as num_row");
  $this->db->from('content');
  $this->db->where('category','tools');
  $query = $this->db->get();
  $result = $query->result();
  return $result[0]->num_row;
}

public function get_post_pagination_tools($limit,$start)
{
  $query = $this->db->get_where('content', array('category' => 'tools'), $limit, $start);
  //$query = $this->db->get('content',$limit,$start);
  return $query->result_array();
}


public function get_post_pagination_article($limit,$start)
{
  $query = $this->db->get_where('content', array('category' => 'article'), $limit, $start);
  //$query = $this->db->get('content',$limit,$start);
  return $query->result_array();
}

public function get_post_pagination($limit,$start)
{
  $query = $this->db->get('content',$limit,$start);
  return $query->result_array();
}

public function insert_pesanan($barang,$nama,$email,$alamat)
{
    $data = array(
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'barang' => $barang
    );
$this->db->insert('pesanan', $data);
  }





}
