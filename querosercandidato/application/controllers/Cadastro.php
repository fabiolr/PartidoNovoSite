<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe monta a intro do site
 * @author hermes *
 *
 */
class Cadastro extends CI_Controller {
	
	protected $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();
	}
	
	function index()
	{	
		
		redirect(base_url());
		//$this -> parser -> parse("cadastro", $this -> data);
	}
	
	
	function recebe(){		
		
		
		$campos = $_POST;	
		
		$campos["data_nascimento"] = implode('-', array_reverse(explode('-', $campos["data_nascimento"])));		
		$campos["codigo_filiado"]  = $this->input->post("doc");			
		$campos["tb_tipo_cargo_id"] = $this->input->post("doc2");		
		$campos["tb_status_cadastro_id"] = 1;
		
		//$campos["code"] = md5( $campos["codigo_filiado"] );
		$campos["code"] = $campos["codigo_filiado"]. "_" .md5( $campos["codigo_filiado"] );
		
		$this->Model_util->limpa( $campos["codigo_filiado"] );
		
		//print_r( $campos );
		
		$this->Model_util->setTableData("tb_cadastro");	
		$this->Model_util->setData($campos);
		$this->Model_util->save();
		
		
		// pega o id que foi inserido
		$id = $this->Model_util->getInsertID();
		// retorna o registro
		$cadastro = $this->Model_util->getCadastroID ( $id );	
		$cadastro['codigo_filiado'] =$cadastro['IdFiliado']; 
		
		
		$this -> data['msg_valor'] = $campos["tb_tipo_cargo_id"] == 0 ? "Você optou pela Candidatura Vereador no valor de R$ 250,00" : "Você optou pela Candidatura Prefeito/Vice-Prefeito no valor de R$ 750,00."; 
	    $this -> parser -> parse("pagamento", $cadastro + $this -> data);
	}
}
