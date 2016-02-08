<section class="slide-show">
	<div id="slides">
        <img src=<?= base_url("img/index/slides/Untitled-1.jpg")?> alt="banner bonetti pneus remoldagem">
        <img src=<?= base_url("img/index/slides/Untitled-2.jpg")?> alt="banner bonetti pneus remoldagem">       
	</div>
</section>

<section class="rows">
	<div class="row">
    	<div class="col-md-4 portfolio-item row-1">
        	<div class="row-1-1">
            	<h2>Encontre seu Pneu Por</h2>     
				<section class="ac-container">
				
					<!--MENU MED-->
					<input id="ac-1" name="accordion-1" type="radio" checked />
					<label for="ac-1">Medida</label>                    
					<article class="ac-small">
						<?= form_open('produtos/busca-por-medida')?>
																		
							<SELECT class="form-control menu-1" name='largura'>
								<OPTION selected VALUE='0'>Largura</OPTION>
									<?php foreach($larguras as $largura){?>
								<OPTION VALUE='<?=$largura['largura']?>'><?=$largura['largura']?></OPTION>
									<?php } ?>
							</SELECT>
							<SELECT class="form-control menu-1" name='perfil'>
								<OPTION selected VALUE='0'>Perfil</OPTION>
									<?php foreach($perfis as $perfil){?>
								<OPTION VALUE='<?=$perfil['perfil']?>'><?=$perfil['perfil']?></OPTION>
									<?php } ?>
							</SELECT>							
							<SELECT class="form-control menu-1" name='raio'>
								<OPTION selected VALUE='0'>Raio</OPTION>
									<?php foreach($raios as $raio){?>
								<OPTION VALUE='<?=$raio['raio']?>'><?=$raio['raio']?></OPTION>
									<?php } ?>  
							</SELECT>
							
							<input type="submit" class="btn btn-primary" value="Procurar">	 
						<?= form_close()?>
						<?= anchor(	"produtos/medidas", 
    								"Todas as Medidas",array ("class" => "btn btn-default"))?>                       
					</article>
							
					<!--MENU CAT--> 
					<div>	
						<input id="ac-2" name="accordion-1" type="radio" />
						<label for="ac-2">Veículo</label>
						<article class="ac-medium">
							<div id="menu5-2">  
								<ul >
									<?php foreach($produtos_categorias_id as $id ){?>
										<li>
											<?= anchor("produtos/categoria/{$id['id_categoria']}", "
												<span ><img  class='link' src='".base_url("img/produto/menu-categoria/opc-1/".$id['id_categoria']."-a.png")."' alt='".muda_id_nome($id['id_categoria'])."'></span>
												<span ><img  class='hover' src='". base_url("img/produto/menu-categoria/opc-1/".$id['id_categoria']."-hover.png")."' alt='".muda_id_nome($id['id_categoria'])."'></span>
											") ?>
										</li>
									<?php } ?>
								</ul>
							</div><!--menu5-->
						</article>
					</div>
							
					<!--MENU MODELO-->                   
					<div> 
						<input id="ac-3" name="accordion-1" type="radio" />
						<label for="ac-3">Desenho</label>
						<article class="ac-large">
							<?= form_open('produtos/busca-por-modelo')?>
                            	<h4>Escolha o modelo do pneu: </h4>
								<select name="id" class="form-control" multiple="multiple">
									<?php foreach($produtos as $produto){?>
										<OPTION VALUE='<?=$produto['id']?>'><?=$produto['nome']?></OPTION>
									<?php } ?>
								</select>
								<input class="btn btn-primary" type="submit" value="Procurar">
								<?= anchor(	"produtos/catalogo", 
											"Todas as Medidas",array ("class" => "btn btn-default"))?>
							<?= form_close()?>
						</article>
					</div>		
				</section>
                </div>
            </div>
                
            <!--ROW 2-->
            <div class="col-md-4 portfolio-item row-2">
                <?= anchor("produtos/categoria/6","
                    <img class='img-responsive' src=".base_url("img/index/row_2.jpg")." alt='Pneus Remoldados Implemento'>
                    <h3>Conheça nossos pneus de implemento</h3>")?>
            </div>
                
            <!--ROW 3-->
            <div class="col-md-4 portfolio-item row-3">
                <img class="img-responsive" src=<?= base_url("img/index/help_icon.png")?> alt="duvidas sobre pneus recauchutados remoldados">
                <h2>Dicas</h2>
                    <ul class="nav nav-list">
                        <li><?= anchor("duvidas/leitura-do-pneu","Como saber a medida do seu pneu")?></li>
                        <li><a href="#"> Dicas de Manutenção <b>(em breve)</b></a></li>
    				</ul>
            </div>
    </div><!--roow-->
</section><!--rows-->        
