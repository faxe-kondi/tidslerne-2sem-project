<?php 
function custom_theme_styles() {
    
    wp_enqueue_style('global-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/home.css');
    wp_enqueue_style('aboutSite-style', get_template_directory_uri() . '/assets/aboutSite.css');
    wp_enqueue_style('articleSite-style', get_template_directory_uri() . '/assets/articleSite.css');
    wp_enqueue_style('articleOverview-style', get_template_directory_uri() . '/assets/articleOverview.css');
    wp_enqueue_style('gallerySite-style', get_template_directory_uri() . '/assets/gallerySite.css');
    wp_enqueue_style('videoSite-style', get_template_directory_uri() . '/assets/videoSite.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js');

    wp_localize_script('main-js', 'ajaxSearch', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

    wp_enqueue_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
    wp_enqueue_style('meta-pro-font', 'https://fonts.cdnfonts.com/css/meta-pro');

}

add_action('wp_enqueue_scripts', 'custom_theme_styles');

add_action('wp_ajax_ajax_search', 'ajax_search_handler');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_handler');

function ajax_search_handler() {
  $search = sanitize_text_field($_GET['search']);
  $taxonomy = isset($_GET['taxonomy']) ? sanitize_text_field($_GET['taxonomy']) : '';
  $term = isset($_GET['term']) ? sanitize_text_field($_GET['term']) : '';

  $args = array(
    'post_type' => 'artikel',
    'posts_per_page' => 5,
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key' => 'artikel_titel',
        'value' => $search,
        'compare' => 'LIKE',
      ),
      array(
        'key' => 'artikel_type',
        'value' => $search,
        'compare' => 'LIKE',
      ),
      array(
        'key' => 'artikel_tags',
        'value' => $search,
        'compare' => 'LIKE',
      ),
    ),
  );


  if (!empty($taxonomy) && !empty($term)) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug', 
        'terms' => $term,
        'operator' => 'IN',
      )
    );
  }

  $query = new WP_Query($args);


  if ($query->have_posts()) {
    ob_start();
    echo '<ul class="ajax-search-results">';
    while ($query->have_posts()) {
      $query->the_post();

      $articleImage = get_field("artikel_billede");
      $articleTitle = get_field('artikel_titel');
      $articleCategory = get_field('artikel_type');

    if ($articleCategory) {
        if (is_object($articleCategory)) {
        $categoryLabel = $articleCategory->name;
      }
    }
      
   echo '<li>';
  echo '<a href="' . esc_url(get_permalink()) . '" class="ajax-search-item">';

  if ($articleImage) {
    echo '<div class="ajax-search-thumb">';
    echo '<img src="' . esc_url($articleImage['url']) . '" alt="' . esc_attr($articleImage) . '" style="width:100px;height:60px;object-fit:cover;border-radius:6px;" />';
    echo '</div>';
  }

  echo '<div class="ajax-search-info">';
  echo '<div class="ajax-search-title">' . esc_html($articleTitle) . '</div>';
  
  if ($categoryLabel) {
    echo '<div class="ajax-search-category">' . esc_html($categoryLabel) . '</div>';
  }

  echo '</div>';
  echo '</a>';
  echo '</li>';
}

echo '</ul>';
    wp_reset_postdata();
    echo ob_get_clean();
  } else {
    echo '<p>Ingen resultater fundet.</p>';
  }

  wp_die();
}