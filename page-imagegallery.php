<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <section class="articleOverviewBody">
        <div class="SiteImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tidsler.webp" alt="">
            <div class="SiteImgGrad"></div>
        </div>
        <div class="articleOverviewHeader">
            <h1 >Billedgalleri</h1>
            <p class="p2">Tag et kig rundt i Tidslernes billedgalleri og få et glimt af vores fællesskab, arrangementer og hverdagsglimt. Her kan du se, hvad vi går og laver – både stort og småt.</p>
          
          </div>
        </section>


    <section class="gallerySiteContent">
<?php
$args = array(
  'post_type' => 'gallery-image',
  'posts_per_page' => -1,
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post();
    $galleryImage = get_field("gallery_image");
    $galleryTitle = get_field('gallery_title');
?>

<div class="galleryImageContainer">
    <div class="galleryImage roundBarWO">
        <img src="<?php echo esc_url($galleryImage['url']); ?>" alt="<?php echo esc_attr($galleryImage['alt']); ?>">
        <h4><?php echo esc_html($galleryTitle); ?></h4>
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