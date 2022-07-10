<?php 
	$SSL = $_SERVER['REQUEST_SCHEME']."://";
	$NAN = $_SERVER['SERVER_NAME'];
	$URI = $_SERVER['REQUEST_URI'];
	$URL = $SSL.$NAN."/$URI";
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
	<meta itemprop="image" content="<?=URL?>/logo.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=URL?>">
	<meta property="og:title" content="<?=$dados['titulo']?>">
	<meta property="og:description" content="<?=$dados['descricao']?>">
	<meta property="og:image" content="<?=URL?>/logo.jpg">
	<meta property="og:site_name" content="<?=$dados['titulo']?>">
	<meta property="og:locale" content="pt_BR">	

	<meta name="description" content="<?=$dados['descricao']?>">
	<meta name="author" content="Randiclecio Moura">
	<meta name="robots" content="index, follow">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.">
	<link rel="icon" href="./fav.png">
	<meta name="robots" content="max-image-preview:large">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" async="" defer="">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=URL?>/main.css" async="" defer="">
	<link rel="stylesheet" href="<?=URL?>/out.css" async="" defer="">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
</head>
<style> body,html{ background: #000; } </style>
<div id="quizz">
	<div class="midle">
		<form action="" name="quizz" class="formquizz" method="post">
			<h1>Responda abaixo e descubra como podemos te ajudar.</h1>
			<input type="hidden" name="origem" value="">
			<ul class="quizz">
				<li class="q1">
					<p>Meu caro, você suspeita estar sofrendo com problemas causados <br>pelo aumento da próstata?</p>
					<p>Vamos te ajudar a identificar de forma rápida como <br>tratar seu problema.
					Respondendo esse rápido teste...</p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio hidden" name="q1" value="1">
						<span>FAZER TESTE</span>
					</label>
				</li>
				<li class="q2">
					<p>PERGUNTA 2:</p>
					<p>Você já acorda diversas vezes durante a noite para ir ao banheiro?</p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q2" value="1">
						<span>SIM</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q2" value="2">
						<span>NÃO</span>
					</label>
				</li>
				<li class="q3">
					<p>PERGUNTA 3:</p>
					<p>Sente aquela sensação de bexiga cheia, logo após ter urinado?</p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q3" value="1">
						<span>SIM</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q3" value="2">
						<span>NÃO</span>
					</label>
				</li>
				<li class="q4">
					<p>PERGUNTA 4:</p>
					<p>Não sente que molhou a calças ou não consegue evitar que isso ocorra, pois o jato de urina é fraco ou só goteja?</p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q4" value="1">
						<span>SIM</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q4" value="2">
						<span>NÃO</span>
					</label>
				</li>
				<li class="q5">
					<p>O resultado está disponível em formato de vídeo e só podemos exibir para uma quantidade limitada de pessoas simultaneamente.</p>
					<p>Você irá assitir até final?</p>
					<label>
						<button type="submit" class="uk-button uk-button-primary uk-button-large">QUERO VER O RESULTADO!</button>
					</label>
				</li>
			</ul>
			<div class="bottom">
				<p><a href="https://gotaprost.com.br/gota/termos-de-uso">Termos de Uso</a> | <a href="https://gotaprost.com.br/gota/politica-de-privacidade">Políticas de Privacidade</a></p>
				<p>2022 ©Copyright © 2022 Gota do Himalaia. Todos os direitos reservados. Todo o conteúdo do site, todas as fotos, imagens, logotipos, marcas, layout, aqui veiculados são de propriedade exclusiva do Gota do Himalaia. É vedada qualquer reprodução, total ou parcial, de qualquer elemento de identidade, sem expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei. O Gota do Himalaia é um tratamento. Seu resultado pode variar de pessoa para pessoa. Os preços dos produtos estão sujeitos a alteração sem aviso prévio.</p>
			</div>
		</form>
	</div>
</div>
</body>
</html>

<script>
$("#quizz").on("click","input.uk-radio",function(){
	$(this).parent().parent().slideUp(100)
	$(this).parent().parent().next().fadeIn(100)
});

$("#quizz").on("submit","form.formquizz",function(e){
	e.preventDefault();
	location.href = '<?=$dados['link']?>';
});
</script>