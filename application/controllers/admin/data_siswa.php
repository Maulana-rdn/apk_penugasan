<?php

class Data_siswa  extends CI_Controller{
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
		$data ['siswa'] = $this->m_siswa->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_siswa');
		$this->load->view('admin/data_siswa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$nama			= $this->input->post('nama');
		$nis			= $this->input->post('nis');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$jurusan		= $this->input->post('jurusan');
		$alamat			= $this->input->post('alamat');
		$email			= $this->input->post('email');
		$no_telp		= $this->input->post('no_telp');
		$id_login		= $this->input->post('id_login');
		$foto 			= $_FILES['foto'];
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
			

		$data = array(
			'nama'			=> $nama,
			'nis'			=> $nis,
			'tgl_lahir'		=> $tgl_lahir ,
			'jurusan'		=> $jurusan,
			'alamat'		=> $alamat,
			'email'			=> $email,
			'no_telp'		=> $no_telp,
			'id_login'		=> $id_login,
			'foto' 			=> $foto
		);

		$this->db->insert('siswa', $data);
		$this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
		redirect('admin/data_siswa/index');
	} 

	public function hapus($nisn)
	{
		$this->db->delete('siswa', array('nisn' => $nisn));
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>'); 
  		redirect('admin/data_siswa/index');
	}

	public function edit($nisn)
	{
		$where = array('nisn' =>$nisn);
		$data['siswa'] = $this->m_siswa->edit_data($where, 'siswa')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_siswa');
		$this->load->view('admin/edit_siswa', $data);
		$this->load->view('templates_admin/footer');
	}
	public function update()
	{
		$nisn           = $this->input->post('nisn');
		$nama			= $this->input->post('nama');
		$nis			= $this->input->post('nis');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$jurusan		= $this->input->post('jurusan');
		$alamat			= $this->input->post('alamat');
		$email			= $this->input->post('email');
		$no_telp		= $this->input->post('no_telp');
		$id_login		= $this->input->post('id_login');
		$foto 			= $this->input->post('foto');


		$data = array(
			 	'nisn'			=> $nisn,
				'nis'			=> $nis,
				'nama'			=> $nama,
				'tgl_lahir'		=> $tgl_lahir,
				'jurusan'		=> $jurusan,
				'alamat'		=> $alamat,
				'email'			=> $email,
				'no_telp'		=> $no_telp,
				'id_login' 		=> $id_login,
				'foto'			=> $foto
			);

			$where = array(
				'nisn' => $nisn
			);

		$this->m_siswa->update_data($where,$data, 'siswa');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diupdate!</div>');
			redirect('admin/data_siswa/index');
	}

	public function detail($nisn) 
	{
		$this->load->model('m_siswa');
		$detail = $this->m_siswa->detail_data($nisn);
		$data['detail'] = $detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_siswa');
		$this->load->view('admin/detail_siswa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function print()
	{
		$data['siswa'] = $this->m_siswa->tampil_data('siswa')->result();
		$this->load->view('admin/print_siswa', $data);
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['siswa'] = $this->m_siswa->tampil_data('siswa')->result();
		$this->load->view('admin/laporan_siswa_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_siswa_pdf", array('Attachment' =>0));
	}
}
