<?php
	class Medidas_model extends CI_Model {
		
		//ALL MED
		public function busca_tot_medidas(){
			$this->db->select('medida');
			$this->db->distinct();
			$this->db->where('codProd >','0');	
			return $this->db->get("medidas2")->result_array();
		}
		
		//SELECTED FROM ALL MED
		public function busca_medidas2_selected($id_med){
			$this->db->where(array("id_med" => $id_med));
			return $this->db->get("medidas2")->result_array();
		}
		
		//SELECTED FROM INDEX
		public function buscaLargura() {
			$this->db->select('largura');
			$this->db->distinct();
			$this->db->order_by("largura");
			return $this->db->get("medidas")->result_array();	
		}		
		public function buscaPerfil() {
			$this->db->select('perfil');
			$this->db->distinct();
			$this->db->order_by("perfil");
			return $this->db->get("medidas")->result_array();
		}	
		public function buscaRaio() {
			$this->db->select('raio');
			$this->db->distinct();
			$this->db->order_by('raio');
			return $this->db->get("medidas")->result_array();
		}
		
		public function busca_medidas_selected($largura,$perfil,$raio){
			$this->db->select('codProd');
			$this->db->distinct();
			
			//TUDO
			if(($largura != 0)&($perfil != 0)&($raio != 0))
			{$this->db->where(array("largura" => $largura,"perfil" => $perfil, "raio" => $raio));}
			//LARGURA+PERFIL
			if(($largura != 0)&($perfil != 0)&($raio == 0))
			{$this->db->where(array("largura" => $largura,"perfil" => $perfil));}
			//LARGURA+RAIO
			if(($largura != 0)&($perfil == 0)&($raio != 0))
			{$this->db->where(array("largura" => $largura,"raio" => $raio));}
			//PERFIL+RAIO
			if(($largura == 0)&($perfil != 0)&($raio != 0))
			{$this->db->where(array("perfil" => $perfil,"raio" => $raio));}
			//LARGURA
			if(($largura != 0)&($perfil == 0)&($raio == 0))
			{$this->db->where(array("largura" => $largura));}
			//PERFIL
			if(($largura == 0)&($perfil !== 0)&($raio == 0))
			{$this->db->where(array("perfil" => $perfil));}
			//RAIO
			if(($largura == 0)&($perfil == 0)&($raio != 0))
			{$this->db->where(array("raio" => $raio));}
						
			return $this->db->get("medidas")->result_array();
		}
		
		//SELECTED FROM CATEGORIA
		public function busca_medida_categoria($id){
			$this->db->select('medida');
			$this->db->distinct();
			$this->db->where('id_categoria',$id);
			return $this->db->get("medidas2")->result_array();
		}
		
		//SELECTED FROM DESCRICAO
		public function busca_medidas_from_produtos($id){
			$this->db->where("codProd", $id);
			return $this->db->get("medidas2")->result_array();
		}
		
	}