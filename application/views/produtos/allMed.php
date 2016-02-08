
<?php 	
	for($n=1; $n<$num_tabelas+1 ;$n++){?>
	<table class="table-allmed tab-desk">
		<tbody>
			<?php $medidas = busca_medidas_limit($n, $num_medidas); 
			foreach($medidas as $medida){?>
				<tr>
					<td>
					<?= anchor("produtos/busca-medida/".$medida['id_med']."","".$medida['medida']."")  ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } ?> 
		
<!-- MOBILE VERSION -->
	
	<table class="tab-mob">
		<tbody>
			<?php foreach($medidas as $medida){?>
				<tr>
					<td>
						<?= anchor("produtos/busca-medida/".$medida['id_med']."","".$medida['medida']."")  ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>  
        
</section>