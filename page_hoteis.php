<?php /* Template Name: hoteis */ ?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid barra" style="background-position:center;background-image: url(&quot;<?php bloginfo('template_url') ?>/img/img-visitor.jpg&quot;);">
        <div class="container">
            <h1 class="display-4 categoria">Visitante</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-md-3 col-sm-12">
                    <!--Sidebar-->
                    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                    <?php endif; ?>
                    <!--/.Sidebar-->
                </div> 
                <div class="col-md-8 col-sm-12">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                            <div class=" titulo-destaque mb-3"><?php the_title(); ?></div>
                            
                            <?php the_content(); ?>
                    <div id="pagconsulta" style="height: auto;"> <!--PAGCONSULTA-->
         
                    </div>
                        <?php endwhile; ?>

                        <?php else : get_404_template();  endif; ?>
                </div>
            </div>
    </div>
<?php get_footer(); ?>
