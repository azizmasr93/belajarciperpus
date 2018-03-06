<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends MY_Model {

	//public $tabel='pengunjung';
	
	public function tampil_join ()
	{
		$this->db
		->join('tb_buku', 'tb_buku.pk_buku = tb_pengunjung.pk_buku')
		->join('tb_profil', 'tb_profil.pk_profil = tb_pengunjung.pk_profil');
		return $this->db->get('tb_pengunjung')->result();
	}

}

/* End of file Pengunjung.php */
/* Location: ./application/models/Pengunjung.php */