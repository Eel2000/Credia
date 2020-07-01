<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilController extends CI_Controller {

	public function index()
	{
		$this->load->view('accueil');
	}

	public function inventaire(){
		$this->load->model('EquipementModel') ;

		$equipements =  $this->EquipementModel->getEquipements();
		$eq = $this->EquipementModel->getArticleEquipements();

		$data = array('equipements' => $equipements);

		$this->load->view('inventaire', $data);
	}

	public function rapport(){
		$this->load->view('rapport');
	}
}
