<?php /* Template Name: Imprensa */ ?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid barra" style="background-position:center;background-image: url(&quot;<?php bloginfo('template_url') ?>/img/img-press.jpg&quot;);">
        <div class="container">
            <div class="caixa">
            <span class="display-4 categoria">Imprensa</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <!--Sidebar-->
                <?php if ( is_active_sidebar( 'imprensa' ) ) : ?>
                <?php dynamic_sidebar( 'imprensa' ); ?>
                <?php endif; ?>
                <!--/.Sidebar-->
            </div> 
            <div class="col-md-9 col-sm-12">
                <?php custom_breadcrumbs(); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                    <div class=" titulo-destaque mb-3"><?php the_title(); ?></div>
                    
                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php else : get_404_template();  endif; ?>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>
