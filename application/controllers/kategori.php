<?php

class Kategori extends CI_Controller{
	public function tanamanbunga()
	{
		$data['tanamanbunga'] = $this->model_kategori->data_tanamanbunga()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tanamanbunga', $data);
		$this->load->view('templates/footer');
	}

	public function tanamanobat()
	{
		$data['tanamanobat'] = $this->model_kategori->data_tanamanobat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tanamanobat', $data);
		$this->load->view('templates/footer');
	}

	public function tanamandaun()
	{
		$data['tanamandaun'] = $this->model_kategori->data_tanamandaun()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tanamandaun', $data);
		$this->load->view('templates/footer');
	}

	public function pupuktanaman()
	{
		$data['pupuktanaman'] = $this->model_kategori->data_pupuktanaman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pupuktanaman', $data);
		$this->load->view('templates/footer');
	}

	public function potbunga()
	{
		$data['potbunga'] = $this->model_kategori->data_potbunga()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('potbunga', $data);
		$this->load->view('templates/footer');
	}
}