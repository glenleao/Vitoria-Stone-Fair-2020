<?php /* Template Name: Expositor-formulario */ ?>
<?php
 session_start();
 include_once 'conexao.php';
 ?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid barra" style="background-position:center;background-image: url(&quot;<?php bloginfo('template_url') ?>/img/img-exhibitor.jpg&quot;);">
        <div class="container">
            <h1 class="display-4 categoria">Expositor</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                    <div class=" titulo-destaque mb-3"><?php the_title(); ?></div>
                    
                    <?php the_content(); ?>
                    <!-- formulario -->
                     <?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
    ?>
    <form method="POST" action="proc_cad_palestra.php">
      <label>Data:</label>
      <input type="date" name="dia" placeholder=""><br><br>
      <label>Tema:</label>
      <input type="text" name="tema" placeholder="Inserir tema palestra"><br><br>
      <label>Palestrante:</label>
      <input type="text" name="palestrante" placeholder="Inserir palestrante"><br><br>
      <input type="submit" name="SendCadPalestra" value="Cadastrar">

      
    </form>

                    <!-- /formulario -->



                <?php endwhile; ?>

                <?php else : get_404_template();  endif; ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <?php get_sidebar(); ?> 
            </div>
        </div>
    </div>
<?php get_footer(); ?>
