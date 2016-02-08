<?php
	class Contato extends CI_Controller{
		public function index(){
				
			$content = array(	"atualPage" 	=> "Contato | Fale conosco",
								"url_markup"	=> "http://validator.w3.org/check?uri=http%3A%2F%2Fbonettipneus.com.br%2Findex.php%2Fcontato");
			
			$this->load->template("contato/contato.php", $content);
		}
	
	public function email_send(){
			
		//CONTEUDO
		$assunto = $this->input->post('assunto');
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$cidade = $this->input->post('cidade');
		$estado = $this->input->post('estado');
		$telefone = $this->input->post('tel');
		$mensagem = $this->input->post('mensagem');
			
		$content_email = array(	"nome" => $nome ,
								"email" => $email ,
								"telefone" => $telefone,
								"assunto" => $assunto,
								"cidade" => $cidade,
								"estado" => $estado,
								"mensagem" => $mensagem);
								
		$conteudo = $this->load->view("contato/email_content.php", $content_email, TRUE);
			
		//CONFIGURA E-MAIL
                $config = Array(
			'protocol' 	=> 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'andrebonetti2@gmail.com',
			'smtp_pass' => 'flatron500G',
			'mailtype'  => 'html',
			'charset'   => 'utf-8');
			
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		//SET CONTEUDO
		$this->email->from( $email, $nome);
		$this->email->to('bonettipneus@uol.com.br');
			
		$this->email->subject("Site Bonetti - ".$assunto);
		$this->email->message($conteudo);

		//RESULTADO
		if($this->email->send()){	
			$msg = "E-mail enviado com sucesso !";				
			$content = array("atualPage" => "Contato",
							 "mensagem" =>	$msg);
			$this->load->template("contato/contato.php", $content);
			}
		else{
			echo "Erro ao enviar mensagem";
			echo $this->email->print_debugger();
			}
				
		}
	}