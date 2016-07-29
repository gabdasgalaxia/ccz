jQuery(document).ready(function($) {
	//sizeOfThings();

	var banner = jQuery("#top-single, .top-single");

  jQuery(window).resize("resizeBackground");

  function resizeBackground() {
      if(jQuery('body').hasClass('logged-in')){
          banner.height(jQuery(window).height() - 32); //tamanho da admin-bar = 32px
      } else{
          banner.height(jQuery(window).height());
      }
  }
  resizeBackground();

	$(".stay-transition").removeClass('transition-page');

	$("body").on('click', '.link', function(){
		// e.preventDefault();
		// var page = $(this).attr('data-link');
		// transitionPage(page);
		// alert(page);

		// $("#footer").fadeOut();

		// $(".stay-transition").addClass('transition-page');

		// $(".loader-ccz").addClass("active");
	});

	$(".flip").flip({ trigger: 'hover'});
	

	function transitionPage(page){
		// alert(page);
		$.ajax({
			url: page,
			beforeSend: function(  ) {
				$("#footer").fadeOut();

				$(".stay-transition").addClass('transition-page');

				setTimeout(function(){
					$(".loader-ccz").addClass("active");
				}, 250);

			}
		})
		.done(function( data ) {
			$(".loader-ccz").removeClass("active");

			setTimeout(function(){
				$(".stay-transition").removeClass('transition-page');
				$("#footer").fadeIn();
			}, 300);



		})
		.always(function(data){
			$("#content-geral").html('');
			$("#content-geral").html(data);
			flip(); 

			//sizeOfThings();

			


		})
		
	}

	
	$('.selos-slide-inst').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
		items: 1,
		autoplay: true
	});

	$('.slide-transition-single').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		items: 1
	});

	$('.slider2').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		autoHeight:true,
		items: 1
	});

	$('.slider_resultados').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		autoplay: true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsive:{
			0:{
				items:1 
			},

			992:{
				items:2
			},

			1200:{
				margin: 20, 
				items:3
			}
		}
	});


	var galleryTop = new Swiper('.gallery-top', {
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 10,
	});
	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView: 'auto',
		touchRatio: 0.2,
		slideToClickedSlide: true
	});

	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

	$("body").on('click', '.index-slide', function(){
		var index = $(this).attr("data-index");

		galleryTop.slideTo(index);
	});

	$('body').on('click', '.turn-slide-index', function(){
		galleryTop.slideTo(0);
	});

	function sizeOfThings(){
		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;

		var screenWidth = screen.width;
		var screenHeight = screen.height;

		console.log("windowWidth: " + windowWidth + "px");
		console.log("windowHeight: " + windowHeight + "px");

		// $("#institucional").height(windowHeight - 30);
		$("section").css("cssText", "max-height: " + (windowHeight - 60) + "px;" );
		
		// $("section").height(windowHeight - 60);
		
		$(".top-single, .top-post-comum").height(windowHeight - 120);


	};

	window.addEventListener('resize', function(){
		//sizeOfThings();
	});

	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		
		if (scrolled > 80) {
			$("body header .menu").addClass('menu-bg-scroll');
		} else {
			$("body header .menu").removeClass('menu-bg-scroll');
		}

	});

	$("body").on('click', '.tcon', function(e){
		e.preventDefault();

		

		// console.log($(this));

		if ($(this).hasClass('tcon-transform')){
			$(this).removeClass('tcon-transform');
		} else {
			$(this).addClass('tcon-transform');
		}
	});

});

jQuery(document).ready(function($) {

	// $(".box-master").hide();
	
	$("body").on('click','#btn1', function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		abreFechaMenu('btn1', 'grid', 'list');
	})

	$("body").on('click','#btn2', function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		abreFechaMenu('btn2', 'list','grid');
	});

	function abreFechaMenu(btn, classeA, classeB){

		var id = "#"+btn;

		console.log(id);

		// if ($(id).hasClass("tcon-transform")){
		// 	$(id).removeClass('tcon-transform');
		// } else {
		// 	$(id).addClass('tcon-transform');
		// }

		if ($(".box-master > div").width()){
			$(".box-master").css('cssText', 'width: 0px;');

			setTimeout(function(){ 
				$(".box-master > div").removeClass('grid');
				$(".box-master > div").removeClass('list');
			}, 500);


			//$(".tcon-menu__lines").css('cssText', 'background: #fff;');
			$("#btn1").fadeIn('slow');
			$("#btn2").fadeIn('slow');
		} else {
			
			if (btn == 'btn1'){
				$("#btn2").fadeOut();
				
			} else {
				$("#btn1").fadeOut();
				//$(".tcon-menu__lines").css('cssText', 'background: transparent;');
			}

			$(".box-master > div").addClass(classeA);
			$(".box-master").css('cssText', 'width: calc(100% - 130px);');
		}

		
	}

	$(".scroll").click(function(event){        
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});

	if($('.parallax').length){
		$(window).scroll(function(){
			$('.parallax').each(function(r){
	        	var speed = 1.1; //não alterar, definir data-speed no html
				var offset = 0; //não alterar, definir data-offset no html
				var position_x = 50; //não alterar, definir data-position-x no html
				var scrolled = $(window).scrollTop();
				
				if($(this).attr('data-speed')) {
					speed = parseFloat($(this).attr('data-speed'));
				}
				if($(this).attr('data-offset')) {
					offset = parseFloat($(this).attr('data-offset'));
				}
				if($(this).attr('data-position-x')) {
					position_x = parseFloat($(this).attr('data-position-x'));
				}
				
				$(this).css('background-position', position_x+'% '+ - (scrolled * speed - offset) + 'px');   
			});
		}).trigger('scroll');
	}
});




