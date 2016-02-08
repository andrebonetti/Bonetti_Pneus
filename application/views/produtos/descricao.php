<div class="pro-descr">

	<?php foreach($produtos as $produto){?>	   												
		<h3><?=$produto['nome']?></h3>
		<img src=<?= base_url("img/produto/menu-produto/descricao/".$produto['imagem']."")?> alt="Modelo Pneu Remoldado Recauchutado <?= $produto['nome'] ?>">
	<?php } ?>
			
	<table class="table">
		<thead>
			<tr>
				<th>Lista de medidas deste modelo:</th>
                <th></th>
			</tr>
		</thead>
		<tbody>         
			<?php foreach($medidas as $medida){?>
				<tr>
					<td>
						<?=$medida['medida'] ?>
					</td>
					<td class="b2">
						<?= anchor(	"produtos/busca-medida/".$medida['id_med']."","Veja mais") ?>
					</td>
				</tr>
			<?php } ?>       
		</tbody>
	</table>   
		
	<ul class="pager pager-mob">
		<?php foreach($produtos as $produto){	
			$before_id = paginacao_produto_descricao($produto['id'],$way="before",$tot_produtos=40);
			$next_id = paginacao_produto_descricao($produto['id'],$way="next",$tot_produtos=40);?>
			<li><?= anchor("produtos/id/{$before_id}", "Anterior")?></li>
			<li><?= anchor("produtos/id/{$next_id}", "Próximo")?></li>
		<?php } ?>		
	</ul>
		
		<a href="#dialog" name="modal"><img class="lupa_icon" src=<?= base_url("img/produto/menu-produto/lupa.png")?> alt="icone lupa descricao pneu remoldado" ></a>
		
			<!--modal-->
			<div id="boxes">
				<div id="dialog" class="window">
					<img src=<?= base_url("img/produto/menu-produto/descricao/".$produto['imagem']."")?> alt="pneu remoldado <?=$produto['nome']?>">	
					<a href="#" class="close">Fechar <img src=<?= base_url("img/produto/menu-produto/close_icon.png")?> alt="icone fechar descricao pneu remoldado"></a>    
				</div><!--window-->
				<div id="mask">
				</div>
			</div><!--boxes modal-->
		
    </div>
</section>