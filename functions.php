<?php

//pagina login personalizada
function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return 'Vitoria Stone Fair 2020 - Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
 



//CRUD create emersonbroga.com
function newsletter_insert( $dados )
{
  global $wpdb;
  
  $array = array();
  $array['nome'] = $dados['nome'];
  $array['email'] = $dados['email'];
  
  $format = array(); // possíveis formatos %s (string), %d (decimal) e %f (float). 
  $format['nome'] = '%s';
  $format['email'] = '%s';
  
  $wpdb->insert( 'newsletter', $array , $format);
  // tabela, dados, formato.
}

//CRUD Delete emersonbroga.com
function newsletter_delete( $id )
{
  global $wpdb; 
  
  $wpdb->query("DELETE FROM 'newsletter' WHERE ID = $id");
}

//CRUD READ emersonbroga.com
function newsletter_fetch_rows( )
{
  global $wpdb; 
  
  $query = 'SELECT * FROM newsletter';
  
  return $wpdb->get_results($query, "ARRAY_A");
  // Os possíveis tipos de retorno do get results são "ARRAY_A", "ARRAY_N", "OBJECT", "OBJECT_K" 
}
// CRUD UPDATE
function newsletter_update( $id , $dados  )
{
  global $wpdb;
  
  $array = array();
  $array['nome'] = $dados['nome'];
  $array['email'] = $dados['email'];
  
  $format = array(); // possíveis formatos %s (string), %d (decimal) e %f (float). 
  $format['nome'] = '%s';
  $format['email'] = '%s';
  
  $where = array( 'ID' => $id );
  $where_format = array( 'ID' => '%d');
  
  $wpdb->update( 'newsletter', $array , $format, $where, $where_format );
  // tabela, dados, formato, onde, formato onde.
}


// Chamar a tag Title e adicionar os formatos de posts
function bs4wp_theme_support() {

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));

    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'bs4wp_theme_support');

// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}

// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'bs4wp')
));

// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1900, 720, true );

// Definir o tamanho o resumo
add_filter( 'excerpt_length', function($length) {
    return 50;
} );

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-outline-my-color-5"';
}

// Criar a barra lateral
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="card-header">',
        'after_title' => '</h5><div class="card-body">',
));

// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));

// Ativar o formulário para respostas nos comentários
function theme_queue_js() {
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');

// Personalizar os comentários
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php

}

// Criar o tipo de post para o banner
function create_post_type() {

    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');

// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';

?>