<?php 

class M_siswa extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('siswa');
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($nisn = NULL)
	{
		$query = $this->db->get_where('siswa', array('nisn'=> $nisn))->row();
		return $query;
	}
}
	