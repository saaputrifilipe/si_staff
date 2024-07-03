<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salariu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_salariu');
	}

	public function index()
	{
		$data = array('title' => 'SI_staff',
                    'title2' => 'Dados salariu',
					'sal' => $this->M_salariu->lists(),
						'isi' => 'admin/sal/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'id_staff' => $this->input->post('id_staff'),
						'naran_staff' => $this->input->post('naran_staff'),
						'salariu' => $this->input->post('salariu')

						);

						$this->M_salariu->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('sal');

	}

	public function edit($id_salariu)
	{
		$data = array(
						'id_salariu' => $id_salariu,
						'id_staff' => $this->input->post('id_staff'),
						'naran_staff' => $this->input->post('naran_staff'),
						'salariu' => $this->input->post('salariu')

						);

						$this->M_salariu->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('sal');

	}

	public function delete($id_salariu)
	{
		$data = array(
						'id_salariu' =>$id_salariu,
						);

						$this->M_salariu->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('sal');

	}
}
