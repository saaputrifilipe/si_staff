<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kargu extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tb_kargu');
		$this->db->order_by('id_kargu','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tb_kargu',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_kargu', $data['id_kargu']);
		$this->db->update('tb_kargu', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kargu',$data['id_kargu']);
		$this->db->delete('tb_kargu',$data);
	}
}
