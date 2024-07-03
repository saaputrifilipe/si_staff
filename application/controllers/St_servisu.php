<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St_servisu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_st_servisu');
	}


	public function index()
	{
		$data = array('title' => 'SI_staff',
                    'title2' => 'Dados St servisu',
					'st_ser' => $this->M_st_servisu->lists(),
						'isi' => 'admin/st_ser/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'id_salariu' => $this->input->post('id_salariu'),
						'naran' => $this->input->post('naran'),
						'tinan_servisu' => $this->input->post('tinan_servisu')

						);

						$this->M_st_servisu->add($data);
						$this->session->set_flashdata('mensajen','Dados aumenta ona !!');
						redirect('st_ser');

	}

	public function edit($id_st_servisu)
	{
		$data = array(
						'id_st_servisu' =>$id_st_servisu,
						'id_salariu' => $this->input->post('id_salariu'),
						'naran' => $this->input->post('naran'),
						'tinan_servisu' => $this->input->post('tinan_servisu')
						);

						$this->M_st_servisu->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('st_ser');
	}

	public function delete($id_st_servisu)
	{
		$data = array(
						'id_st_servisu' =>$id_st_servisu,
						);

						$this->M_st_servisu->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('st_ser');

	}
}
