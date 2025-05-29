<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <section class="articleOverviewBody">
        <div class="SiteImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tidsler.webp" alt="">
            <div class="SiteImgGrad"></div>
        </div>
        <div class="articleOverviewHeader">
            <h1 >Artikel oversigt</h1>
            <p class="p2">Her finder du alle Tidslernes artikler – fra refleksioner og praksisnære erfaringer til indsigter og idéer, der kan sætte nye tanker i gang. Brug søgefunktionen til at finde det helt rigtige til dig.</p>
          
          </div>
        </section>
        
        
        <section class="stories-section-overview">
          
          <section class="articleOverviewFilterSection roundBar !shadow-none">
        <form action="filter" class="flex">
                     <div class="relative w-auto flex justify-between">
                       <i class="fa-solid fa-magnifying-glass absolute top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                       
                       <input id="dynamic-filter"
                       class="articleOverviewFilter roundBar pl-10 pr-4 py-[20px] !p-[20px] bg-white border border-gray-300 focus:outline-none"
                       type="text"
                       placeholder="Hvad søger du efter?"
                       name="search"
                       >
                      </div>
                  </form>
          </section>
  <div class="stories-grid-overview">

 <?php
 $term = get_queried_object();
$term_slug = $term->slug;

$args = array(
  'post_type' => 'artikel',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'artikel-type',
      'field'    => 'slug',
      'terms'    => 'patienthistorie',
      'operator' => 'NOT IN',
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

<a href="<?php the_permalink(); ?>"
  class="story-card-data"
   data-title="<?php echo esc_attr($articleTitle); ?>"
   data-description="<?php echo esc_attr($articleDescription); ?>"
   data-author="<?php echo esc_attr($articleAuthor); ?>"
   data-date="<?php echo esc_attr($articleDate); ?>"
   data-category="<?php echo esc_attr($categoryLabel); ?>">

      <div class="story-card-overview">
        <div class="image-container-overview">
            <img src="<?php echo esc_url($articleImage["url"]); ?>" alt="<?php echo esc_attr($articleImage["alt"]); ?>">
            <div class="label"><?php echo esc_html($categoryLabel); ?></div>
        </div>
        <div class="story-content">
          <h4><?php echo $articleTitle; ?></h4>
          <p><?php echo $articleDescription; ?></p>
          <small>Skrevet af <?php echo $articleAuthor; ?> | <?php echo $articleDate; ?></small>
      </div>
    </div>
    </a>
              <?php
                endwhile;
                endif;
                wp_reset_postdata();
              ?>
</section>


        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>