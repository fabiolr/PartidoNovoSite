<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Hermes hermes@hermes-Vostro-3500
* 1.0
* 
*
*/

class Start extends CI_Controller {

	protected $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('util'); // lib que contem funcoes comuns
		$this->util->LogOn(); // verifica se o usuario esta logado
		$this->load->model('Model_util');  // model que contem funcoes comuns
		$this -> data['base_url'] = base_url();
		$this->load->library('ctrlemail');
	}

	function pag_conf()
	{
		$this->data['title']='Login Administrativo';
		$this->data['js']= 	array(
				array('js_url' => 'http://code.jquery.com/jquery-latest.min.js'),
				array('js_url' => 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'),
				array('js_url' =>  base_url().'js/bootstrap.js'),

				array('js_url' =>  base_url().'js2/jquery_tooltip.js'),
				array('js_url' =>  base_url().'js2/jquery_tooltip_execute.js'),
		);
		$this->data['css']= array(
				array('css_url' => base_url().'css/bootstrap.css'),
				 
				array('css_url' => base_url().'css2/style_interno01.css'),
				array('css_url' => base_url().'css2/simpletooltip.css')
		);
	}

	public function index()
	{
		
		
		$this->pag_conf();
		
		$this -> data['menu_item'] = $this->Model_util->getmenu(0);
		$this -> parser -> parse("util/frameset", $this -> data);
		
		//$this->util->ShowADMTopPage( $this->data ); // carrega o topo do adm
		//$this->util->ShowADMMenu(0) ; // carrega o menu adm		
		//$this->util->ShowADMBottomPage(); // Carrega o rodape do adm
	}
	
	
	public function frameup(){		
		$this->pag_conf();		
		$this -> data['menu_item'] = $this->Model_util->getmenu(0);
		$this -> parser -> parse("util/frameup", $this -> data);		
	}	
	
	public function framestart(){		
		
		$this -> parser -> parse("miolo", $this -> data);
	}
	
	
	public function aprovado(){
		$this -> parser -> parse("miolo-aprovado", $this -> data);
	}
	
	public function reprovado(){
		$this -> parser -> parse("miolo-reprovado", $this -> data);
	}
	
	
	public function candidato($id){
		// pego os dados na base do sistema
		$registro = $this->Model_util->getCadastroID($id);
		
		$da = explode ( " ", $registro ["data_criacao"] );
		$registro ["data_criacao"] = implode ( '-', array_reverse ( explode ( '-', $da [0] ) ) ) . " " . $da [1] ;
		$registro ["data_nascimento"] = implode ( '-', array_reverse ( explode ( '-', $registro ["data_nascimento"] ) ) );
		
		$registro ["vontuntario"] = $this->simnao( $registro ["vontuntario"] );		
		$registro ["filiado_partido"] = $this->simnao( $registro ["filiado_partido"] );		
		$registro ["exerceu_mandato"] = $this->simnao( $registro ["exerceu_mandato"] );		
		$registro ["foi_candidato"] = $this->simnao( $registro ["foi_candidato"] );
		
		
		$pontos = $this->Model_util->getResultadosPontos($id);
		
		$registro['blocoa'] = $pontos['blocoa'] ;
		$registro['blocob'] = $pontos['blocob'] ;
		$registro['blococ'] = $pontos['blococ'] ;
		
		//Pego os dados na base do partido		
		$extras = $this->Model_util->getExtras($registro["IdFiliado"]);
		
		$registro ["Endereco"] = $extras['Endereco'];
		$registro ["Numero"] = $extras['Numero'];
		$registro ["Endereco"] = $extras['Endereco'];
		$registro ["Complemento"] = $extras['Complemento'];
		$registro ["Bairro"] = $extras['Bairro'];
		$registro ["Cidade"] = $extras['Cidade'];
		$registro ["Estado"] = $extras['Estado'];
		
		$registro ["TituloEleitoral"] = $extras['TituloEleitoral'];
		$registro ["Zona"] = $extras['Zona'];		
		$registro ["Secao"] = $extras['Secao'];
		
		
		$registro['total_blocos'] = $registro['blocoa'] + $registro['blocob'] + $registro['blococ'];
		
		$this -> parser -> parse("adm/candidato", $registro   + $this -> data);
		
	}
	
	
	private function simnao($valor){		
		return  ($valor == "1") ? "Sim" : "Não";
	}
	
	
	function changeon($hash){
		
		$campos=array('tb_status_cadastro_id' => 10);		
		$this->Model_util->setTableData("tb_cadastro");
		$this->Model_util->setId($hash,"code");
		$this->Model_util->setData($campos);
		$this->Model_util->save();
		
		$candidato = $this->Model_util->getCadastroHASH($hash); 
		
		$this->ctrlemail->aprovado( $candidato['nome'], $candidato['code'], $candidato['email'] );
		
	}
	
	function changeoff($hash){
	
		$campos=array('tb_status_cadastro_id' => 11);
		$this->Model_util->setTableData("tb_cadastro");
		$this->Model_util->setId($hash,"code");
		$this->Model_util->setData($campos);
		$this->Model_util->save();
		
		$candidato = $this->Model_util->getCadastroHASH($hash);
		
		$this->ctrlemail->reprovado( $candidato['nome'], $candidato['code'], $candidato['email'] );
		
		
	}
	
}
