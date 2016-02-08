<?php
	class Empresa extends CI_Controller{
		public function index(){
			$content = array(	"atualPage" 	=> "Empresa | História, Missão, Visão e Valores da Bonetti Pneus",
								"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fempresa",);
			
			$this->load->template("empresa/sobre.php", $content);
		}
	}