<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finalprocesso extends CI_Controller {

	protected $data = array ();

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Model_util' );
		$this->data ['base_url'] = base_url ();
	
	}
	
	public function index()
	{
		$this->data ['msg']="Obrigado - Cadastro finalizado com sucesso";
		$this -> parser -> parse("final", $this -> data);
	}
}
