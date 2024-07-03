<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_staff extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tb_staff');
		$this->db->order_by('id_staff','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tb_staff',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_staff', $data['id_staff']);
		$this->db->update('tb_staff', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_staff', $data['id_staff']);
		$this->db->delete('tb_staff', $data);
	}
}
