<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_staff');
	}

	public function index()
	{
		$data = array('title' => 'SI_Staffing',
                    'title2' => 'Dados staff',
					'staff' => $this->M_staff->lists(),
						'isi' => 'admin/staff/index'
						 );
		$this->load->view('admin/layout/v_wrapper',$data,False);
	}

	public function add()
	{
		$data = array(
						'id_staff' => $this->input->post('id_staff'),
						'id_user' => $this->input->post('id_user'),
						'naran_staff' => $this->input->post('naran_staff'),
						'sexo' => $this->input->post('sexo'),
						'data_moris' => $this->input->post('data_moris'),
						'hela_fatin' => $this->input->post('hla_fatine'),
						'no_telefone' => $this->input->post('no_telefone'),
						'nivel_estudu' => $this->input->post('nivel_estudu')

						);

						$this->M_staff->add($data);
						$this->session->set_flashdata('mensajen','Dados staff aumenta ona !!');
						redirect('staff');

	}

	public function edit($id_staff)
	{
		$data = array(
						'id_staff' =>$id_staff,
						'id_user' => $this->input->post('id_user'),
						'naran_staff' => $this->input->post('naran_staff'),
						'sexo' => $this->input->post('sexo'),
						'data_moris' => $this->input->post('data_moris'),
						'hela_fatin' => $this->input->post('hela_fatin'),
						'no_telefone' => $this->input->post('no_telefone'),
						'nivel_estudu' => $this->input->post('nivel_estudu'),
						



						);

						$this->M_staff->edit($data);
						$this->session->set_flashdata('mensajen','Dados hadia ona !!');
						redirect('staff');

	}

	public function delete($id_staff)
	{
		$data = array(
						'id_staff' =>$id_staff,
						);

						$this->M_staff->delete($data);
						$this->session->set_flashdata('mensajen','Dados susesu hamos ona !!');
						redirect('staff');

	}

}
