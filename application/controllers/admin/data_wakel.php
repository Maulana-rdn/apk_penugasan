<?php

class Data_wakel  extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert 
				alert-danger alert-dismissible fade show" role="alert">
			Anda Belum Login!
			<button type="button" class="close" data-dismiss="alert" 
			aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');   
		}
	}
	public function index()
	{
		$data ['wakel'] = $this->m_wakel->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_wakel');
		$this->load->view('admin/data_wakel', $data);
		$this->load->view('templates_admin/footer');

	}

	public function tambah_aksi()
	{
			$id_wakel   	= $this->input->post('id_wakel');
			$nama_wakel	    = $this->input->post('nama_wakel');
			$id_login		= $this->input->post('id_login');
			$foto			= $_FILES ['foto'];
			if ($foto	=''){}else{
				$config ['upload_path'] = './assets/foto';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Foto Gagal Diupload!"; die();
				}else {
					$foto=$this->upload->data('file_name');
				}
			}

			$data = array (
				'id_wakel'	    => $id_wakel,
				'nama_wakel'	=> $nama_wakel,
				'id_login'		=> $id_login,
				'foto'			=> $foto,
			);

			$this->db->insert('wakel', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
			redirect('admin/data_wakel/index');
	}

	public function hapus($id_wakel)
	{
		$this->db->delete('wakel', array('id_wakel' => $id_wakel));
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>'); 
  		redirect('admin/data_wakel/index');
	}

	public function edit_wakel($id_wakel)
	{
		$where = array('id_wakel' =>$id_wakel);
		$data['wakel'] = $this->m_wakel->edit_data($where, 'wakel')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_wakel');
		$this->load->view('admin/edit_wakel', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
			$id_wakel   	= $this->input->post('id_wakel');
			$nama_wakel	    = $this->input->post('nama_wakel');
			$id_login		= $this->input->post('id_login');
			$foto	      	= $this->input->post('foto');


		$data = array (
				'id_wakel'	    => $id_wakel,
				'nama_wakel'	=> $nama_wakel,
				'id_login'		=> $id_login,
				'foto'			=> $foto
			);

			$where = array(
				'id_wakel' => $id_wakel
			);

		$this->m_wakel->update_data($where,$data, 'wakel');
		$this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diupdate!</div>');
			redirect('admin/data_wakel/index');
	}
}