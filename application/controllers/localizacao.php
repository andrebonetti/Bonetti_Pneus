<?php
	class Localizacao extends CI_Controller{
		public function index(){
			$content = array(	"atualPage" => "Localização | Rua Itália Giusti 174 D",
								"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Flocalizacao");
			$this->load->template("localizacao/localizacao.php", $content);
		}
	}