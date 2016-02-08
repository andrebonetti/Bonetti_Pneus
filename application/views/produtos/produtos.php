   
    <div class="boxes onlyPC">
    
    <?php foreach($medidas as $medida){?>
    	
		<h4><?= $medida['medida'] ?></h4>	    	
	    <?php $codProds_medida = busca_codProd_medida($atualCat='0', $medida['medida']) ?>
	    
	    <div class="boxes">
	    	<?php foreach ($codProds_medida as $codProd){
	    		
	    		$produto = busca_produtos_categoria($codProd['codProd']);?>
	    			
				<div class='boxgrid caption'>
					<img src=<?= base_url("img/produto/menu-produto/catalogo/".$produto['imagem']."")?> alt="Modelo Pneu Remoldado Recauchutado <?= $produto['nome'] ?>">
						<div class='cover boxcaption'>
							<h3><?=$produto['nome']?></h3><br>						
								<?= anchor("produtos/id/{$produto['id']}", "Descrição")?>
						</div>
				</div>
				
			<?php }?>						
		</div>	
			
	<?php } ?>
	
	</div>
      	
    	
    
<!-- MOBILE VERSION -->
    
    <div class="boxes-mobile">
	    <?php foreach($medidas as $medida){?>
	    	
			<h4><?= $medida['medida'] ?></h4>	    	
		    <?php $codProds_medida = busca_codProd_medida($atualCat='0', $medida['medida']) ?>
		    
		    <div class="boxes-mobile">
		    	<?php foreach ($codProds_medida as $codProd){
		    		
		    		$produto = busca_produtos_categoria($codProd['codProd']);?>
		    			
					<div class='boxgrid caption'>
						<img src=<?= base_url("img/produto/menu-produto/catalogo/".$produto['imagem']."")?> alt="Modelo Pneu Remoldado Recauchutado <?= $produto['nome'] ?>">
							<div class='cover boxcaption'>
								<h3><?=$produto['nome']?></h3><br>						
									<?= anchor("produtos/id/{$produto['id']}", "Descrição")?>
							</div>
					</div>
					
				<?php }?>						
			</div>	
				
		<?php } ?>
	</div>
    
    
</section>