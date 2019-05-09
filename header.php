<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Glenuilde Leão | Milanez & Milaneze">
    <meta name="generator" content="Sublime Text" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/css/lightbox.min.css">

    <style type="text/css">
      .elemento img {
      margin-right: 10px;
    }
    @keyframes slidein {
      from {
        margin-left: 90%;
      }
      to{
        margin-left: -220%;
      }
    }
    .elemento .std-logos-ticker{    
      overflow: visible;    
      width: auto
    }
    .elemento li:hover{
      animation-play-state: paused;
      cursor: pointer;
    } 
    .projetos {
      border-radius: 12px;
      min-height: 307px;
    }

    </style>

    <?php wp_head(); ?>

  </head>
  <body>
    <!-- topo -->
  <div class="py-0 topo">
    <div class="container">
      <div class="row">
        <div class="col-3 social mt-0">
           <a class="btn navbar-btn ml-2" href="http://intranet.milanezmilaneze.com.br" target="_blank"> 
            <i class="fas fa-lg fa-user-circle"></i>&nbsp;<span class="d-none d-sm-inline-block">Login expositor</span>
          </a>
        </div>
        <div class="col-9 social text-right mt-2">
          <div class="rede d-inline text-light py-2">
            <ul>
              <li>
                <a href="https://www.instagram.com/vitoriastonefair/" target="_blank" data-placement="bottom" data-toggle="tooltip" title="Follow us on Instagram"><i class="fab fa-lg fa-instagram" aria-hidden="true"></i></a>
              </li> 
              <li><a href="https://www.facebook.com/Vit%C3%B3ria-Stone-Fair-1465472383758464" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Like us on Facebook"><i class="fab fa-lg fa-facebook-square"></i></a>
              </li>
              <li><a href="https://www.youtube.com/channel/UCnUWx57kOIHoXHXZAanSyKw" target="_blank" data-toggle="tooltip" title="Inscreva-se no canal" data-placement="bottom"><i class="fab fa-lg fa-youtube" aria-hidden="true"></i></a></li>
              <li>&nbsp;</li>
              <li><a href="#">EN</a></li>
               <li><a href="#">ES</a></li>
             <li><a href="#">IT</a></li> 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /topo -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" role="navigation">
    <div class="container">
      <a class="navbar-brand" href="#"><img alt="logomarca vitoria stone fair" src="<?php bloginfo('template_url');?>/img/vix-logo-pt.png" class="img-fluid d-none d-sm-block"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">

      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <span class="navbar-toggler-icon"></span>
      </button>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
    </div>
  </nav>