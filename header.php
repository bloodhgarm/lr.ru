<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/template.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>

</head>
<body>

<div class="top hidden-xs">
   <div class="container">
   <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
           <ul>
               <li><a href="<?php the_field('facebook_header', 'option'); ?>"><i class="fab fa-facebook-f"></i></a> </li>
               <li><a href="<?php the_field('instagram_header', 'option'); ?>"><i class="fab fa-instagram"></i></a> </li>
               <li><a href="<?php the_field('viber_header', 'option'); ?>"><i class="fab fa-viber"></i></a> </li>
               <li><a href="<?php the_field('telegram_header', 'option'); ?>"><i class="fab fa-telegram-plane"></i></a> </li>
               <li><a href="<?php the_field('whatsapp_header', 'option'); ?>"><i class="fab fa-whatsapp"></i></a> </li>
           </ul>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
           <form class="navbar-form" role="search">
               <div class="form-group">
                   <input type="text" class="place1 form-control" placeholder="Поиск...">
               </div>
               <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
           </form>
       </div>
   </div>
  </div>
  </div>
  <header>
  <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 logo">
      	<a  href="/">
      	    <?php 	
            $image = get_field('logo_header', 'option');
            if( !empty($image) ): ?>	
      		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      		<?php endif; ?>
      	</a></div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding1  hidden-xs">
          <div class="time1"><i class="fas fa-clock"></i></div>
          <div class="time2">
              <?php the_field('header_time1', 'option'); ?><br>
              <span><?php the_field('header_time2', 'option'); ?></span>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding1">
          <div class="phone1"><i class="fas fa-mobile-alt"></i></div>
          <div class="phone2">
              <a href="tel:<?php the_field('header_phone1', 'option'); ?>"><?php the_field('header_phone1', 'option'); ?></a><br>
              <span><a href="tel:<?php the_field('header_phone2', 'option'); ?>"><?php the_field('header_phone2', 'option'); ?></a> </span>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding1  hidden-xs">
          <div class="mail1"><i class="fas fa-envelope"></i></div>
          <div class="mail2">
              E-mail адрес:<br>
              <span><a href="mailto:<?php the_field('header_email', 'option'); ?>"><?php the_field('header_email', 'option'); ?></a> </span>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding1  hidden-xs">
          <div class="loc1"><i class="fas fa-map-marker-alt"></i></div>
          <div class="loc2">
              <?php the_field('header_adres1', 'option'); ?><br>
              <span><?php the_field('header_adres2', 'option'); ?></span>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding2">
          <div class="zv1"><a class="eModal-1" href="">Обратный звонок</a></div>
          <div class="zv2"><a class="eModal-2" href="">Записаться</a></div>
      </div>
  </div>
  </div>
  </header>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    


<?php

wp_nav_menu( array(

'menu'              => 'top',

'theme_location'    => 'top',

'depth'             => 0,

'container'         => 'div',

'container_class'   => 'collapse navbar-collapse',

'container_id'      => 'bs-example-navbar-collapse-1',

'menu_class'        => 'nav navbar-nav',

'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

'walker'            => new wp_bootstrap_navwalker())

);

?>




    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
