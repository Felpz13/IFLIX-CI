<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('common/Header');
		$this->load->view('common/NavBar');

		$v['BemVindo'] = $this->load->view('Home/BemVindoHome', '', true);
		$v['Apresentacao'] = $this->load->view('Home/ApresentacaoHome', '', true);
		$this->load->view('Home/LayoutHome', $v);
		$this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
	}
}