<?php

class Produtos extends CI_Controller{
	
	public function catalogo($pag){
		
		$produtos_categoria_id 		= $this->produtos_model	->buscaCategoriasId		();
		$produtos_categoria_nome 	= $this->produtos_model	->buscaCategoriasNome	();
		$medidas					= $this->medidas_model	->busca_tot_medidas		();
			
		asort($medidas);
		
		$content 		= array(	"medidas"					=> $medidas,
									"produtos_categorias_nome" 	=> $produtos_categoria_nome,
									"produtos_categorias_id" 	=> $produtos_categoria_id,
									"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fcatalogo%2Fpag%2F1",
									"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/produtos.php',$content);
	}
	
	public function categoria($id_categoria){
		
		$medidas_categoria		 	= $this->medidas_model->busca_medida_categoria($id_categoria);
		$produtos_categoria_id 		= $this->produtos_model->buscaCategoriasId();
		$produtos_categoria_nome 	= $this->produtos_model->buscaCategoriasNome();
			
		asort($medidas_categoria);
		
		$content = array(	"medidas"					=> $medidas_categoria,
							"atualCat"  				=> $id_categoria,
							"produtos_categorias_nome" 	=> $produtos_categoria_nome,
							"produtos_categorias_id" 	=> $produtos_categoria_id,
							"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fcategoria%2F2",
							"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/produtos_categoria.php',$content);
	}
	
	public function categoria_mob(){
		
		$id 	= $this->input->post("categoria");
	
		$id_categoria 				= $id;
		$produtos_categoria_id 		= $this->produtos_model->buscaCategoriasId();
		$produtos_categoria_nome 	= $this->produtos_model->buscaCategoriasNome();
		$id_produtos 				= $this->produtos_model->busca_produtoID_categoria($id);
	
		$medidas = array();
	
		foreach ($id_produtos as $id_produto){
				
			$medida 	= $this->medidas_model->busca_medida_categoria($id_produto['id']);
				
			if($medida != false){
				array_push($medidas, $medida['medida']);
					
			}
		}
	
		$content = array(	"id_categoria"				=> $id_categoria,
							"medidas"					=> $medidas,
							"num_pages" 				=> '0',
							"atualPage_produtos" 		=> '0',
							"produtos_categorias_nome" 	=> $produtos_categoria_nome,
							"produtos_categorias_id" 	=> $produtos_categoria_id,
							"atualCat"  				=> $id,
							"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fcategoria%2F2",
							"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/produtos_categoria.php',$content);
	}
	
	public function descricao($id){
		
		$all_prod 					= $this->produtos_model->total_produtos();
		$tot_produtos 				=  count($all_prod);
		$produtos 					= $this->produtos_model->busca_produtos_descricao($id);
		$produtos_categoria_id 		= $this->produtos_model->buscaCategoriasId();
		$produtos_categoria_nome 	= $this->produtos_model->buscaCategoriasNome();
		$medidas_from_produtos 		= $this->medidas_model->busca_medidas_from_produtos($id);
	
		$content = array(	"tot_produtos" 				=> $tot_produtos,
							"produtos" 					=> $produtos,
							"produtos_categorias_nome" 	=> $produtos_categoria_nome,
							"produtos_categorias_id" 	=> $produtos_categoria_id,
							"medidas" 					=> $medidas_from_produtos,
							"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fid%2F31",
							"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/descricao.php',$content);
	}
	
	public function produto_select(){
	
		$id 						= $this->input->post('id');
		
		$all_prod 					= $this->produtos_model->total_produtos();
		$tot_produtos 				=  count($all_prod);
		$produtos 					= $this->produtos_model->busca_produtos_descricao($id);
		$produtos_categoria_id 		= $this->produtos_model->buscaCategoriasId();
		$produtos_categoria_nome 	= $this->produtos_model->buscaCategoriasNome();
		$medidas_from_produtos 		= $this->medidas_model->busca_medidas_from_produtos($id);
		
		$content = array(	"tot_produtos" 				=> $tot_produtos,
							"produtos" 					=> $produtos,
							"produtos_categorias_nome" 	=> $produtos_categoria_nome,
							"produtos_categorias_id" 	=> $produtos_categoria_id,
							"medidas" 					=> $medidas_from_produtos,
							"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fbusca-medida%2F2",								
							"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/descricao.php',$content);
	}
	
	public function medidas(){
		
		$produtos_categoria_id 		= $this->produtos_model->buscaCategoriasId();
		$produtos_categoria_nome 	= $this->produtos_model->buscaCategoriasNome();
		$total_medidas 				= $this->medidas_model->busca_tot_medidas();
		
		$num_tabelas 				= 3;
		$tot_med 					= count($total_medidas);
		$num_medidas 				= ($tot_med/$num_tabelas);	
			
		$content = array(	"num_tabelas" 				=> $num_tabelas,
							"num_medidas" 				=> $num_medidas, 
							"produtos_categorias_nome" 	=> $produtos_categoria_nome,
							"produtos_categorias_id" 	=> $produtos_categoria_id,
							"url_markup"				=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fmedidas",
							"atualPage" 				=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template_prod('produtos/allMed.php',$content);
	}
	
	public function medidas_select(){
			
		$largura 	= $this->input->post('largura');
		$perfil 	= $this->input->post('perfil');
		$raio 		= $this->input->post('raio');	
		$id_medidas = $this->medidas_model->busca_medidas_selected($largura,$perfil,$raio);
		$produtos 	= array();
		
		foreach($id_medidas as $id_medida)
		{
			if($id_medida['codProd'] != 0){
				$produto = $this->produtos_model->busca_produto_med($id_medida['codProd']);
				array_push($produtos, $produto);
			}
		}
	
		$content = array(	"id_medidas" 	=> $id_medidas,
							"produtos"		=> $produtos,
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fbusca-medida%2F2",
							"atualPage" 	=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template('produtos/medidas_selected.php',$content);
	}
	
	public function medidas2_select($id_med){		
	
		$id_medidas = $this->medidas_model->busca_medidas2_selected($id_med);	
		$produtos 	= array();
		foreach($id_medidas as $id_medida)
		{
			if($id_medida['codProd'] != 0){
				$produto = $this->produtos_model->busca_produto_med($id_medida['codProd']);
				array_push($produtos, $produto);
			}	
		}
	
		$content = array(	"produtos"		=> $produtos,
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fprodutos%2Fbusca-medida%2F2",
							"atualPage" 	=> "Produtos | Catálogo de pneus separados por Desenhos e Medidas");
			
		$this->load->template('produtos/medidas_selected.php',$content);
	}
	
	public function download_catalogo(){	
		$data = file_get_contents('download/Tabela_de_Medidas_de_Pneus.pdf');
		$name = 'Tabela de Medidas de Pneus.pdf';
		return force_download($name, $data);		
	}
	
	public function select_produto($id_med){
		$produto = $this->produtos_model->busca_produto_med($id_med);
		return $produto;
	}
}