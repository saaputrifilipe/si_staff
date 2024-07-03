<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kargu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kargu');
	}
	public function index()
	{
		$data = array('title' => 'SI_staff',
                    'title2' => 'Dados Kargu',
					'kar' => $this->M_kargu->lists(),
						'isi' => 'admin/kar/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}
	public function add()
	{
		$data = array(
						'naran_kargu' => $this->input->post('naran_kargu'),
						'id_departamentu' => $this->input->post('id_departamentu')
						);
						$this->M_kargu->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('kar');
	}
	public function edit($id_kargu)
	{
		$data = array(
						'id_kargu' =>$id_kargu,
						'naran_kargu' => $this->input->post('naran_kargu'),
						'id_departamentu' => $this->input->post('id_departamentu')
						);
						$this->M_kargu->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('kar');

	}

	public function delete($id_kargu)
	{
		$data = array(
						'id_kargu' =>$id_kargu,
						);

						$this->M_kargu->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('kar');

	}
}
