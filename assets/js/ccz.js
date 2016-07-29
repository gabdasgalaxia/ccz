jQuery(document).ready(function($) {

	/* SLIDER */
	var $slider = $('.Slider')
  .on('init', function(slick) {
      $slider.fadeTo( 300, 1 );
  })
  .slick({
			arrows: true,
			slidesToScroll: 1,
			slidesToShow: 1,
  });




  /* VALIDAR FORM CONTATO */

  $('.Form').submit(function(e){
      e.preventDefault();

      var qtdErro = 0;

      $('.Form [data-validate=true]').each(function() {
      var value = $.trim( $(this).val() );
      console.log(value);

      if(!value.length > 0){
        $(this).parent().addClass('error');
        qtdErro++;
      }
    });

    if(qtdErro == 0){
      /*var nome = $('.form [name=contato_nome]').val();
      var email = $('.form [name=contato_email]').val();
      var mensagem = $('.form [name=contato_mensagem]').val();

      var posting = $.post("URL", { contato_nome: nome, contato_email: email, contato_mensagem: mensagem } );

      posting.done(function( data ) {
          var result = $.parseJSON(data);

          // Exibe a modal com as informações
        $('.popup').find('h3').text(result.titulo);
        $('.popup').find('p').text(result.corpo);
        $('.popup').addClass('open');

        // Limpa o form
        $('.form').find('input[type=text], input[type=email], textarea').val('');
      });*/
    }
    });



    /* PARTICLES */

    particlesJS.load('particles-js', 'http://localhost:81/ccz/public/wp-content/themes/wp-history/assets/lib/particles/particles.json', function() {
      console.log('callback - particles.js config loaded');
    });



    /* SideMenu Buttons*/

    $("#btn1").on('click', function(e){
      e.preventDefault();
      $(this).toggleClass('open');
    })

    $("#btn2").on('click', function(e){
      e.preventDefault();
      $(this).toggleClass('open');
    });
});