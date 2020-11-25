<?

add_action( 'wp_enqueue_scripts', 'mywpportfoliotheme_scripts' );

function mywpportfoliotheme_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_style( 'style-name', get_stylesheet_uri('style.css') );    
    wp_enqueue_style( 'style-name', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'style-name', 'https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@700&display=swap');
    wp_enqueue_style( 'style-name', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Open+Sans:wght@300&display=swap'); 

    
    
}

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = bloginfo('stylesheet_directory') . "/images/comingsoon.jpg";
    }
    return $first_img;
}


function show_all_posts($content = null) {
  ob_start(); 
  
  $posts = get_posts(array('post_type'=>'post'));
  echo '<div class="projects">';
  foreach ($posts as $post) {
    $attachment_image = get_children( array(
      'numberposts' => 1,
      'post_mime_type' => 'image',
      'post_parent' => $post->ID,
      'post_type' => 'attachment'
    ) );
    
    // вынимаем первую картинку из массива
    $attachment_image = array_shift($attachment_image);
    
    $img = '<img class="image_preview" src="' . wp_get_attachment_url( $attachment_image->ID ) . '" alt="" />';
    echo '<article class="project postBox">';
    echo $img;
    echo '</article>';
  }
  echo '</div>';
  return ob_get_clean();
}

add_shortcode('show-posts', 'show_all_posts');