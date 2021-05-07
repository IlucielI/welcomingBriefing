<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('role')) {
			if ($this->session->userdata('role') > 1) {
				redirect('Home');
			} else {
				redirect('Admin');
			}
		}
		$this->load->view('Auth/signIn');
	}

	public function signIn()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {
			redirect('/');
		} else {
			$username = strtolower(stripslashes($this->input->post('username', true)));
			$password = $this->input->post('password', true);
			$user = $this->User_Model->getUser($username);
			if ($user) {
				if ($password == $user['password']) {
					if ($user['is_active'] == 1) {
						$data = [
							'username' => $user['username'],
							'role' => $user['role_id'],
						];
						$this->session->set_userdata($data);
						if ($user['role_id'] > 1) {
							redirect('Home');
						} else {
							redirect('Admin');
						}
					} else {
						$this->session->set_flashdata('flash', 'Akun anda belum diaktivasi!');
						redirect('/');
					}
				} else {
					$this->session->set_flashdata('flash', 'Password salah!');
					redirect('/');
				}
			} else {
				$this->session->set_flashdata('flash', 'Username salah / belum terdaftar!');
				redirect('/');
			}
		}
	}

	public function signOut()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('flash', 'See You Later :)');
		redirect('/');
	}
}
