<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package		Ctrlemail
 * @author		Hermes Canuto
 * @since		Version 1.1

*/


class Ctrlemail {
	
		

	function pagamento($nome,$hash,$email){		

		$url = "<a href='".base_url().'questionario/go/'.$hash."'> ".base_url().'questionario/go/'.$hash." </a> " ;
		
		$msg="<img src='" .base_url(). "/pic/logo.png' ><br><br><br><br><br><br>";
		$msg=$msg ."Agradecemos sua participação no processo seletivo de candidaturas do Partido <b>NOVO</b>. <br>";
		$msg=$msg . "Click no link para retornar ao processo .<br><br>";
		$msg=$msg .$url . "<br><br>";
		$msg=$msg . "Atenciosamente,<br><br>";
		$msg=$msg . "Equipe <b>NOVO</b>";	
		
		$this->disparaEmail($email, $msg, "Pagamento Efetuado");			
		
	}
	
	
	function cadastrosucesso($nome,$hash,$email){			
	
		$msg="<img src='" .base_url(). "/pic/logo.png' ><br><br><br><br><br><br>";
		$msg=$msg ."Agradecemos sua participação no processo seletivo de candidaturas do Partido <b>NOVO</b>. <br>";
		$msg=$msg . "Retornaremos a você até o dia xx/04 com os resultados desta primeira etapa.<br><br>";
		$msg=$msg . "Atenciosamente,<br><br>";
		$msg=$msg . "Equipe <b>NOVO</b>";
		
		$this->disparaEmail($email, $msg, 'Seu cadastro no processo seletivo do Partido NOVO foi realizado com sucesso');		

	}
	
	
	function aprovado($nome,$hash,$email){		
		$msg="<img src='" .base_url(). "/pic/logo.png' ><br><br><br>";
		$msg=$msg . "Prezado(a),<br><br><br>";
		$msg=$msg . "Tivemos 591 inscritos nesse primeiro processo seletivo de candidaturas do NOVO. Foi um enorme sucesso, superando todas as expectativas. A quase totalidade nunca havia sido filiada a nenhum partido político.<br><br>";
		$msg=$msg . "<b>É com prazer que anunciamos sua aprovação para a 2a. etapa do nosso processo.</b><br><br>";
		$msg=$msg . "Nessa nova etapa você será entrevistado por membros dos Diretórios do NOVO. As entrevistas ocorrerão entre os dias 11 e 22 de Abril.<br><br>";
		$msg=$msg . "Até o dia 11/04 você receberá uma mensagem com local e opções da data para sua entrevista.<br><br>";
		$msg=$msg . "O resultado dessa 2a. etapa será divulgado no dia 25/04<br><br>";
		$msg=$msg . "Novas ideias e novas lideranças que acreditam que o Estado deva trabalhar para o Cidadão, e não o contrário, é o que precisamos para tirar o Brasil da crise e transformá-lo em um País admirado.<br><br>";
		$msg=$msg . "Parabéns pela sua iniciativa.<br><br>";		
		$msg=$msg . "Atenciosamente,<br>";
		$msg=$msg . "Equipe do <b>NOVO</b>";
			
		$this->disparaEmail($email, $msg, 'Resultado do processo seletivo de pré-candidatos do Partido NOVO');		
	}	
	
	function reprovado($nome,$hash,$email){
		$msg="<img src='" .base_url(). "/pic/logo.png' ><br><br><br>";
		$msg=$msg . "Prezado(a),<br><br><br>";
		$msg=$msg . "Tivemos 591 inscritos nesse primeiro processo seletivo de candidaturas do NOVO. Foi um enorme sucesso, superando todas as expectativas. A quase totalidade nunca havia sido filiada a nenhum partido político.<br><br>";
		$msg=$msg . "Infelizmente, considerando o número de candidatos inscritos, as vagas disponíveis e critérios objetivos usados no processo, não podemos lhe oferecer uma vaga na 2a. etapa do processo.<br><br>";
		$msg=$msg . "Agradecemos sinceramente seu apoio ao NOVO e a identificação com o projeto.<br><br>";
		$msg=$msg . "A participação neste processo certamente ajudou a prepará-lo melhor pra os próximos, se assim desejar. Entre em contato com o núcleo da sua cidade, participe e se aprofunde mais em nossas iniciativas.<br><br>";
		$msg=$msg . "Temos certeza que estará cada vez mais alinhado com o NOVO.<br><br>";
		$msg=$msg . "Parabéns pela sua disposição em concorrer.<br><br>";
		$msg=$msg . "Novas ideias e novas lideranças que acreditam que o Estado deva trabalhar para o Cidadão, e não o contrário, é o que precisamos para tirar o Brasil da crise e transformá-lo em um País admirado.<br><br>";
		$msg=$msg . "Você está contribuindo para isso.<br><br>";		
		$msg=$msg . "Atenciosamente,<br>";
		$msg=$msg . "Equipe do <b>NOVO</b>";
		
		$this->disparaEmail($email, $msg, 'Resultado do processo seletivo de pré-candidatos do Partido NOVO');		
	}
	
	private function disparaEmail($email, $msg , $subject){
		
		$CI =& get_instance();
		$CI->load->library('email');
		
		$CI->email
		->from('no-reply@novo.org.br', 'Partido NOVO')
		->to($email)
		->subject($subject)
		->message($msg)
		->set_mailtype('html');
		
		if ( $CI->email->send()) {
			echo "Email enviado";
		} else {
			show_error(  $CI->email->print_debugger() );
		}
		
	}
}
