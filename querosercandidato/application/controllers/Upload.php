<?php

/*
 *
* @autor	Hermes Canuto de Souza
* @Descrição controle home do administrativo
* Monta o upload administrativo do site.
*
*/

class Upload  extends CI_Controller {

	var $data = '';
	var $id = '';
	var $table = '' ;
	var $path = '';
	var $ext = '';

	function __construct()
	{
		parent::__construct();
		$this->load->library('util'); // lib que contem funcoes comuns
		$this->load->model('model_util');  // model que contem funcoes comuns
		$this -> data['base_url'] = base_url();
	}

	function index()
	{

		redirect('/intro');
		
	}


	function recebe()
	{
		$id = $this->input->post("doc1");
		
		//print_r($_POST);
		
		
		$path = $_FILES['userfile']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		
		//$file_name =  "candidato_id_".$id."_".$_FILES['userfile']['name'];
		$file_name =  "candidato_id_".$id.".".$ext;
		//$file_name =  "candidato_id_".$id;
		
		$config['file_name'] =  $this->slug($file_name); 

		$config['upload_path'] ="./upload";
		$config['allowed_types'] = 'mp4|ogg|webm';
		$config['max_size']	= '5048576';

		$this->load->library('./upload', $config);

		if ( ! $this->upload->do_upload())
		{			
			$this->data['error'] = $this->upload->display_errors();			
			echo $this->upload->display_errors();
			//$this->parser->parse('util/uploadform', $this->data);
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
			$upload_data=$this->upload->data();

			$data['arquivo']=$upload_data['file_name'];
			$data['base_url']=base_url();
				
			 $campos = Array
			(
					'video_url'	=> $file_name,
					'tb_status_cadastro_id'	=> 4
			);

			//print_r($campos );
			
			$this->model_util->setTableData("tb_cadastro");
			$this->model_util->setID($id);
			$this->model_util->setData($campos);
			$this->model_util->save(); 
			
			//echo $this->db->last_query();
			
			$this->data ['msg']="Obrigado - Cadastro finalizado com sucesso";
			$this->parser->parse('final', $this->data);			
			
		}

	}
	
	
	function recebe2($id)
	{
			
		//print_r($_POST);

		$path = $_FILES['userfile']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		
		//$file_name =  "candidato_id_".$id."_".$_FILES['userfile']['name'];
		$file_name =  "candidato_id_".$id.".".$ext;
		//$file_name =  "candidato_id_".$id;

		$config['file_name'] = $this->slug($file_name);
	
		$config['upload_path'] ="./upload";
		$config['allowed_types'] = 'mp4|ogg|webm';
		$config['max_size']	= '5048576';
	
		$this->load->library('./upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$this->data['error'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			//$this->parser->parse('util/uploadform', $this->data);
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
			$upload_data=$this->upload->data();
	
			$data['arquivo']=$upload_data['file_name'];
			$data['base_url']=base_url();
	
			$campos = Array
			(
					'video_url'	=> $this->slug($file_name),
					'tb_status_cadastro_id'	=> 4
					);
	
			//print_r($campos );
				
			$this->model_util->setTableData("tb_cadastro");
			$this->model_util->setID($id);
			$this->model_util->setData($campos);
			$this->model_util->save();
				
			//echo $this->db->last_query();
				
		//	$this->data ['msg']="Obrigado - Cadastro finalizado com sucesso";
		//	$this->parser->parse('final', $this->data);
				
		}
	
	}

	
	function slug( $string )
	{
		return preg_replace( array( '/([`^~\'"])/', '/([-]{2,}|[-+]+|[\s]+)/', '/(,-)/' ), array( null, '-', ', ' ), iconv( 'UTF-8', 'ASCII//TRANSLIT', $string ) );
	}
}