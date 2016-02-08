<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
        <meta name="google-site-verification" content="WwXoQniQir8cbJ5EeX-kkNwCWbzQcqvrpLLUZ2p48NU" >		
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">    
		<meta name="author" content="Andr� Bonetti de Oliveira">
		<meta name="description" content="Pneus recauchutados,remoldados e a frio (11) 2527-4477">
		<meta name='keywords' content="bonetti,bonetti pneus,pneu,pneus,pneus recauchutados,recauchutagem,recauchutados,remoldados,pneus remoldados,pirelli,michellin,pneu agricola,agricola,pneu de passeio,pneu passeio,pneu de caminhonete,recauchutadora,parque do carmo,recuperadora,a frio,pneu de caminh�o,pneus de caminh�o,remoldagem">
            
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("img/fav_icon.png")?>">
        <title>Bonetti Pneus Remoldagem | <?=$atualPage ?>.</title>
                    
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/style_mobile.css")?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url("css/plugins.css")?>">
        
        <script type="text/javascript" src="<?= base_url("js/jquery.js")?>"></script>
        <script type="text/javascript" src="<?= base_url("js/bootstrap.js")?>"></script>
		<script type="text/javascript" src="<?= base_url("js/jquery.slides.min.js")?>"></script>
        <script type="text/javascript" src="<?= base_url("js/boxes.js")?>"></script>
        <script type="text/javascript" src="<?= base_url("js/mymodal.js")?>"></script>
        
        <?php include_once("analyticstracking.php") ?>
        
	</head>
	
    <body>
    	
    
    
    	<header>
        	<a href="index.php"><img src="<?= base_url("img/logo.png")?>" alt="logo bonetti pneus remoldagem"></a>
            <h4>Tel:(11) 2527.4477<br>(11) 2527.4464</h4> 
            <h4 class="mobile">Tel:(11) 2527-4477</h4>                       	    		
            
            <nav>
                <ul class="nav nav-justified">
                    <li class="<?= active_validation("Home")?>"><?= anchor("", "Home") ?></li>        
                    <li class="<?= active_validation("empresa")?>"><?= anchor("empresa", "Empresa")?></li>          
                    <li class="<?= active_validation("produtos")?>"><?= anchor("produtos/catalogo/pag/1", "Produtos")?></li>                  
                    <li class="<?= active_validation("localizacao")?>"><?= anchor("localizacao", "Localização")?></li>
                    <li class="<?= active_validation("contato")?>"><?= anchor("contato", "Contato")?></li>   
                </ul>
            </nav>
</header>