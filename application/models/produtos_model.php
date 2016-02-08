<?php
	class Produtos_model extends CI_Model {
	
		
		public function buscaCategoriasId() {
			$this->db->select('id_categoria');
			$this->db->distinct();
			$this->db->order_by("id_categoria");
			return $this->db->get("produtos")->result_array();
		}
		public function buscaCategoriasNome() {
			$this->db->select('categoria');
			$this->db->distinct();
			$this->db->order_by("categoria");
			return $this->db->get("produtos")->result_array();
		}
		
		public function total_produtos() {
			$this->db->order_by("nome");
			return $this->db->get("produtos")->result_array();
		}
		
		public function busca_produtos($limite,$pag) {
			$start = ($pag*$limite)-$limite+1;
			$this->db->where('id >', $start);
			$this->db->limit($limite);
			$this->db->order_by("id");
			return $this->db->get("produtos")->result_array();
			
		}
		
		public function busca_produtoID_categoria($id) {
			$this->db->select('id');
			$this->db->distinct();
			$this->db->where('id_categoria', $id );
			return $this->db->get("produtos")->result_array();
		}
		
		public function busca_produtos_categoria($id) {
			$this->db->where('id', $id );
			return $this->db->get("produtos")->result_array();
		}
				
		
		public function busca_produtos_descricao($id) {
			$this->db->select('nome,id,imagem');
			$this->db->distinct();
			$this->db->where(array("id" => $id));
			return $this->db->get("produtos")->result_array();
		}
		
		public function busca_produto_med($id_med){
			$this->db->where(array("id" => $id_med));
			return $this->db->get("produtos")->row_array();
		}

		
	}