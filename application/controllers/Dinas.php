<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_Dinas');
    }

	public function index()
	{
		$data['data']=$this->M_Dinas->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('Dinas',$data);
		$this->load->view('t_admin/footer',$data);
		// $this->load->view('layout/header'); 
		// $this->load->view('layout/menu');
		// $this->load->view('index',$data);
		// $this->load->view('layout/footer',$data);
	}
	public function peta()
	{
		$data['data']=$this->M_Dinas->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('peta',$data);
		$this->load->view('t_admin/footer',$data);
	}

	public function tambah()
	{
		
		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('tambah_dinas');
		$this->load->view('t_admin/footer');
	}

	public function proses_tambah_data()
	{
		$id_dinas = $this->input->post('id_dinas');
		$nama_dinas = $this->input->post('nama_dinas');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);

		$data = array(
			'id_dinas' => $id_dinas,
			'nama_dinas' => $nama_dinas,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng,
			'foto' => $nama_file
		);

		$this->M_Dinas->tambah($data);
		redirect('Dinas');
	}

	public function edit($id_dinas)
	{
		$data['data'] = $this->M_Dinas->getdataid($id_dinas)->row();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('edit_dinas', $data);
		$this->load->view('t_admin/footer');
	}

	public function proses_edit_data()
	{
		$id_dinas = $this->input->post('id_dinas');
		$nama_dinas = $this->input->post('nama_dinas');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$data = array(
			'nama_dinas' => $nama_dinas,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng
		);

		if (!empty($_FILES['foto']['name'])) {
			$nama_file = $_FILES['foto']['name'];
			$tmp_file = $_FILES['foto']['tmp_name'];
			$path = "./file/".$nama_file;
			move_uploaded_file($tmp_file, $path);
			$data['foto'] = $nama_file;
		}

		$this->M_Dinas->edit($data, $id_dinas);
		redirect('Dinas');
	}

	public function hapus($id)
	{
		$this->M_Dinas->hapus($id);
		redirect('Dinas');


	}

}