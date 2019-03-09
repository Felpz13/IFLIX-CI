<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrativo extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('common/Header');
		$this->load->view('Administrativo/NavBarAdm');

		$this->load->model('SeriesRepository');
		$data['series'] = $this->SeriesRepository->getData();	
				
		$v['tabela'] = $this->load->view('Administrativo/TableAdministrativo', $data, true);
		$v['titulo'] = "Series Cadastradas";
		
		$this->load->view('Administrativo/LayoutIndex', $v);
		
		$this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
	}
	
	public function novaSerie()
	{
		$this->load->view('common/Header');
		$this->load->view('Administrativo/NavBarAdm');

		$this->load->model('SeriesRepository');		
		
		$data['serie'] = null;
		$data['titulo'] = "Nova Série";
		$data['button'] = "Cadastrar";
		$this->load->view('Administrativo/FormSerie', $data);

		if($data = $this->SeriesRepository->novaSerie())
			redirect(base_url().'Administrativo');

		$this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');

		
		
	}

	public function alterarSerie($id)
	{
		$this->load->view('common/Header');
		$this->load->view('Administrativo/NavBarAdm');

		$this->load->model('SeriesRepository');		
		$data['serie'] = $this->SeriesRepository->getDataFromId($id);
		$data['titulo'] = "Editar Série";
		$data['button'] = "Concluir";
		$this->load->view('Administrativo/FormSerie', $data);

		if($data = $this->SeriesRepository->editarSerie($id))
			redirect(base_url().'Administrativo');
		
		$this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
	}

	public function deletarSerie($id)
	{
		$this->load->model('SeriesRepository');
		$this->SeriesRepository->deletarSerie($id);

		redirect(base_url().'Administrativo');
	}
}