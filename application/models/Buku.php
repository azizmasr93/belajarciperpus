<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends MY_Model {

	public $tabel='buku';
	
	public function tampil_join ()
	{
		$this->db->join('tb_kategori', 'tb_kategori.pk_kategori = tb_buku.pk_kategori');
		return $this->db->get('tb_buku')->result();
	}

}

/* End of file buku.php */
/* Location: ./application/models/buku.php */