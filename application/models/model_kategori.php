<?php

class Model_kategori extends CI_Model{
	public function data_tanamanbunga()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'Tanaman Bunga'));
	}

	public function data_tanamanobat()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'Tanaman Obat'));
	}

	public function data_tanamandaun()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'Tanaman Daun'));
	}

	public function data_pupuktanaman()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'Pupuk Tanaman'));
	}

	public function data_potbunga()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'Pot Bunga'));
	}
}