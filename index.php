<?php 
	$SSL = $_SERVER['REQUEST_SCHEME']."://";
	$NAN = $_SERVER['SERVER_NAME'];
	$URI = $_SERVER['REQUEST_URI'];
	$URL = $SSL.$NAN."$URI";
	define("URL", $URL);
	define("ROOT", $NAN);
	include "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="canonical" href="<?=URL?>">
	<title><?=$dados['titulo']?></title>
	<meta property="fb:app_id" content="">
	<meta itemprop="url" content="<?=URL?>">
	<meta itemprop="image" content="<?=URL?>logo.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=URL?>">
	<meta property="og:title" content="<?=$dados['titulo']?>">
	<meta property="og:description" content="<?=$dados['descricao']?>">
	<meta property="og:image" content="<?=URL?>img/fav.png">
	<meta property="og:site_name" content="<?=$dados['titulo']?>">
	<meta property="og:locale" content="pt_BR">	
	<meta name="description" content="<?=$dados['descricao']?>">
	<meta name="author" content="Randiclecio Moura">
	<meta name="robots" content="index, follow">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.">
	<link rel="icon" href="<?=URL?>img/fav.png">
	<meta name="robots" content="max-image-preview:large">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" async="" defer="">
	<link rel="stylesheet" href="<?=URL?>lib/main.css" async="" defer="">
	<link rel="stylesheet" href="<?=URL?>lib/out.css" async="" defer="">
	<link rel="stylesheet" href="<?=URL?>lib/site.css" async="" defer="">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,-25">
	<link rel="stylesheet" id="elementor-frontend-css" href="<?=URL?>lib/frontend-lite.min.css" media="all">
	<link rel="stylesheet" id="elementor-post-7-css" href="<?=URL?>lib/post-7.css" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="<?=URL?>lib/fonts.css" media="all">
	<link rel="stylesheet" id="elementor-global-css" href="<?=URL?>lib/global.css" media="all">
	<link rel="stylesheet" id="elementor-pro-css" href="<?=URL?>lib/frontend.min.css" media="all">
</head>
<body data-rsssl="1" class="home page-template page-template-elementor_canvas page page-id-7 wp-embed-responsive elementor-default elementor-template-canvas elementor-kit-6 elementor-page elementor-page-7">
	<div id="modal" class="uk-flex-top uk-modal" uk-modal="bg-close:false">
		<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
		</div>
	</div>
	<div data-elementor-type="wp-page" data-elementor-id="7" class="backredirect elementor elementor-7">
		<section id="ofertas" class="elementor-section elementor-top-section elementor-element elementor-element-42ca4e9b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42ca4e9b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70953fd3" data-id="70953fd3" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-51d0d644 elementor-widget elementor-widget-spacer" data-id="51d0d644" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-3a42ff58 elementor-widget elementor-widget-heading" data-id="3a42ff58" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">VOCÊ ACABOU DE GANHAR</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-5c814383 elementor-widget elementor-widget-heading" data-id="5c814383" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">1 FRASCO DE BRINDE</h2>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-e95b21c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e95b21c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[1]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138170.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[2]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138171.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[3]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138172.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[4]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138173.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-1eed647 elementor-widget elementor-widget-spacer" data-id="1eed647" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="link">
			<div class="midle">
				<a href="#ofertas" data-id="#" class="" role="button">
					<span class="elementor-button-text">QUERO MEU GOTA HIMALAIA</span>
				</a>
			</div>
		</div>
		<div id="prova">
			<div class="midle">
				<h2>PROVAS SOCIAIS VERDADEIRAS!</h2>
				<h3>CLIENTES QUE USARAM O NOSSO PRODUTO E ESTÃO DURANDO HORAS E HORAS NA CAMA COM SUAS PARCEIRAS.</h3>
				<div class="cards">
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310554.webp" class="" alt="prova 1" data-id="668" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310553.webp" class="" alt="prova 2" data-id="667" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310552.webp" class="" alt="depoimento 3" data-id="666" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310551.webp" class="" alt="depoimento 4" data-id="665" loading="lazy">
					</div>
				</div>
			</div>
		</div>
		<div id="promessa">
			<div class="midle">
				<h2>NOVA FÓRMULA SUB LINGUAL INDICADA POR ESPECIALISTAS!</h2>
				<h3>ACABE COM A EJACULAÇÃO PRECOCE COM APENAS 20 GOTAS DIÁRIAS!</h3>
				<div class="promessa">
					<div class="texto">
						<ul>
							<li>ACABE COM A EJACULAÇÃO PRECOCE</li>
							<li>ACABE COM A DISFUNÇÃO ERÉTIL</li>
							<li>MELHORA O APETITE SEXUALA</li>
							<li>UMENTE SUA LÍBIDO<br></li>
						</ul>
					</div>
					<div class="imagem"> <img width="500" height="500" src="<?=URL?>img/b2207040314020.webp" class="" alt="defout.png" data-id="669" loading="lazy"></div>
					<div class="texto">
						ENFIM, TRATAR ESSES SINTOMAS NUNCA FOI TÃO FÁCIL</div>
				</div>
			</div>
			<h4>ENFIM, TRATAR ESSES SINTOMAS NUNCA FOI TÃO FÁCIL</h4>
		</div>
		<div class="link">
			<div class="midle">
				<a href="#ofertas" data-id="#" class="" role="button">
					<span class="elementor-button-text">EXPERIMENTE JÁ</span>
				</a>
			</div>
		</div>
		<div id="prova" class="prova2">
			<div class="midle">
				<h2>PROVAS SOCIAIS VERDADEIRAS!</h2>
				<h3>CLIENTES QUE USARAM O NOSSO PRODUTO E ESTÃO DURANDO HORAS E HORAS NA CAMA COM SUAS PARCEIRAS.</h3>
				<h4>Mais de 61.710 mil homens estão usando o <b style="color: rgb(230, 0, 0);">GOTA HIMALAIA</b> no Brasil. Nos orgulhamos das nossas taxas de 94,7% de satisfação de nossos clientes.</h4>
				<div class="cards">
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310554.webp" class="" alt="prova 1" data-id="668" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310553.webp" class="" alt="prova 2" data-id="667" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310552.webp" class="" alt="depoimento 3" data-id="666" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310551.webp" class="" alt="depoimento 4" data-id="665" loading="lazy">
					</div>
				</div>
			</div>
		</div>
		<div id="usar">
			<div class="midle">
				<p>APRENDA A USAR</p>
				<figure>
						<img width="500" height="500" src="<?=URL?>img/b2207050037510.webp" class="" alt="usar" data-id="670" loading="lazy">
				</figure>
				<h4>A aplicação sublingual, oferece uma absorção rápida e eficaz por meio da glândula, vasos que temos sob a língua, acessam diretamente a corrente sanguínea absorvendo o conteúdo rapidamente e alcançando efeitos revolucionários em poucos minutos. Essa é eficaz, de tratamento da absorção, até a sua capacidade mais eficaz de 90% da composição do organismo com maior biodisponibilidade.</h4>
			</div>
		</div>
		<section id="ofertas" class="elementor-section elementor-top-section elementor-element elementor-element-42ca4e9b elementor-section-boxed elementor-section-height-default elementor-section-height-default">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70953fd3" data-id="70953fd3" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-51d0d644 elementor-widget elementor-widget-spacer" data-id="51d0d644" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-3a42ff58 elementor-widget elementor-widget-heading" data-id="3a42ff58" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">VOCÊ ACABOU DE GANHAR</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-5c814383 elementor-widget elementor-widget-heading" data-id="5c814383" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">1 FRASCO DE BRINDE</h2>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-e95b21c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e95b21c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[1]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138170.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[2]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138171.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[3]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138172.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[4]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138173.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-1eed647 elementor-widget elementor-widget-spacer" data-id="1eed647" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="prova3" data-section-id="pf-9a16" data-pf-type="Section" class="sc-igXgud lhtyiH pf-142_">
			<div style="--cw:1170px" class="midle sc-cjrPHo eOcrMz">
				<div class="sc-clIzBv iQyrr pf-143_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
					<div class="pf-c" style="--c-xs:12;--c-md:12;--c-lg:12">
						<h3>PROVAS SOCIAIS VERDADEIRAS!</h3>
						<h4>CLIENTES QUE COMPRARAM O GOTA HIMALAIA E CONSEGUIRAM RESULTADOS POSITIVOS.</h4>
					</div>
				</div>
				<div class="sc-clIzBv iQyrr pf-148_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
					<div class="pf-c" style="--c-xs:12;--c-md:12;--c-lg:12">
						<div data-pf-type="Column" class="sc-gXRojI kCnmwO pf-149_">
							<div data-pf-type="Custom.HTML" class="sc-jvvksu jfsnM pf-150_">
								<style>
									@font-face {
										font-family: "Font Awesome 5 Free";
										font-style: normal;
										font-weight: 400;
										font-display: auto;
										src: url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.eot);
										src: url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.woff2) format("woff2"), url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.woff) format("woff"), url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.ttf) format("truetype"), url(//bumbumdosdreams.site/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.svg#fontawesome) format("svg")
									}
									.far {
										font-family: "Font Awesome 5 Free";
										font-weight: 400
									}
								</style>
								<style type="text/css" id="wp-custom-css">
									#comentarios_face {
										font-family: Arial;
										background-color: #F6F7F9;
										font-size: 14px;
										padding: 20px;
									}
									.titulo_comentario {
										font-weight: bold;
										border-bottom: 1px solid #E9EBEE;
										display: block;
										padding-bottom: 6px;
									}
									.perfil {
										display: block;
										padding-top: 10px;
										padding-bottom: 10px;
										line-height: 20px;
									}
									.perfil .nome {
										color: #365899;
										font-weight: bold;
									}
									.nome img {
										float: left;
										padding-right: 10px;
									}
									.perfil img {
										width: 60px !important;
										height: 50px;
									}
									.perfil p {
										margin: 0;
										margin-left: 60px;
										margin-bottom: 0px;
									}
									.infos {
										font-size: 11px;
										color: #90949c;
									}
									.perfil2 {
										padding-left: 9px;
										border-left: 1px solid #E9EBEE;
										margin-left: 50px;
										padding-bottom: 0;
									}
								</style>
							</div>
							<div data-pf-type="Custom.HTML" class="sc-jvvksu jfsnM pf-151_">
								<div class="elementor-widget-container">
									<div id="comentarios_face"> <span class="titulo_comentario">16 comentários</span>
										<!-- NÃO MEXA AQUI EM CIMA-->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/1.jpg">
												</noscript>
												<img class=" ls-is-cached lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/1.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/1.jpg">Luciano Alves </span>
											<p>Cara, muito obrigado, achava que isso n ia funcionar pq já tinha feito de td pra melhorar minha ereção, mas msmo assim quis tentar e olha agora parece que tenho 20 anos de novo kkkk</p> <span class="infos">Responder · Curtir · Seguir · 3 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/3.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/3.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/3.jpg">Enrico Martins </span>
											<p>Já tinha tentado até usar uns produtos de testosterona, mas não funcionou. Usando isso pela segunda vez, e não tenho mais problemas em deixar duro. E o melhor é que nem estou gastando com pílulas kkkkkk muito bom!!! Obrigado 😀</p> <span class="infos">Responder · Curtir · Seguir · 9 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/5.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/5.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/5.jpg">Juliano Alves </span>
											<p>Roberto,eu já tinha feito tudo que podia e não conseguia vencer meu medo de falhar na hora H, agora consigo deixar duro sempre que quiser! Muito feliz! Vou seguir os passos e nunca mais vou me preocupar com isso 😀</p> <span class="infos">Responder · Curtir · Seguir · 12 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/7.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/7.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/7.jpg">Cristiano Barbosa </span>
											<p>Já fazia dois anos que eu sofria com problemas de ereção... mas agora tudo passou não tenho mais medo de sair com mulheres 🙂 brigado isso é perfeito!</p> <span class="infos">Responder · Curtir · Seguir · 17 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg">Carlos Alves </span>
											<p>Sofro de disfunção erétil já faz 6 meses será que funciona?</p> <span class="infos">Responder · Curtir · Seguir · 18 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/9.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/9.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/9.jpg">Daniel Barbosa </span>
											<p>Carlos eu já estava tentando resolver meu problema com ereção fazia quase dois anos e tava pensano em desistir. Isso foi minha última tentativa que deu certo demais. Pode testar vc vai ver como funciona.</p> <span class="infos">Responder · Curtir · Seguir · 15 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/10.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/10.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/10.jpg">Cesar Rodrigues </span>
											<p>Carlos eu n tinha disfunção erétil, mas estava broxando direto, e isso me fazia ficar inseguro. depois que comecei a usar isso nunca mais tive problemas de ereção faz 2 anos.</p> <span class="infos">Responder · Curtir · Seguir · 11 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/8.jpg">Carlos Alves </span>
											<p>Valeu galera, vou tentar 🙂</p> <span class="infos">Responder · Curtir · Seguir · 7 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/12.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/12.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/12.jpg">Michel Soares </span>
											<p>Gente eu achava que era mentira, mas tudo dando certo…. eu me sentia muito pra baixo, sempre com medo de levar uma mulher pra cama. Cheguei ao ponto de ir num médico da minha cidade... Por anos eu sofri com problemas de ereção, não conseguia chamar mulheres pra sair por causa disso... Com isso, consegui o impossível! Eu não to acreditando.</p> <span class="infos">Responder · Curtir · Seguir · 23 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/15.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/15.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/15.jpg">Augusto </span>
											<p>Gente eu tenho medo de gastar dinheiro e não dar certo 🙁</p> <span class="infos">Responder · Curtir · Seguir · 33 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/16.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/16.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/16.jpg">Giovanne </span>
											<p>Eu pensava a mesma coisa, mas compraria 10 vezes depois que vi que funciona 🙂 Bora ser feliz mano! A gente merece depois que luta tanto🙂</p> <span class="infos">Responder · Curtir · Seguir · 26 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/17.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/17.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/17.jpg">Bruno Gandra </span>
											<p>Funciona sim cara! Pode acreditar. Eu era muito inseguro por causa disso... Agora sou muito mais confiante.</p> <span class="infos">Responder · Curtir · Seguir · 22 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO -->
										<div class="perfil"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg">Lucas Borges </span>
											<p>Comprei e está funcionando!!! Ta ficando duro fácil fácil 😉 vou usar sempre 😀</p> <span class="infos">Responder · Curtir · Seguir · 43 min </span>
										</div>
										<!-- FIM DO COMENTARIO -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/22.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/22.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/22.jpg">Theodoro Sampaio </span>
											<p>Funciona msmo?</p> <span class="infos">Responder · Curtir · Seguir · 32 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- INICIO DO COMENTARIO || ESSE COMENTÁRIO EH UMA RESPOSTA -->
										<div class="perfil perfil2"> <span class="nome">
												<noscript>
													<img src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg">
												</noscript>
												<img class=" lazyloaded" src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg" data-src="https://gotadohimalaia.com/g1/img/comentarios/21.jpg">Lucas Borges </span>
											<p>Eu fiz td q ele ensina desde que comprei e foi direitinho que nem ele fala no vídeo. Ganhei até alguns cm parece.</p> <span class="infos">Responder · Curtir · Seguir · 27 min </span>
										</div>
										<!-- FIM DO COMENTARIO RESPOSTA -->
										<!-- NÃO MEXA AQUI EM BAIXO -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sc-clIzBv iQyrr pf-152_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
					<div class="pf-c" style="--c-xs:12;--c-md:12;--c-lg:12">
						<div data-pf-type="Column" class="sc-gXRojI kCnmwO pf-153_"><a data-to-section="pf-7496" data-offset="{&quot;all&quot;:50,&quot;laptop&quot;:50,&quot;tablet&quot;:50,&quot;mobile&quot;:50}" href="#ofertas" data-pf-type="Button" class="sc-djWRfJ dtXvbo pf-154_"><i class="sc-jlsrNB eRpuTj pf-155_ pfa pfa-angle-double-right" data-pf-type="Icon"></i><span data-pf-type="Text" class="sc-BHvUt fJlZte pf-156_">ADQUIRA GOTA HIMALAIA</span></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="link">
			<div class="midle">
				<a href="#ofertas" data-id="#" class="" role="button">
					<span class="elementor-button-text">ADQUIRA GOTA HIMALAIA</span>
				</a>
			</div>
		</div>
		<div id="duvida" data-section-id="pf-907d" data-pf-type="Section" class="sc-igXgud lhtyiH pf-157_">
			<div class="midle">
				<h2>EM DÚVIDA SOBRE COMPRAR PELA INTERNET?</h2>
				<h3>Fique tranquilo, compre o GOTA HIMALAIA, é fácil, prático e totalmente seguro .</h3>
				<ul class="duv">
					<li><img width="500" height="500" src="<?=URL?>img/b2207050043010.webp" class="" alt="Entrega Rápida e no Prazo" data-id="671" loading="lazy">
						<p>Entrega Rápida e no Prazo</p>
					</li>
					<li> <img width="500" height="500" src="<?=URL?>img/b2207050043013.webp" class="" alt="Dados Pessoais não são Compartilhados" data-id="674" loading="lazy">
						<p>Dados Pessoais não são Compartilhados</p>
					</li>
					<li> <img width="500" height="500" src="<?=URL?>img/b2207050043011.webp" class="" alt="Dados Financeiros não são Compartilhados" data-id="672" loading="lazy">
						<p>Dados Financeiros não são Compartilhados</p>
					</li>
					<li> <img width="500" height="500" src="<?=URL?>img/b2207050043012.webp" class="" alt="100% Confiável" data-id="673" loading="lazy">
						<p>100% Confiável</p>
					</li>
				</ul>
			</div>
		</div>
		<div id="prova" class="prova_4">
			<div class="midle">
				<h2>PROVAS SOCIAIS VERDADEIRAS!</h2>
				<h3>CLIENTES QUE COMPRARAM O <b style="color: rgb(255, 255, 255);">GOTA HIMALAIA</b> E CONSEGUIRAM RESULTADOS POSITIVOS.</h3>
				<h4>Mais de 61.710 mil homens estão usando o <b style="color: rgb(230, 0, 0);">GOTA HIMALAIA</b> no Brasil. Nos orgulhamos das nossas taxas de 94,7% de satisfação de nossos clientes.</h4>
				<div class="cards">
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310554.webp" class="" alt="prova 1" data-id="668" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310553.webp" class="" alt="prova 2" data-id="667" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310552.webp" class="" alt="depoimento 3" data-id="666" loading="lazy">
					</div>
					<div class="card">
						<img width="500" height="500" src="<?=URL?>img/b2207040310551.webp" class="" alt="depoimento 4" data-id="665" loading="lazy">
					</div>
				</div>
			</div>
		</div>
		<section id="ofertas" class="elementor-section elementor-top-section elementor-element elementor-element-42ca4e9b elementor-section-boxed elementor-section-height-default elementor-section-height-default">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70953fd3" data-id="70953fd3" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-51d0d644 elementor-widget elementor-widget-spacer" data-id="51d0d644" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-3a42ff58 elementor-widget elementor-widget-heading" data-id="3a42ff58" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">VOCÊ ACABOU DE GANHAR</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-5c814383 elementor-widget elementor-widget-heading" data-id="5c814383" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">1 FRASCO DE BRINDE</h2>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-e95b21c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e95b21c" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[1]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138170.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[2]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138171.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[3]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138172.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4457c557" data-id="4457c557" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-620652e0 elementor-widget elementor-widget-image" data-id="620652e0" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<a href="<?=$produtos[4]?>">
													<img width="316" height="685" src="<?=URL?>img/b2206301138173.webp" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 316px) 100vw, 316px"> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-1eed647 elementor-widget elementor-widget-spacer" data-id="1eed647" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="duvidas" class="elementor-section elementor-top-section elementor-element elementor-element-44f86b58 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="44f86b58" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-30d6df32" data-id="30d6df32" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3ef4e227 elementor-widget elementor-widget-spacer" data-id="3ef4e227" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-3b6125d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3b6125d4" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-400b7d13" data-id="400b7d13" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-2be5d920 elementor-widget elementor-widget-toggle" data-id="2be5d920" data-element_type="widget" data-widget_type="toggle.default">
											<div class="elementor-widget-container">
												<style>
													/*! elementor - v3.6.6 - 08-06-2022 */
													.elementor-toggle {
														text-align: left
													}
													.elementor-toggle .elementor-tab-title {
														font-weight: 700;
														line-height: 1;
														margin: 0;
														padding: 15px;
														border-bottom: 1px solid #d4d4d4;
														cursor: pointer;
														outline: none
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon {
														display: inline-block;
														width: 1em
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon svg {
														-webkit-margin-start: -5px;
														margin-inline-start: -5px;
														width: 1em;
														height: 1em
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-right {
														float: right;
														text-align: right
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-left {
														float: left;
														text-align: left
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-closed {
														display: block
													}
													.elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-opened {
														display: none
													}
													.elementor-toggle .elementor-tab-title.elementor-active {
														border-bottom: none
													}
													.elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-closed {
														display: none
													}
													.elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-opened {
														display: block
													}
													.elementor-toggle .elementor-tab-content {
														padding: 15px;
														border-bottom: 1px solid #d4d4d4;
														display: none
													}
													@media (max-width:767px) {
														.elementor-toggle .elementor-tab-title {
															padding: 12px
														}
														.elementor-toggle .elementor-tab-content {
															padding: 12px 10px
														}
													}
												</style>
												<div class="elementor-toggle" role="tablist">
													<div class="elementor-toggle-item tablist">
														<div id="elementor-tab-title-7361" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-7361" aria-expanded="false">
															<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
																<i uk-icon="code" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"></polyline>
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"></polyline>
																	</svg></i>
															</span>
															<a href="#" class="elementor-toggle-title">O Gota do Himalaia é aprovado pela Anvisa?</a>
														</div>
														<div id="elementor-tab-content-7361" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-7361">
															<p><b>O Gota do Himalaia é isento de aprovação da ANVISA, porém ela é notificada e sua fórmula é autorizada para produção do seu produto.</b></p>
														</div>
													</div>
													<div class="elementor-toggle-item tablist">
														<div id="elementor-tab-title-7361" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-7361" aria-expanded="false">
															<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
																<i uk-icon="code" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"></polyline>
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"></polyline>
																	</svg></i>
															</span>
															<a href="#" class="elementor-toggle-title">Tem contraindicação ou algum efeito colateral?</a>
														</div>
														<div id="elementor-tab-content-7361" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-7361">
															<p><b>Não tem nenhuma contra indicação e nenhum efeito colateral! Por ser feito com nutrientes naturais, qualquer um pode tomar!</b></p>
														</div>
													</div>
													<div class="elementor-toggle-item tablist">
														<div id="elementor-tab-title-7361" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-7361" aria-expanded="false">
															<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
																<i uk-icon="code" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"></polyline>
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"></polyline>
																	</svg></i>
															</span>
															<a href="#" class="elementor-toggle-title">Qual o prazo de entrega do Gota do Himalaia?</a>
														</div>
														<div id="elementor-tab-content-7361" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-7361">
															<p><b>O prazo médio de entrega do Gota do Himalaia é de 7 dias úteis para o Sul e Sudeste. Para as demais regiões do país, o prazo de entrega é de 9 dias úteis, normalmente entregue antes. O prazo começa após a confirmação do seu pagamento pela administradora do seu cartão de crédito ou após a confirmação do pagamento do boleto.</b></p>
														</div>
													</div>
													<div class="elementor-toggle-item tablist">
														<div id="elementor-tab-title-7361" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-7361" aria-expanded="false">
															<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
																<i uk-icon="code" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"></polyline>
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"></polyline>
																	</svg></i>
															</span>
															<a href="#" class="elementor-toggle-title">Como usar Gota do Himalaia?</a>
														</div>
														<div id="elementor-tab-content-7361" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-7361">
															<p><b>O Gota do Himalaia deve ser consumido com 20 gotas diárias. </b></p>
														</div>
													</div>
													<div class="elementor-toggle-item tablist">
														<div id="elementor-tab-title-7361" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-7361" aria-expanded="false">
															<span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
																<i uk-icon="code" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"></polyline>
																		<polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"></polyline>
																	</svg></i>
															</span>
															<a href="#" class="elementor-toggle-title">A embalagem é discreta?</a>
														</div>
														<div id="elementor-tab-content-7361" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-7361">
															<p><b>Sim, nosso produto é enviado em uma embalagem totalmente discreta e confidencial, ninguém saberá o que tem no pacote.</b></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-2bb9b2a1 elementor-widget elementor-widget-spacer" data-id="2bb9b2a1" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-70386876 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="70386876" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7dcfde01" data-id="7dcfde01" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-33f0e023 elementor-widget elementor-widget-spacer" data-id="33f0e023" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-5d632453 elementor-widget elementor-widget-heading" data-id="5d632453" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">FICOU COM ALGUMA DÚVIDA?</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-6c4833f1 elementor-widget elementor-widget-heading" data-id="6c4833f1" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">Fale agora mesmo com um de nossos atendentes no WhatsApp!</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-69dd5cd7 elementor-widget elementor-widget-image" data-id="69dd5cd7" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container whats">
								<a href="https://wa.me/553732614888?text=Ol%C3%A1%2C+quero+saber+mais+sobre+o+Gota+do+Himalaia">
									<img width="512" height="126" src="<?=URL?>img/b2206301523590.webp" class="attachment-large size-large" alt="Nosso Whatsapp" data-id="661" loading="lazy" sizes="(max-width: 512px) 100vw, 512px"> </a>
							</div>
						</div>
						<div class="elementor-element elementor-element-611327e7 elementor-widget elementor-widget-spacer" data-id="611327e7" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-56740e9b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56740e9b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-496732cf" data-id="496732cf" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-6305b83 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6305b83" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6edb291c" data-id="6edb291c" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-62649bb2 elementor-widget elementor-widget-heading" data-id="62649bb2" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Formas de Pagamento</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-55164a91 elementor-widget elementor-widget-image" data-id="55164a91" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img width="140" height="43" src="<?=URL?>img/b2206301546041.webp" class="attachment-large size-large" alt="formas de pagamento" data-id="663" loading="lazy">
											</div>
										</div>
										<div class="elementor-element elementor-element-2087effe elementor-widget elementor-widget-heading" data-id="2087effe" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Métodos de entrega</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-79a7fc7 elementor-widget elementor-widget-image" data-id="79a7fc7" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img width="140" height="43" src="<?=URL?>img/b2206301546040.webp" class="attachment-large size-large" alt="formas de envio" data-id="662" loading="lazy">
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8387761" data-id="8387761" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7eb6821e elementor-widget elementor-widget-heading" data-id="7eb6821e" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Mais Informações</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-79f946f0 elementor-widget elementor-widget-heading" data-id="79f946f0" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Aviso Legal</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-210d6513 elementor-widget elementor-widget-heading" data-id="210d6513" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Política de Privacidade</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-1849ba3a elementor-widget elementor-widget-heading" data-id="1849ba3a" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Termos e Condições</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-828906f elementor-widget elementor-widget-heading" data-id="828906f" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">
													<a href="https://pedidozz.com">Rastrear Pedido</a>
												</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-557d5b08" data-id="557d5b08" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-24898e1b elementor-widget elementor-widget-heading" data-id="24898e1b" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Central de Atendimento</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-64b35816 elementor-widget elementor-widget-heading" data-id="64b35816" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">contato@gotahimalaia.com</h2>
												<br>
												<h2 class="elementor-heading-title elementor-size-default">(37) 9 9999-9999</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-17d9de98 elementor-widget elementor-widget-spacer" data-id="17d9de98" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-1dc5b003 elementor-widget elementor-widget-heading" data-id="1dc5b003" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">2022 ©Copyright © 2022 Gota do Himalaia. Todos os direitos reservados. Todo o conteúdo do site, todas as fotos, imagens, logotipos, marcas, layout, aqui veiculados são de propriedade exclusiva do Gota do Himalaia.
									É vedada qualquer reprodução, total ou parcial, de qualquer elemento de identidade, sem expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei. Informamos que Gota do Himalaia é um tratamento. Seu resultado pode variar de pessoa para pessoa.
									Os preços dos produtos estão sujeitos a alteração sem aviso prévio. "Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook. Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site."</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-6da0f6a4 elementor-widget elementor-widget-spacer" data-id="6da0f6a4" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-2220c56f elementor-widget elementor-widget-heading" data-id="2220c56f" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default"><strong><span style="color: rgb(255, 150, 0);">ATENÇÃO:</span>&nbsp;DEVIDO A ALTA DEMANDA, HÁ UMA QUANTIDADE LIMITADA DE GOTA DO HIMALAIA EM ESTOQUE&nbsp;<span style="color: rgb(255, 150, 0);">E PODE ACABAR A QUALQUER MOMENTO!</span></strong></h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-3fa001f1 elementor-widget elementor-widget-spacer" data-id="3fa001f1" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<link rel="stylesheet" id="e-animations-css" href="<?=URL?>lib/animations.min.css" media="all">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="<?=URL?>lib/frontend-modules.min.js?ver=3.6.6" id="elementor-frontend-modules-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Compartilhar no Facebook",
				"shareOnTwitter": "Compartilhar no Twitter",
				"pinIt": "Fixar",
				"download": "Baixar",
				"downloadImage": "Baixar imagem",
				"fullscreen": "Tela cheia",
				"zoom": "Zoom",
				"share": "Compartilhar",
				"playVideo": "Reproduzir v\u00eddeo",
				"previous": "Anterior",
				"next": "Pr\u00f3ximo",
				"close": "Fechar"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Celular",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Celular extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.6.6",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"e_optimized_css_loading": true,
				"a11y_improvements": true,
				"e_import_export": true,
				"additional_custom_breakpoints": true,
				"e_hidden_wordpress_widgets": true,
				"landing-pages": true,
				"elements-color-picker": true,
				"favorite-widgets": true,
				"admin-top-bar": true,
				"form-submissions": true
			},
			"urls": {
				"assets": "https:\/\/gotadohimalaia.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 7,
				"title": "Gota%20do%20Himalaia%20%E2%80%93%20Gota%20do%20Himalaia",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script src="<?=URL?>lib/frontend.min.js?ver=3.6.6" id="elementor-frontend-js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
	<script src="<?=URL?>lib/components.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.js"></script>
	<script src="<?=URL?>lib/main.js"></script>
</body>
</html>