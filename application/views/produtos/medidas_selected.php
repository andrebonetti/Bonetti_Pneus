<section class="content">

	<?= anchor(	"produtos/medidas", "Voltar", array('class' => 'class-2 btn btn-prod'))?>
	    			
	<h4>Pneus com as medidas selecionadas:</h4><br>
	
	<?php foreach($produtos as $produto) {?>
		<div class='boxgrid caption'>
				<img src=<?= base_url("img/produto/menu-produto/catalogo/".$produto['imagem']."")?> alt="Modelo Pneu Remoldado Recauchutado <?= $produto['nome'] ?>">
				<div class='cover boxcaption'>
					<h3><?=$produto['nome']?></h3><br>						
					<?= anchor("produtos/id/{$produto['id']}", "Descrição")?>
				</div>
		</div>
	<?php } ?>
	
	<!-- MOBILE VERSION -->
	
	<?php foreach($produtos as $produto) {?>
		<div class="boxes-mobile">
	    	<?= anchor(	"produtos/id/{$produto['id']}", 
	        			"<img src=".base_url("img/produto/menu-produto/catalogo/{$produto['imagem']}")." alt='Modelo Pneu Remoldado Recauchutado {$produto['nome']}' >
	        			<h2>{$produto['nome']}</h2>") ?>
		</div>
	<?php } ?>

</section>