<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($nome, $content = array()) {
        $this->view("header.php", $content);
        $this->view($nome, $content);
        $this->view("footer.php");
    }
    
    public function template_prod($nome, $content = array()) {
    	$this->view("header.php", $content);
    	$this->view("menu-cat.php", $content);
    	$this->view($nome, $content);
    	$this->view("footer.php");
    }

}