   
    <div class="boxes onlyPC">
       
    <?php foreach($medidas as $medida){?>
    	
		<h4><?= $medida['medida'] ?></h4>	    	
	    <?php $codProds_medida = busca_codProd_medida($atualCat, $medida['medida']) ?>
	    
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
    
    <div class="boxes phone">
    <?php $teste_repeticao = '0'?> 
    <?php foreach($medidas as $medida){?>
    
    	<?php if(($teste_repeticao != $medida)or($teste_repeticao == '0')){ ?>
		
			<h2><?= $medida['medida'] ?></h2>
	    	
	    	<?php /*$codProds = busca_codProd_medida($medida) ?>
	    	
	    	<div class="boxes">
		    	<?php foreach($codProds as $codProd){ ?> 
		    	
		    		<?php $produtos = busca_produtos_categoria($id_categoria, $codProd['codProd']) ?>
					    <?php foreach($produtos as $produto) {?>
							<div class="boxes-mobile">
						    	<?= anchor(	"produtos/id/{$produto['id']}", 
						        			"<img src=".base_url("img/produto/menu-produto/catalogo/{$produto['imagem']}")." alt='Modelo Pneu Remoldado Recauchutado {$produto['nome']}' >
						        			<h2>{$produto['nome']}</h2>") ?>
							</div>
						<?php } ?>
				<?php } ?>
			</div>	
			
			<?php $teste_repeticao = $medida?>*/?>
		<?php } ?>
	
    <?php } ?>	
    </div>
    
</section>