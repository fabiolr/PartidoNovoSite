<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe monta a intro do site
 * @author hermes *
 *
 */
class Captcha extends CI_Controller {
	
	protected $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();
	}
	
	function index()
	{	
		
		$this->load->helper('captcha');
		
		
		$vals = array(				
				'img_path'	=> './upload/',
				'img_url'	=> base_url()."upload/",			
				'img_width'	=> '150',
				'img_height' => 50,
				'expiration' => 7200
		);
		
		$cap = create_captcha($vals);
		echo $cap['image'];
	}
	
	
}
