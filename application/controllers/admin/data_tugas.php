<?php

class Data_tugas  extends CI_Controller{
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
		$data ['tugas'] = $this->m_tugas->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_tugas');
		$this->load->view('admin/data_tugas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_tugas		= $this->input->post('id_tugas');
		$id_wakel	 	= $this->input->post('id_wakel');
		$nama_siswa		= $this->input->post('nama_siswa');
		$tugas			= $this->input->post('tugas');
		$tgl_tuntas		= $this->input->post('tgl_tuntas');
		$tgl_batas		= $this->input->post('tgl_batas');
		$pai			= $this->input->post('pai');
		$indo			= $this->input->post('indo');
		$matematika		= $this->input->post('matematika');
	
//      $nama           = $_POST['nama'];
//		$nim			= $_POST['nim'];
//		$tgl_lahir		= $_POST['tgl_lahir'];
//		$jurusan		= $_POST['jurusan'];

		$data = array(
			'id_tugas'			=> $id_tugas,
			'id_wakel'			=> $id_wakel,
			'nama_siswa'		=> $nama_siswa,
			'tugas'				=> $tugas,
			'tgl_tuntas'		=> $tgl_tuntas,
			'tgl_batas'			=> $tgl_batas,
			'pai'				=> $pai,
			'indo' 				=> $indo,
			'matematika' 		=> $matematika
		);

		$this->db->insert('tugas', $data);
		$this->session->set_flashdata('message','<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
		redirect('admin/data_tugas/index');
	} 

	public function hapus($id_tugas)
	{
		$this->db->delete('tugas', array('id_tugas' => $id_tugas));
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>'); 
  		redirect('admin/data_tugas/index');
	}

	public function edit($id_tugas)
	{
		$where = array('id_tugas' =>$id_tugas);
		$data['tugas'] = $this->m_tugas->edit_data($where, 'tugas')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_tugas');
		$this->load->view('admin/edit_tugas', $data);
		$this->load->view('templates_admin/footer');
	}
	public function update()
	{
		$id_tugas		= $this->input->post('id_tugas');
		$id_wakel	 	= $this->input->post('id_wakel');
		$nama_siswa		= $this->input->post('nama_siswa');
		$tugas			= $this->input->post('tugas');
		$tgl_tuntas		= $this->input->post('tgl_tuntas');
		$tgl_batas		= $this->input->post('tgl_batas');
		$pai			= $this->input->post('pai');
		$indo			= $this->input->post('indo');
		$matematika		= $this->input->post('matematika');
	

		$data = array(
			'id_tugas'			=> $id_tugas,
			'id_wakel'			=> $id_wakel,
			'nama_siswa'		=> $nama_siswa,
			'tugas'				=> $tugas,
			'tgl_tuntas'		=> $tgl_tuntas,
			'tgl_batas'			=> $tgl_batas,
			'pai'				=> $pai,
			'indo' 				=> $indo,
			'matematika' 		=> $matematika
			);

			$where = array(
				'id_tugas' => $id_tugas
			);

		$this->m_tugas->update_data($where,$data, 'tugas');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diupdate!</div>');
			redirect('admin/data_tugas/index');
	}

	public function detail($id_tugas) 
	{
		$this->load->model('m_tugas');
		$detail = $this->m_tugas->detail_data($id_tugas);
		$data['detail'] = $detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar_tugas');
		$this->load->view('admin/detail_tugas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function print()
	{
		$data['tugas'] = $this->m_tugas->tampil_data('tugas')->result();
		$this->load->view('admin/print_tugas', $data);
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['tugas'] = $this->m_tugas->tampil_data('tugas')->result();
		$this->load->view('admin/laporan_tugas_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_tugas_pdf", array('Attachment' =>0));
	}
}
