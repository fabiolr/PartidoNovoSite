<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/**
 * Classe monta a intro do site
 *
 * @author hermes *
 *        
 */
class Questionario extends CI_Controller {
	protected $data = array ();
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Model_util' );
		$this->data ['base_url'] = base_url ();
	}
	function index() {
		redirect ( base_url () );
		
		// $this->data ['bloco_um'] = $this->Model_util->getQuestionarioParteUm ( 1 );
		
		// $this->data ['bloco_tres'] = $this->Model_util->getQuestionarioParteTres ( 1 );
		
		// $this->parser->parse ( "questionario", $this->data );
	}
	
	
	
	
	/**
	 * Receber um $hash do questionario faz a busca no banco e retorna com um registro do usuario
	 * @param string $hash
	 */
	function go($hash) {
		$cadastro = $this->Model_util->getCadastroHASH ( $hash );
		
		switch ($cadastro ['tb_status_cadastro_id']) {
			
			case 0 :
				$this->parser->parse ( "cadastro", $registro + $this->data );
				break;
			
			case 1 :
				$this->data ["msg"] = "Favor efetuar o pagamento";
				if ($cadastro ['tb_tipo_pagamento_id'] == 2 && $cadastro ['tb_status_pagamento_id'] == 2) {
					
					$this->data ['mensagem'] = 'Você tem um boleto pendente. Gostaria de imprimí-lo novamente?';
					$this->data ['texto_link'] = 'Usar cartão de crédito. A liberação é imediata';
					$this->data ['form_url'] = 'pagamento/cancelaBoleto/' . $cadastro ['codigo_filiado'];
					$this->data ['doc'] = $cadastro ['code'];
					$this->data ['boletopendente'] = true;
					$this->data ['email'] = $email;
					$this->data ['cpf'] = $cpf;
					$this->data ['titulo'] = $titulo;
					
					$this->data ['msg_valor'] = $cadastro ["tb_tipo_cargo_id"] == 0 ? "Você optou pela Candidatura Vereador no valor de R$ 250,00" : "Você optou pela Candidatura Prefeito/Vice-Prefeito no valor de R$ 750,00.";
					
					$this->parser->parse ( "status_pagamento", $this->data );
				} else {
					
					$this->data ['cpf'] = $cadastro ['nome'];
					$this->data ['msg_valor'] = $cadastro ["tb_tipo_cargo_id"] == 0 ? "Você optou pela Candidatura Vereador no valor de R$ 250,00" : "Você optou pela Candidatura Prefeito/Vice-Prefeito no valor de R$ 750,00.";
					
					$this->parser->parse ( "pagamento", $cadastro + $this->data );
				}
				break;
			
			case 2 :
				$this->data ['bloco_um'] = $this->Model_util->getQuestionarioParteUm ( 1 );
				$this->data ['bloco_tres'] = $this->Model_util->getQuestionarioParteTres ( 1 );
				$this->parser->parse ( "questionario", $cadastro + $this->data );
				break;
			
			case 3 :
				$this->data ['rq'] = null;
				$this->parser->parse ( "uploadvideo2", $cadastro + $this->data );
				break;
			
			case 4 :
				$this->data ['msg'] = "Em análise";
				$this->parser->parse ( "final", $cadastro + $this->data );
				break;
			
			case 10 :
				$this->data ['msg'] = "Em análise";
				$this->parser->parse ( "final", $cadastro + $this->data );
				break;
			
			case 11 :
				$this->data ['msg'] = "Em análise";
				$this->parser->parse ( "final", $cadastro + $this->data );
				break;
		}
	}
	
	
	
	/**
	 * Receber as respostas do questionario
	 */
	function recebe() {
		$r = "";
		
		$my_array = $_POST;
		
		$json = json_encode ( $my_array );
		
		$id = $this->input->post ( "doc1" );
		
		$r = $r . "pontos bloco 1<br>";
		// echo "pontos bloco 1<br>";
		$blocoA = 0;
		
		foreach ( $my_array as $k => $v ) {
			if (strpos ( $k, 'blocoA_' ) !== false) {
				$r = $r . " key  " . $k . "  = " . $v . " <br/>";
				$blocoA = $blocoA + $v;
			}
		}
		
		$r = $r . "<br>Resultado Bloco A " . $blocoA . "<br><br>";
		
		$resposta = $this->Model_util->getPontosBlocoB ( $this->input->post ( "resp1" ), $this->input->post ( "resp2" ), $this->input->post ( "resp3" ), $this->input->post ( "resp4" ), $this->input->post ( "resp5" ) );
		
		$blocoB = $resposta ['ponto'];
		
		$r = $r . "Resultado Bloco B " . $blocoB . "<br><br>";
		// echo "Resultado Bloco B " .$blocoB . "<br><br>";
		
		$blocoC = 0;
		foreach ( $my_array as $k => $v ) {
			if (strpos ( $k, 'blocoC_' ) !== false) {
				$r = $r . "key  " . $k . "  = " . $v . " <br/>";
				$blocoC = $blocoC + $v;
			}
		}
		
		$r = $r . "<br>Resultado C " . $blocoC . "<br><br>";
		
		$r = $r . "<br>Total " . ($blocoA + $blocoB + $blocoC) . "<br><br>";
		// echo "Total " . ( $blocoA + $blocoB + $blocoC) . "<br><br>";
		
		//$this->data ['rq'] = $r;
		
		$this->data ['rq'] = "";
		
		$campos = array (
				"blocoa" => $blocoA,
				"blocob" => $blocoB,
				"blococ" => $blocoC,
				"tb_cadastro_id" => $id,
				"json" => $json 
		);
		
		if ($this->Model_util->getExistePontos ( $id )) {
			$this->Model_util->setID ( $id, 'tb_cadastro_id' );
		}
		
		// salva na base de dados
		$this->Model_util->setTableData ( "tb_resultado_pontos" );
		$this->Model_util->setData ( $campos );
		$this->Model_util->save ();
		
		$campos = array (
				"tb_status_cadastro_id" => 3 
		);
		
		// altera o status do cadastro para upload de video
		$this->Model_util->setTableData ( "tb_cadastro" );
		$this->Model_util->setID ( $id );
		$this->Model_util->setData ( $campos );
		$this->Model_util->save ();
		
		$this->data ['id'] = $id;
		$this->parser->parse ( "uploadvideo2", $this->data );
	}
}
