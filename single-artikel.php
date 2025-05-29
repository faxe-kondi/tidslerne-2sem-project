<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>


                 <?php
                        $articleImage = get_field("artikel_billede");   
                        $articleTitle = get_field('artikel_titel');
                        $articleText = get_field('artikel_tekst');
                        $articleAuthor = get_field('artikel_forfatter');
                        $articleDate = get_field('artikel_dato');
                        $articleCategory = get_field('artikel_type');
                        

                        if ($articleCategory) {
                            if (is_object($articleCategory)) {
                            $categoryLabel = $articleCategory->name;
                            $categoryLink = get_term_link($articleCategory);
                        }
                        }
            ?>

<section class="articleSite">
        <div>
                <h2>    <a href="<?php echo esc_url($categoryLink); ?>">
                    <?php echo esc_html($categoryLabel); ?>
                </a></h2>
            <h1><?php echo esc_html($articleTitle); ?></h1>
            <div class="articleSiteCategory">
<?php
$tags = get_field('artikel_tags');

if (!empty($tags) && is_array($tags)) : ?>
    <div class="articleSiteCategory">
        <?php foreach ($tags as $tag) : ?>
            <span class="articleCategoryBox"><?php echo esc_html($tag->name); ?></span>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
            </div>
        </div>



<?php if ($categoryLabel !== 'Information') : ?>
  <div class="articleImgBox">
    <img src="<?php echo esc_url($articleImage['url']); ?>" alt="<?php echo esc_attr($articleImage['alt']); ?>">
  </div>
<?php endif; ?>
        
        <div class="articleSiteSetup">
            <div class="articleAuthorText">
                <div>
                    <p class="text-xs">Skrevet af</p>
                    <p class="font-semibold"><?php echo esc_html($articleAuthor); ?></p>
                </div>
                <div class="text-xs font-medium text-gray-600">
                    <?php echo esc_html($articleDate); ?>
                </div>
            </div>

            <p class="!mt-4">
                        <?php echo ($articleText); ?>
                    </p>

            <div class="!mt-12.5">
                <div class="articleDel">
                    <div class="articleBorder flex-grow"></div>
                    <span class="articleDelText">Del artiklen</span>
                    <div class="articleBorder flex-grow"></div>
                </div>
            </div>

            <div class="!mt-4">
                <div class="articleSocialMedia">
                    <a href="#" class="articleSocialMediaIconFB"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="articleSocialMediaIconYT"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="articleSocialMediaIconX"><i class="fa-brands fa-x"></i></a>
                    <a href="#" class="articleSocialMediaIconLN"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="!mt-37.5 !mb-27.5">
<div class="section-breaker">
  <hr class="line">
  <h3>Relaterede artikler</h3>
  <hr class="line">
</div>
  <div class="card-container"> 
<?php
$articleCategory = get_field('artikel_type');

if ($articleCategory && is_object($articleCategory)) {
    $mainCategorySlug = $articleCategory->slug;     
}

$args = array(
    'post_type' => 'artikel',
    'posts_per_page' => 4,
    'post__not_in' => array(get_the_ID()),
    'tax_query' => array(
        array(
            'taxonomy' => 'artikel-type', 
            'field'    => 'slug',
            'terms'    => $mainCategorySlug,
        ),
    ),
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post();
    $articleImage = get_field("artikel_billede");
    $articleTitle = get_field('artikel_titel');
    $articleDescription = get_field('artikel_kort_beskrivelse');
    $articleAuthor = get_field('artikel_forfatter');
    $articleDate = get_field('artikel_dato');
    $articleCategory = get_field('artikel_type');

    if ($articleCategory) {
        if (is_object($articleCategory)) {
        $categoryLabel = $articleCategory->name;
      }
    }
?>

    <a href="<?php the_permalink(); ?>">
      <div class="card">
        <div class="image-container">
            <img src="<?php echo esc_url($articleImage["url"]); ?>" alt="<?php echo esc_attr($articleImage["alt"]); ?>">
            <div class="label"><?php echo esc_html($categoryLabel); ?></div>
        </div>
        <h4><?php echo esc_html($articleTitle); ?></h4>
        <p class="body"><?php echo esc_html($articleDescription); ?></p>
        <small class="smallArticleTop">Skrevet af <?php echo esc_html($articleAuthor); ?></small>
        <small><?php echo esc_html($articleDate); ?></small>
      </div>
    </a>

<?php
  endwhile;
endif;
wp_reset_postdata();
?>


            
            </div>

        </div>
        
    </section>

            <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>