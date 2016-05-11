<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/*
* Hermes hermes.canuto@gmail.com
*
*/
class Model_util extends MY_Model {
	function __construct() {
		parent::__construct ();
	}

	/**
	 * retorna uma lista de perguntas e respostas
	 */
	function getFaq() {
		$this->db->order_by ( "ordem", "asc" );
		$recordset = $this->db->get ( 'tb_faq' );
		return $recordset->result_array ();
	}

	/**
	 * retorna se usuario está cadastrado no admin
	 *
	 * @param string $user
	 * @param string $pass
	 * @return boolean
	 */
	function valid_user($user, $pass) {
		$fields = array (
			'usuario' => $user,
			'senha' => ($pass)
		);
		$query = $this->db->get_where ( 'tb_usuario', $fields );

		if ($query->num_rows () > 0) {
			return $query->row ();
		} else {
			return false;
		}
	}

	/**
	 * retorna uma lista de menu
	 *
	 * @param id $menu
	 */
	function getmenu($menu) {
		$this->db->order_by ( "id", "asc" );
		$query = $this->db->get_where ( 'tb_menu', array (
			'pai' => $menu
		) );
		return $query->result_array ();
	}

	/**
	 *
	 * @param int $tb_tipo_cargo_id
	 * @return a lista de questoes da base da dados
	 */
	function getQuestionarioParteUm($tb_tipo_cargo_id) {
		$query = $this->db->get_where ( 'tb_questionario_bloco_1', array (
			'tb_tipo_cargo_id' => $tb_tipo_cargo_id
		) );
		return $query->result_array ();
	}

	/**
	 *
	 * @param int $tb_tipo_cargo_id
	 * @return a lista de questoes da base da dados
	 */
	function getQuestionarioParteTres($tb_tipo_cargo_id) {
		$query = $this->db->get_where ( 'tb_questionario_bloco_3', array (
			'tb_tipo_cargo_id' => $tb_tipo_cargo_id
		) );
		return $query->result_array ();
	}
	/**
	 * Retorna a pontuação baseada nas posições das respostas
	 *
	 * @param string $resp1
	 * @param string $resp2
	 * @param string $resp3
	 * @param string $resp4
	 * @param string $resp5
	 *
	 * @return um array do registro
	 */
	function getPontosBlocoB($resp1, $resp2, $resp3, $resp4, $resp5) {
		$query = $this->db->get_where ( 'tb_pontuacao_questionario_bloco_2', array (
			'resp1' => $resp1,
			'resp2' => $resp2,
			'resp3' => $resp3,
			'resp4' => $resp4,
			'resp5' => $resp5
		) );

		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		}else{
			return array('ponto' =>0);
		}


	}
	function getResultadosPontos($id) {
		$query = $this->db->get_where ( 'tb_resultado_pontos', array (
			'tb_cadastro_id' => $id
		) );
		if ($query->num_rows () > 0) {

			$data = $this->setDataFromArray( $query->result_array () );
		}else{
			$data = array("blocoa"=>0 , "blocob"=>0 ,"blococ"=>0 );
		}

		return $data;
	}

	function getExistePontos($id){
		$query = $this->db->get_where ( 'tb_resultado_pontos', array (
			'tb_cadastro_id' => $id
		) );
		if ($query->num_rows () > 0) {

			return true;
		}else{
			return false;
		}
	}

	/**
	 *
	 * Busca na base por um filiado
	 *
	 * @param string $email
	 * @param string $cpf
	 * @param string $titulo
	 * @return o registro do filiado
	 */
	function getFiliado($email, $cpf, $titulo) {
		$query = $this->db->get_where ( 'tb_Filiado', array (
			'TituloEleitoral' => $titulo,
			'Email' => $email,
			'CPF' => $cpf
		) );

		if ($query->num_rows () > 0) {

			$x = $query->result_array ();

			$data=$this->setDataFromArray( $query->result_array () );

			$query = $this->db->get_where ( 'tb_escolaridade', array (
				"EscolaridadeId" => $data ["EscolaridadeId"]
			) );
			$registro = $query->result_array ();

			$data ["Escolaridade"] = $registro [0] ["Escolaridade"];
			return $data;
		} else {

			return false;
		}
	}

	function getCadastro($codigo_filiado) {
		$query = $this->db->get_where ( 'tb_cadastro', array (
			'codigo_filiado' => $codigo_filiado
		) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}

	function getAfiliadoById($id) {
		$query = $this->db->get_where('vw_gs', array ('id' => $id));
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray($query->result_array());
		}
		return false;

	}

	function getCadastroInvoiceID( $invoice_id ){
		$query = $this->db->get_where ( 'vw_gs', array ('invoice_id' => $invoice_id  ) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}

	function getCadastroID($id) {
		$query = $this->db->get_where ( 'vw_gs', array (
			'id' => $id
		) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}
	
	function getCadastroHASH($hash) {
		$query = $this->db->get_where ( 'vw_gs', array (
				'code' => $hash
		) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}
	
	function getCadastroContinua (  $email, $cpf, $titulo ){
		
		$query = $this->db->get_where ( 'vw_gs_simples', array (
				'TituloEleitoral' => $titulo,
			    'Email' => $email,
			    'CPF' => $cpf
		) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}
	
	function getExtras($idfiliado){
		$query = $this->db->get_where ( 'tb_Filiado', array ('FiliadoId' => $idfiliado) );
		if ($query->num_rows () > 0) {
			return $this->setDataFromArray( $query->result_array () );
		} else {
			return false;
		}
	}

	function setDataFromArray($array){
		foreach ( $array[0] as $i => $v ) {
			$data [$i] = $v;
		}
		return $data;
	}
	
	function limpa($codigo_filiado){			
		$this->db->where('codigo_filiado', $codigo_filiado);
		$this->db->delete('tb_cadastro'); 
	}
}
