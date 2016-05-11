<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Classe que monta o Faq
 * @author hermes * 
 *
 */
class Faq extends CI_Controller {
	
	protected $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();
	}
	
	/**
	 * Carrega o Faq do banco de dados
	 */
	function index(){	
		
		$this -> data['lista'] = $this->Model_util->getFaq();		
		$this -> parser -> parse("faq", $this -> data);
	}
	
	
}


?>
