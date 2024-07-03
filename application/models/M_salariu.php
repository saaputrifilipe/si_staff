<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_salariu extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tb_salariu');
		$this->db->order_by('id_salariu','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tb_salariu',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_salariu', $data['id_salariu']);
		$this->db->update('tb_salariu', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_salariu',$data['id_salariu']);
		$this->db->delete('tb_salariu',$data);
	}
}
