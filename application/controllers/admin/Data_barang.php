<?php 
class Data_barang extends CI_Controller {
	public function index() {
		$data['barang'] = $this->Model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi() {
		$nama_brg		= $this->input->post('nama_brg');
		$keterangan		= $this->input->post('keterangan'); 
		$kategori		= $this->input->post('kategori'); 
		$stok			= $this->input->post('stok');
		$harga			= $this->input->post('harga'); 
		$gambar			= $_FILES['gambar']['name']; 

		if($gambar_brg = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gagal Upload";
			} else {
				$gambar_brg = $this->upload->data('file_name');
			}
		}

		$data = array (
			'nama_brg'		=> $nama_brg,
			'keterangan'  	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'gambar'		=> $gambar
		);

		$this->Model_barang->tambah_barang($data, 'tb_barang');
		redirect('admin/data_barang/index');
	}
}
 ?>

