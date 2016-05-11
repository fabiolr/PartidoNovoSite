<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/**
 * Classe monta a intro do site
 *
 * @author hermes *
 *        
 */
class Login extends CI_Controller {
	protected $data = array ();
	protected $email;
	protected $cpf;
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Model_util' );
		$this->data ['base_url'] = base_url ();
	}
	function index() {
		$this->data ['erro'] = 0;		
		$this->parser->parse ( "Login", $this->data );
	}
	function vereador() {
		$this->data ['go'] = "go";
		$this->data ['erro'] = 0;
		$this->data ['tb_tipo_cargo_id'] = 0;
		$this->parser->parse ( "Login", $this->data );
	}
	
	function prefeito() {
		$this->data ['go'] = "go";
		$this->data ['erro'] = 0;
		$this->data ['tb_tipo_cargo_id'] = 1;
		$this->parser->parse ( "Login", $this->data );
	}
	
	function continuar() {
		$this->data ['go'] = "continua";
		$this->data ['erro'] = 0;
		$this->data ['tb_tipo_cargo_id'] = 10;
		$this->parser->parse ( "Login", $this->data );
	}
	
	
	function continua() {
		$email = $this->input->post ( 'email' );
		$cpf = $this->input->post ( 'cpf' );
		$titulo = $this->input->post ( 'titulo' );
		$tb_tipo_cargo_id = $this->input->post ( 'doc' );
		
		$cadastro = $this->Model_util->getCadastroContinua ( $email, $cpf, $titulo );
		
		if ($cadastro) {
			$this->controlaCandidato ( $cadastro, $email, $cpf, $email, $cpf, $titulo );
		} else {
			
			$this->parser->parse ( "naotemprocesso", $this->data );
		}
	}
	
	
	function go() {
		$email = $this->input->post ( 'email' );
		$cpf = $this->input->post ( 'cpf' );
		$titulo = $this->input->post ( 'titulo' );
		$tb_tipo_cargo_id = $this->input->post ( 'doc' );
		
		if ($this->session->flashdata ( 'doc' )) {
			$registro = $this->Model_util->getAfiliadoById ( $this->session->flashdata ( 'doc' ) );
		} else {
			// verifica se o usuario é filiado
			$registro = $this->Model_util->getFiliado ( $email, $cpf, $titulo );
		}
		
		if ($registro) {
			// verifica se ele está em processo
			$cadastro = $this->Model_util->getCadastro ( $registro ['FiliadoId'] );
			
			if ($cadastro) {
				
				$this->controlaCandidato ( $cadastro, $email, $cpf, $titulo );
			} else {
				
				// caso nao esteja em processo executa o cadastro com o dados da base filiada
				$da = explode ( " ", $registro ["DataNascimento"] );
				$registro ["DataNascimento"] = implode ( '-', array_reverse ( explode ( '-', $da [0] ) ) );
				$registro ["tb_tipo_cargo"] = $this->input->post ( 'doc' );
				
				
				$this->data ['erro'] = 0;
				$this->parser->parse ( "cadastro", $registro + $this->data );
			}
		} else {
			
			// caso nao seja filiado exibe mensagem de erro
			$this->data ['go'] = "go";
			$this->data ['erro'] = 1;
			$this->data ['tb_tipo_cargo_id'] = $tb_tipo_cargo_id;
			$this->parser->parse ( "Login", $this->data );
		}
	}
	private function controlaCandidato($cadastro, $email, $cpf, $titulo) {
		if ($cadastro) {
			
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
						
						$this -> data['msg_valor'] = $cadastro["tb_tipo_cargo_id"] == "0" ? "Você optou pela Candidatura Vereador no valor de R$ 250,00" : "Você optou pela Candidatura Prefeito/Vice-Prefeito no valor de R$ 750,00."; 
						
						$this->parser->parse ( "status_pagamento", $this->data );
					} else {
						
						
						$this->data ['cpf'] = $cadastro ['nome'];
						
						$this -> data['msg_valor'] = $cadastro["tb_tipo_cargo_id"] == "0" ? "Você optou pela Candidatura Vereador no valor de R$ 250,00" : "Você optou pela Candidatura Prefeito/Vice-Prefeito no valor de R$ 750,00.";
						
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
		} /*
		   * else {
		   *
		   * // caso nao esteja em processo executa o cadastro com o dados da base filiada
		   * $da = explode ( " ", $registro ["DataNascimento"] );
		   * $registro ["DataNascimento"] = implode ( '-', array_reverse ( explode ( '-', $da [0] ) ) );
		   * $registro ["tb_tipo_cargo"] = $this->input->post ( 'doc' );
		   *
		   * $this->data ['erro'] = 0;
		   * $this->parser->parse ( "cadastro", $registro + $this->data );
		   * }
		   */
	}
}