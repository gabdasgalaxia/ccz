<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta content="Agência WOW!" property="og:site_name">
	<meta content="Agência WOW!" property="og:title">
	<meta content="Confira os trabalhos do portfolio da Agência WOW!." property="og:description">
	<meta content="http://www.case.agenciawow.com.br/images/logo.png" property="og:image">
	<meta content="http://www.dev.agenciawow.com.br/newsite/" property="og:url">
	<meta content="og:agencia" property="og:type">
	<meta content="100001622010114" property="fb:admins">
	<meta content="272860439741228" property="fb:app_id">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/grid12.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/ccz.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/jquery.fullpage.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>

	


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php  // Esses scripts controlam a API Social Plugin que está instalada nas paginas de posts comuns ?>

	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '272860439741228',
				xfbml      : true,
				version    : 'v2.6'
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=272860439741228";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="particles-js"></div>
	<script src="<?php bloginfo('template_directory');?>/assets/lib/particles/particles.js"></script>

	<header class="SiteHeader">
		<div class="container">
			<a href="<?php echo site_url(); ?>" class="SiteHeader-logo">
				<img src="<?php bloginfo('template_directory');?>/assets/img/logo2.png" alt="CCZ*WOW">
				<h1 class="hidden">CCZ*WOW</h1>
			</a> <!-- Logo -->

			<nav class="Menu">
				<ul class="Menu-list">
					<li><a href="#/">fullthinking</a></li>
					<li class="has-children">
						<a href="#/">blog</a>

						<ul class="Menu-dropdown">
							<li><a href="#/">conteúdo</a></li>
							<li><a href="<?php echo site_url(); ?>/single/">cases</a></li>
						</ul>
					</li>
					<li><a href="#/">contato</a></li>
				</ul> <!-- Menu-list -->
			</nav> <!-- Menu -->
		</div> <!-- container -->
	</header> <!-- SiteHeader -->
	
	<main class="SiteContent">






