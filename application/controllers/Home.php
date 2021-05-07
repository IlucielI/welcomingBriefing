<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('FrontEnd_Model');
		if (!($this->session->userdata('username'))) {
			redirect('Auth');
		}
	}

	public function index()
	{
		$data = array(
			'link' => $this->FrontEnd_Model->getLinkConf(),
			'portfolio' => $this->FrontEnd_Model->getPortfolio('home'),
			'title' => 'home',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/home', $data);
	}

	public function founderSpeech()
	{
		$data = array(
			'portfolio' => $this->FrontEnd_Model->getPortfolio('founderSpeech'),
			'title' => 'founderSpeech',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/founderSpeech', $data);
	}

	public function whoIsFXM()
	{
		$data = array(
			'portfolio' => $this->FrontEnd_Model->getPortfolio('whoIsFXM'),
			'title' => 'whoIsFXM',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/whoIsFXM', $data);
	}

	public function whatWeDo()
	{
		$data = array(
			'portfolio' => $this->FrontEnd_Model->getPortfolio('whatWeDo'),
			'title' => 'whatWeDo',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/whatWeDo', $data);
	}

	public function hrQnA()
	{
		$data = array(
			'link' => $this->FrontEnd_Model->getLinkConf(),
			'title' => 'hrQnA',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/hrQnA', $data);
	}

	public function hrGames()
	{
		$data = array(
			'title' => 'hrGames',
		);
		$this->load->view('Frontend/templete', $data);
		$this->load->view('Frontend/hrGames');
	}
}
