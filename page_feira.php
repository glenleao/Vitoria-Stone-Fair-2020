<?php /* Template Name: A Feira */ ?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid barra" style="background-position:center;background-image: url(&quot;<?php bloginfo('template_url') ?>/img/img-fair.jpg&quot;);">
            <div class="container">
                <div class="caixa">
                    <span class="display-4 categoria">A feira</span>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <?php custom_breadcrumbs(); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                    <div class=" titulo-destaque mb-3"><?php the_title(); ?></div>
                    
                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php else : get_404_template();  endif; ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <?php get_sidebar(); ?> 
            </div>      
        </div>
    </div>
<?php get_footer(); ?>