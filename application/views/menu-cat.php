<section class="content">

	<div class="menu6">
     	<ul>
			<?php foreach($produtos_categorias_id as $id ){?>     
				<li class="<?=active_categoria($id['id_categoria'])?>">
					<?= anchor("produtos/categoria/{$id['id_categoria']}", "
						<span ><img  class='link-menu' src=".base_url("img/produto/menu-categoria/opc-2/".$id['id_categoria']."-a.png")." alt='".muda_id_nome($id['id_categoria'])."'></span>
						<span ><img  class='hover-menu' src=". base_url("img/produto/menu-categoria/opc-2/".$id['id_categoria']."-hover.png" )." alt='".muda_id_nome($id['id_categoria'])."'></span>
					") ?>
				</li>
			<?php }?>      	
        </ul>
    </div>  
    
    <!--MOBILE VERSION-->
    
    <div class="selectCat">    
    	<?= form_open("produtos/categoria_mob") ?>	         
	        <select name="categoria" class="form-control">  
	        	<option value="0">Categorias</option>                
	        	<option value="1">Passeio</option>      
	       		<option value="2">Utilitário</option>  
	       		<option value="3">Caminhonete</option>  
	       		<option value="4">Trilha</option>  
	       		<option value="5">Carga</option>  
	       		<option value="6">Implemento</option>  
	       		<option value="7">Agrícola</option>   
	       		<option value="8">Industrial</option>     
	       	</select>     
	        <input class="btn btn-primary btn-mob" type="submit" value="Buscar">
        <?= form_close() ?>
    </div>
          
    <!--MOBILE VERSION FINISH-->    
    
    <ul class="breadcrumb">
        <li class="active">Todas os Produtos</li>
    </ul>   
    
    <div class="menu-prod"> 
    
    	<?= anchor(	"produtos/medidas", 
    			"Ver Todas as Medidas", 
    			array('class' => 'medidas btn btn-prod'))?>
    	
    	<?= anchor("produtos/download_catalogo","<img src='".base_url('img/produto/download_icon.png')."' alt='icone bonetti pneus remoldagem'><h5>Baixar Catalogo <br>Completo</h5>",array("class"=>'catalogo'));?>     	
    	
    </div>