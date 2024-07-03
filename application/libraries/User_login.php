<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('m_login');
	}

	public function login($username,$password)
	{
		$cek=$this->ci->m_login->login($username,$password);
		if ($cek) {
			$username	=$cek->username;
			$naran_user	=$cek->naran_user;

			// halo session
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('naran_user',$naran_user);
			redirect('admin');
		}else{
			$this->ci->session->set_flashdata('pesan','username ou password lalos!!');
			redirect('login');
		}
	}

	public function cek_login()
	{
		if ($this->ci->session->userdata('username')=="") {
			$this->ci->session->set_flashdata('pesan','ita boot seidauk login!!');
			redirect('login');
			# code...
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('naran_user');
		$this->ci->session->set_flashdata('pesan','susesu sai!!');
		redirect('login');
	}
}

	