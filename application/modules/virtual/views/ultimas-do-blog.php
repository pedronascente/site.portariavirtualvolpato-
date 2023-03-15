<section   class="espaco" >
	<div class="container">
		<hr class="_margin-bottom-40">
		<div class="row">
			<div class="col-md-12">
				<h2 class="_font_title hidden-xs hidden-sm text-center">ULTIMAS DO BLOG</h2>
				<h2 class="_font_title_h3  visible-xs visible-sm  _text-ce_justify">ULTIMAS DO BLOG</h2>
				<br>
			</div>
		</div>
		<div id="" class="row">
			<?php
			$posts = [
				[
					'img'=>'assets/img/blog/1.jpg',
					'url'=>'https://volpato.blog.br/portaria-virtual-2/','introducao',
					'titulo'=>'Quais são as vantagens de contratar uma portaria virtual?',
					'texto'=>'Nos dias de hoje, não há como não contar com o trabalho de uma portaria virtual ou presencial em um condomínio, seja ele residencial ou comercial.'
				],
				[
					'img'=>'assets/img/blog/2.jpg',
					'url'=>'https://volpato.blog.br/voce-sabe-quais-sao-os-principais-beneficios-da-portaria-virtual/',
					'titulo'=>'Você sabe quais são os principais benefícios da Portaria Virtual?',
					'texto'=>'O monitoramento a distância por meio de câmeras e microfones que gravam todas as movimentações em condomínios pode ser conhecido por três nomes diferentes, mas que significam a mesma coisa: portaria virtual, remota ou inteligente.',
				],
				[
					'img'=>'assets/img/blog/3.jpg',
					'url'=>'https://volpato.blog.br/os-principais-sinais-de-que-seu-condominio-precisa-de-portaria-virtual/',
					'titulo'=>'Os principais sinais de que seu condomínio precisa de Portaria Virtual',
					'texto'=>'Condomínio é um dos alvos preferidos de assaltantes. Por quê? É lá onde encontram a maior quantidade de bens materiais concentrados em um só lugar. 
					Então, para eles é muito mais cômodo invadir um condomínio e “fazer a limpa”, como eles falam. '
				],
			];

			foreach ($posts as $key => $value) {
				$imagem = $value['img'];
				$url = $value['url'];
				$titulo = $value['titulo'];
				$texto = $value['texto'];
				?>
				<div class="col-md-4 col-xs-12">
					<div class="card" >
						<div class="img">
							<img src="<?=$imagem; ?>"  title="<?=$titulo;?>" alt="<?=$titulo;?>" width="100%" >
						</div>
						<div class="card-block">
							<h4 class="card-title"><b><?=$titulo;?></b></h4>
							<p class="card-text"><?=mb_strimwidth($texto, 0, 200, "...");?></p>
							<p><a href="<?=$url;?>" class="btn btn-primary">Ler Mais</a></p>
						</div>
					</div>
				</div>
			<?php  } ?>
		</div>
		<hr class="_margin-bottom-100">
	</div>
</section>















