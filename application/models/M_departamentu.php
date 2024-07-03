<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_departamentu extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tb_departamentu');
		$this->db->order_by('id_departamentu','desc');

		return $this->db->get()->result();

		
	}

	public function add($data)
	{
		$this->db->insert('tb_departamentu',$data);
	}

	public function edit($data)
	{
		$this->db->where('id_departmentu', $data['id_departamentu']);
		$this->db->update('tb_departamentu', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_departamentu',$data['id_departamentu']);
		$this->db->delete('tb_departamentu',$data);
	}
}
