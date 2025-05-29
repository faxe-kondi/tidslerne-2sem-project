<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <section class="articleOverviewBody">
        <div class="SiteImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tidsler.webp" alt="">
            <div class="SiteImgGrad"></div>
        </div>
        <div class="articleOverviewHeader">
            <h1 >Videogalleri</h1>
            <p class="p2">Velkommen til Tidslernes videogalleri. Her finder du videoer med interviews, oplæg og indsigter fra vores arbejde og medlemmer.</p>
          
          </div>
        </section>

    <section class="videoSection">

    <?php
$args = array(
  'post_type' => 'gallery-video',
  'posts_per_page' => -1,
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post();
    $galleryVideo = get_field("gallery_video_link");
    $galleryVideoTitle = get_field('gallery_video_title');
?>

<div class="galleryVideoContainer">
    <div class="galleryVideo roundBarWO">
        <?php echo $galleryVideo ?>
        <h4><?php echo esc_html($galleryVideoTitle); ?></h4>
    </div>
</div>


<?php
  endwhile;
endif;
wp_reset_postdata();
?>
        
    </section>

    
    
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>