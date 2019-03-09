<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller 
{
    public function Index()
    {
        $this->load->view('common/Header');
		$this->load->view('common/NavBar');
        
        $v['quemSomos'] = $this->load->view('Contato/QuemSomos', '', true);
        $v['contato'] = $this->load->view('Contato/Contato', '', true);
        $v['infoLocalizacao'] = $this->load->view('Contato/infoLocalizacao', '', true);
        $this->load->view('Contato/Layout', $v);
		
		$this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
    }
}