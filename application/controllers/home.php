<?php

	class Home extends CI_Controller{
		public function index(){
			
			//MODELS
			$this->load->database();
			$this->load->model (array("produtos_model","medidas_model"));
			
			//CONTROLERS
			$produtos 				= $this->produtos_model->total_produtos();
			$produtos_categoria_id 	= $this->produtos_model->buscaCategoriasId();
			$larguras 				= $this->medidas_model->buscaLargura();
			$perfis 				= $this->medidas_model->buscaPerfil();
			$raios 					= $this->medidas_model->buscaRaio();
			
			$content = array(	"produtos" 					=> $produtos, 
								"produtos_categorias_id" 	=> $produtos_categoria_id,
								"larguras"		 			=> $larguras, 
								"perfis" 					=> $perfis, 
								"raios" 					=> $raios,
								"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br",
								"atualPage" 				=> "Página Principal | Pneus Remoldados a Frio e a Quente" );
							
			$this->load->template('home/index.php',$content);
		}
	}