<?php

class Helps extends CI_Controller{
	
	public function help_1(){
		$content = array(	"atualPage" 	=> "Contato",
							"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fduvidas%2Fleitura-do-pneu");
		
		$this->load->template("helps/help_1.php", $content);
	}
	
}