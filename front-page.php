<!-- Pagina principal - Home -->
<?php get_header(); ?>

<!-- carousel -->
      
         
          <div id="carouselBSWP" class="carousel slide d-none d-sm-block" data-ride="carousel">
          
            <div class="carousel-inner">
            
              <?php 
              // args
              $my_args_banner = array(
                'post_type' => 'banners',
                'posts_per_page' => 3,
              );

              // query
              $my_query_banner = new WP_Query ( $my_args_banner );
              ?>

              <?php if( $my_query_banner->have_posts()) : 
                $banner = $banners[0];
                $c = 0;
                while( $my_query_banner->have_posts() ) : 
                $my_query_banner->the_post(); 
              ?>

                <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')) ?>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>
                      <?php the_title(); ?>
                    </h5>
                  </div>
                </div>

              <?php endwhile; endif; ?>

              <?php wp_reset_query(); ?>
            
            </div>

            <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Próximo</span>
            </a>
          
          </div>
        

      

      <!-- /carousel -->

      <!-- mobile -->
    <div class="bg-img d-block d-sm-none">
    <img  class="w-100" src="<?php bloginfo('template_url');?>/img/savedate-mob.jpg">
  </div>
  <!-- /mobile -->
<!-- botoes -->
<section class="py-3">
  <div class="container">
      <div class="row text-center">
        <div class="col-md-4 col-sm-4">
          <div class="con">
          <div class="botao btng expositor animated fadeInDown">
            <a href="#">
              <h1><strong>EXPOSITOR</strong></h1>
              <div class="overlay">
              <div class="text"><h3>Reserve o seu stand</h3></div>
            </div>
             </a>
          </div><!--/expositor-->
          </div>
        </div><!--/md4-->
        <div class="col-md-4 col-sm-4">
          <div class="con">
          <div class="botao btng visitante animated fadeInDown">
            <a href="#">
              <h1><strong>VISITANTE</strong></h1>
              <div class="overlay">
                <div class="text"><h3>Por que participar?</h3></div>
              </div>
            </a>
          </div><!--/visitante-->
        </div><!--/md4-->
      </div>
        <div class="col-md-4 col-sm-4"><!-- DIV COL 4-->
          <div class="con">

            <div class="botao btng animated fadeInDown" style="background: #000;"><!-- DIV BOX--> 
                <a href="#">
                  <img src="<?php bloginfo('template_url');?>/img/buyers3.png" width="255" style="margin-top:8px">
                  <div class="overlay">
                    <div class="text"><h3>Entre para esse clube</h3></div>
                  </div>
                </a>
            </div><!-- /DIV BOX-->
          </div>
        </div><!-- /DIV COL 4--> 
        </div><!--/row-->
    </div><!--/container--> 
</section>
<!-- /botoes -->

<!-- fotos -->
 <div class="py-5 bg-dark">
  <div class="text-center text-light display-4 mb-3">GALERIA</div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 mb-3">
     <iframe width="100%" height="300" src="https://www.youtube.com/embed/hs6D22V-vGY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="col-sm-6 mb-3">
            <a href="3"><img  alt="galeria de fotos Vitoria Stone Fair" class="w-100 img-fluid" src="<?php bloginfo('template_url');?>/img/vsf1.jpg"></a>
          </div>
          <div class="col-sm-6 mb-3">
            <a href="#"><img  alt="galeria de fotos Vitoria Stone Fair" class="w-100 img-fluid" src="<?php bloginfo('template_url');?>/img/vsf2.jpg"></a>
          </div>
          <div class="col-sm-6 mb-3">
            <a href="#"><img  alt="galeria de fotos Vitoria Stone Fair" class="w-100 img-fluid" src="<?php bloginfo('template_url');?>/img/vsf0.jpg"></a>
          </div>
          <div class="col-sm-6 mb-3">
            <a href="#"><img  alt="galeria de fotos Vitoria Stone Fair" class="w-100 img-fluid" src="<?php bloginfo('template_url');?>/img/vsf3.jpg"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<!-- /FOTOS -->

<!-- noticias -->

<div class="py-5">
  <div class="text-center text-dark display-4 mb-3">NOTÍCIAS</div>
    <div class="container">

      <div class="row justify-content-md-center">

        <?php 
        // args
        $my_args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category_name' => 'destaque'
        );

        // query
        $my_query = new WP_Query ( $my_args );
        ?>

        <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>

          <div class=" destaque col-sm-12 col-md-4 mb-5">

            <div class="">
              <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid barra card-img-top mb-3')) ?>
              <div class="card-body">
                <h2 class="title-noticia">
                  <?php the_title(); ?>
                </h2>
                <a href="<?php the_permalink(); ?>" class="btn btn-my-color-5">Leia mais</a>
              </div>
            </div>

          </div>

        <?php endwhile; endif; ?>

        <?php wp_reset_query(); ?>

      </div>

    </div>
</div>

      <!-- /noticias -->

      <!-- projetos -->
<div class="bg-dark py-5">
      <div class="text-center text-light display-4 mb-3">PROJETOS ESPECIAIS</div>
  <div class="container">
  
      <div class="col-md-12">
        <div class="row">

        <div class="col-md-4 ">
          <div class="projetos">
            <img src="<?php bloginfo('template_url');?>/img/bsod-b.png" class="img-fluid">
          <div class="text-center box">
            <p>Exposição de peças assinadas por designers brasileiros, realizada pela Abirochas em parceria com Apex-Brasil, no projeto Brasil Original Stones.</p>
           <!--  <p><a href="/site/2018/pt/projetos-especiais">Ver mais</a></p> -->
          </div>
          </div>
        </div>
        
        <div class="col-md-4 ">
          <div class="projetos">
            <img src="<?php bloginfo('template_url');?>/img/stone-b.png" class="img-fluid">
          <div class="text-center box px-2">
            <p>Exposição exclusiva que reúne os principais lançamentos de 2019, valorizando ainda mais a beleza das rochas ornamentais brasileiras.</p>
            <!-- <p><a href="https://pages.qwilr.com/Stone-Collection-Vitoria-Stone-Fair-FEILSKKFRKWG" target="_blank">Ver mais</a></p> -->
          </div>
          </div>
        </div>

        
        <div class="col-md-4">
          <div class="projetos">
            <img src="<?php bloginfo('template_url');?>/img/archathon.png" class="img-fluid">
          <div class="text-center box">
            <p>Maratona Arch&Design. <br>Workshop com formato inovador para profissionais de Arquitetura & Design.</p>
           <!--  <p><a href="#" target="_blank">Ver mais</a></p> -->
          </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h4 class="text-center text-light mt-3"><a href="#" style="color: #fff;" >Saiba mais</a></h4>
      </div>
      </div>
 

  </div>
</div>

<!-- /projetos -->

<!-- feiras -->
<div class="py-5 bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3 mb-3"><a href="https://cachoeirostonefair.com.br" target="_blank"><img src="<?php bloginfo('template_url');?>/img/cach_b.gif" alt="Cachoeiro Stone Fair" class="img-fluid mx-auto d-block"></a></div>

      <div class="col-md-3 mb-3"><a href="http://en.stonefair.ru/" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url');?>/img/russia_eng.gif" alt="Stone Industry" class="img-fluid mx-auto d-block"></a></div>

      <div class="col-md-3 mb-3"><a href="http://www.marmomac.com/en/?utm_source=vitoriastonefair.com.br/site/2019/it/home&utm_medium=banner_241x96-din&utm_campaign=campagna-2019&utm_content=en" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url');?>/img/mdm2019_280x100.gif" class="img-fluid mx-auto d-block"></a>
      </div>
    </div>
  </div>
</div>
<!-- /feiras -->
<!-- logos -->
<?php require_once "logomarcas.php"; ?>
<!-- /logos -->

      <div class="row">

        <div class="col-md-8 col-sm-12">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

          <?php endwhile; ?>

          <?php else : get_404_template();  endif; ?>

          <div class="blog-pagination mb-5">
            <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
          </div>

        </div>

        <?php get_sidebar(); ?>

      </div>

    </div>

<?php get_footer(); ?>