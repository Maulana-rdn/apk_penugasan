<?php 

class M_tugas extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tugas');
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($id_tugas = NULL)
	{
		$query = $this->db->get_where('tugas', array('id_tugas'=> $id_tugas))->row();
		return $query;
	}
}
	