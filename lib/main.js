$(".elementor-progress-bar").each(function(){
	console.log();
	var bar = $(this)
	var max = bar.attr('data-max')
	var value = 0;
	var animate = setInterval(function () {
		if (value <= max) {
			value += 1;
			bar.css({width : value+'%'});
		}
	}, 15);
});

var swiper = new Swiper(".mySwiper", {
	pagination: {
		el: ".swiper-pagination",
		rewind: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
	},
});

$(".tablist").on("click","a",function(e){
	if($(this).parent().next().is(":visible")){
		$(this).parent().next().slideUp()
	}else{
		$(this).parent().next().slideDown()		
	}
	return false;
});

$('body a.scrollink').click(function(e) {
		e.preventDefault();			
		var id = $(this).attr('href')
		if (id.indexOf('#') > -1) {
			id = '#'+id.split("#")[1]
			console.log(id);
			console.log(URL);
			if(id=='#inicio'){
				if(ROTA){
					location.href = URL;
				}else{
					var to = 0;					
				}
			}else{
				var to = parseInt($(id).offset().top) - 80;
			}
			if($(id).is(":visible")){
				$('html, body').animate({
					scrollTop: to+'px'
				}, 500);
				window.history.pushState("object or string", "Title", "./");				
				$('.menus a').removeClass("active")
				$(this).addClass("active")
			}else{
				location.href = URL+'/'+id;
			}
		}
});


$("#quizz").on("click","input.uk-radio",function(){
	$(this).parent().parent().slideUp(100)
	$(this).parent().parent().next().fadeIn(100)
});

$("#quizz").on("submit","form.formquizz",function(e){
	$("#progressbar").show()
	e.preventDefault();
	let url = URL+"/app/send/quizz.php";
	let form = document.querySelector('form.formquizz');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
		//console.log(res);
		location.href = URL+'/vsl';
	}).catch(function(err){ console.log(err)})
});