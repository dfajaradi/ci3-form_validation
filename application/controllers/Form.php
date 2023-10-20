<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function index()
	{
		$this->load->view('form');
	}

	public function save()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]', ['required' => '%s tidak boleh kosong !!', 'min_length' => 'Kurang dari 5 karakter']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'trim|required|numeric', ['required' => '%s tidak boleh kosong !!', 'numeric' => '%s harus berupa angka 0-9']);
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'notelp' => $this->input->post('notelp')
		];
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form');
		} else {
			$this->load->view('output', $data);
		}
	}
}
