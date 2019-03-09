<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Series extends CI_Controller 
{
    public function Index($genero)
    {
        $this->load->view('common/Header');
        $this->load->view('common/NavBar');

        $this->load->model('SeriesRepository');
		$data['series'] = $this->SeriesRepository->getDataFromGenero($genero);	        
        $data['genero'] = $genero;

        $v['Generos'] = $this->load->view('Series/Generos', $data, true);
        $v['CardSeries'] = $this->load->view('Series/CardSeries', $data, true);
        $this->load->view('Series/Layout', $v);

        $this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
    }

    public function Detalhes($id)
    {
        $this->load->view('common/Header');
        $this->load->view('common/NavBar');

        $this->load->model('SeriesRepository');
        $data['serie'] = $this->SeriesRepository->getDataFromId($id);
        $this->load->view('Series/Detalhes', $data);

        $this->load->view('common/FooterDescricao');
		$this->load->view('common/Footer');
    }
}