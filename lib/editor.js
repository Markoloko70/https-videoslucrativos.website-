const editor = ()=>{
	let editor = Jodit.make('.editor',{
		"language": "pt_br",
		"enter": "BR"
	});
}


function editar(h,t,e){
	console.log(h);
	let x = `<button class="uk-modal-close-default" type="button" uk-close></button>
			<form class="site" enctype="multipart/form-data">
				<input type="hidden" name="hash" value="${h}">
				<input type="hidden" name="tipo" value="${t}">
				<fieldset class="uk-fieldset">
					<legend class="uk-legend">Editar Elemento</legend>`
	if(t=='img'){
		let src = e.dataset.id;
		let alt = e.alt;
		x += `<div class="uk-margin">
						<div class="uk-inline">
							<a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
							<input class="uk-input" name="texto" value="${alt}" type="text" placeholder="texto da imagem...">
						</div>					
						<div class="uk-inline">
								<a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
								<input class="uk-input" name="link" type="text" value="${src}" placeholder="ID da imagem...">
						</div>
					</div>`
	}else if(t=='link'){
		let text = e.innerText;
		let href = e.dataset.id;
		x += `<div class="uk-margin">
						<div class="uk-inline">
							<a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
							<input class="uk-input" name="texto" value="${text}" type="text" placeholder="texto do link...">
						</div>					
						<div class="uk-inline">
								<label class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></label>
								<input class="uk-input" name="link" value="${href}" type="text" placeholder="url do link...">
						</div>
					</div>`
	}else if(t=='text'){
		let text = e.innerText;
		x += `<div class="uk-margin">
						<input type="hidden" name="link" value="">
						<div class="uk-inline">
							<a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
							<input class="uk-input" name="texto" type="text" value="${text}" placeholder="texto aqui...">
						</div>
					</div>`					
	}else if(t=='tarea'){
		x += `<div class="uk-margin">
					<input type="hidden" name="link" value="">
					<textarea class="uk-textarea" name="texto" rows="5" placeholder="texto aqui..."></textarea>
				</div>`
	}else if(t=='editor'){
		x += `<div class="uk-margin">
					<input type="hidden" name="link" value="">
					<textarea class="editor" name="texto" rows="5" placeholder="texto aqui..."></textarea>
				</div>`
	}		
	x += `<div class="uk-margin">
					<input class="uk-button" type="submit" value="Salvar">
				</div>
			</fieldset>
		</form>`
	$("#modal .uk-modal-dialog").html(x)
	UIkit.modal("#modal").show();
	if(t=='editor'){ 
		editor() 
		let text = e.innerHTML;
		$('#modal textarea[name="texto"]').val(text)
		$('#modal').find('.jodit-wysiwyg').append(text)
	}else if(t=='tarea'){
		let text = e.innerText;
		$('#modal textarea[name="texto"]').val(text)		
	}
}

$("#modal").on("submit","form.site",function(e){
	e.preventDefault();
	let url = URL+"/app/send/site.php";
	let form = document.querySelector('form.site');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
		$(".uk-alert-success").show()
		console.log(res);

		if(res==1){
			UIkit.notification({
				message: 'Elemento atualizado :)',
				status: 'primary',
				pos: 'top-center',
				timeout: 5000
			});					
		}else{
			UIkit.notification({
				message: 'Erro ao Editar Elemento :( contate o admin',
				status: 'warning',
				pos: 'top-center',
				timeout: 5000
			});
		}
	}).catch(function(err){ console.log(err)})
});

$("#modal").on("click","button.uk-close",function(){
	document.location.reload(true);
});