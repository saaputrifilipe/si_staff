<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Departamentu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_departamentu');
	}
	public function index()
	{
		$data = array('title' => 'SI_staff',
                    'title2' => 'Dados departamentu',
					'depart' => $this->M_departamentu->lists(),
						'isi' => 'admin/depart/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}
	public function add()
	{
		$data = array(
						'naran_departamentu' => $this->input->post('naran_departamentu'),
						'id_st_staff' => $this->input->post('id_st_staff')

						);

						$this->M_departamentu->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('depart');
	}
	public function edit($id_departamentu)
	{
		$data = array(
						'id_departamentu' => $id_departamentu,
						'naran_departamentu' => $this->input->post('naran_departamentu'),
						'id_st_staff' => $this->input->post('id_st_staff')
						);
						$this->M_departamentu->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('depart');
	}
	public function delete($id_departamentu)
	{
		$data = array(
						'id_departamentu' =>$id_departamentu,
						);
						$this->M_departamentu->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('depart');
	}
}
