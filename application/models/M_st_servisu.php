<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_st_servisu extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('st_servisu');
		$this->db->order_by('id_st_servisu','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('st_servisu',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_st_servisu', $data['id_st_servisu']);
		$this->db->update('st_servisu', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_st_servisu',$data['id_st_servisu']);
		$this->db->delete('st_servisu',$data);
	}

}


