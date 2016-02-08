<?php

	function active_validation($page){
	$ci = get_instance();
	
	$atualPage = $ci->uri->segment(1);
	if($atualPage == FALSE){$atualPage = "Home"; }
	
	if($page == $atualPage){return "active";}				
	}
	
	function active_categoria($id){
		$ci = get_instance();
		$atualCat = $ci->uri->segment(3);
		if($atualCat == FALSE){$atualCat = ""; }
	
		if($id == $atualCat){return "active";}
	}
	
	function paginacao_produto_descricao($id,$way,$tot_prod){
		if($way == "before"){
			if(($id - 1) < 1){
				$id = $tot_prod;
			}
			else{
				$id = $id-1;
			}
		}
		if($way == "next"){
			if(($id + 1) > $tot_prod){
				$id = 1;
			}
			else{
				$id = $id+1;
			}
		}
		return $id;
	}

	function active_pag_produto($atual_page,$id){
		if($atual_page == $id){return "active";}
	}	
	
	function busca_medidas_limit($n, $limite){
		$ci = get_instance();
		$start = ($n*$limite)-$limite+1;
		$ci->db->where('id_med >', $start);
		$ci->db->select('medida, id_med');
		$ci->db->limit($limite);
		return $ci->db->get("medidas2")->result_array();
	}