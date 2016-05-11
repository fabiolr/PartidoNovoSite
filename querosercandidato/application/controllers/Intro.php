<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe monta a intro do site
 * @author hermes *
 *
 */
class Intro extends CI_Controller {
	
	protected $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this -> load -> model('Model_util');
		$this->data["base_url"] = base_url();
	}
	
	function index(){	
		$this->data['erro'] = 1;
		$this -> parser -> parse("intro", $this -> data);
	}
	
	
}