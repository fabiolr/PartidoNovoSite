<?php

/*
 *
* @autor	Hermes Canuto de Souza
* @Descrição controle home do administrativo
* Monta o upload administrativo do site.
*
*/

class Testa  extends CI_Controller {

	var $data = '';
	var $id = '';
	var $table = '' ;

	function __construct()
	{
		parent::__construct();
		$this->load->library('util'); // lib que contem funcoes comuns
		$this->load->model('model_util');  // model que contem funcoes comuns
		$this -> data['base_url'] = base_url();
		$this->load->library('ctrlemail');
	}	
	
	function index(){
		
		$this->ctrlemail->pagamento("Hermes Canuto","dfgsdgsdfs","hermes.canuto@gmail.com"  );
		
	}
	
}