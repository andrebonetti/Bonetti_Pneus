<?php

	function busca_codProd_medida($id_categoria, $medida){
		$ci = get_instance();
		$ci->db->select('codProd');
		$ci->db->distinct();
		
		if($id_categoria != '0'){
		$ci->db->where('id_categoria',$id_categoria);}
		
		$ci->db->where('medida',$medida);
		$ci->db->where('codProd >','0');
		return $ci->db->get("medidas2")->result_array();
	}

	function busca_produtos_categoria($codProd){
		$ci = get_instance();
		$ci->db->where('id', $codProd );
		return $ci->db->get("produtos")->row_array();
	}
	
	function busca_produtos_catalgo($id){
		$ci = get_instance();
		$ci->db->where('id', $id );
		return $ci->db->get("produtos")->result_array();
	}
	
	function muda_id_nome($id){
		if($id == '1'){return "Pneus remoldados para Passeio";}
		if($id == '2'){return "Pneus remoldados para Utilitario";}
		if($id == '3'){return "Pneus remoldados para Caminhonete";}
		if($id == '4'){return "Pneus remoldados para Trilha";}
		if($id == '5'){return "Pneus remoldados para Carga";}
		if($id == '6'){return "Pneus de Implemento";}
		if($id == '7'){return "Pneus Agricola";}
		if($id == '8'){return "Pneus para Industrial";}
	}
	

