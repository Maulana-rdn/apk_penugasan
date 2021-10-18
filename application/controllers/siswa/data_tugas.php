<?php

class Data_tugas  extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '3'){
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
		$this->load->view('templates_siswa/header');
		$this->load->view('templates_siswa/sidebar_tugas');
		$this->load->view('siswa/data_tugas', $data);
		$this->load->view('templates_siswa/footer');
	}
	

	public function detail($id_tugas) 
	{
		$this->load->model('m_tugas');
		$detail = $this->m_tugas->detail_data($id_tugas);
		$data['detail'] = $detail;
		$this->load->view('templates_siswa/header');
		$this->load->view('templates_siswa/sidebar_tugas');
		$this->load->view('siswa/detail_tugas', $data);
		$this->load->view('templates_siswa/footer');
	}

	public function print()
	{
		$data['tugas'] = $this->m_tugas->tampil_data('tugas')->result();
		$this->load->view('siswa/print_tugas', $data);
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['tugas'] = $this->m_tugas->tampil_data('tugas')->result();
		$this->load->view('siswa/laporan_tugas_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_tugas_pdf", array('Attachment' =>0));
	}
}
