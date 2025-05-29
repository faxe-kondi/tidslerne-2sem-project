<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

         <?php
                $homeAboutText = get_field("home_about_text");
                $homeAboutImage = get_field("home_about_image");
            ?>


        <div class="carousel">
          <button class="carousel-btn left" onclick="moveSlide(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="carousel-slides">

              <?php
                $args = array(
                  'post_type' => 'artikel',
                  'posts_per_page' => 3,
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                  while ($loop->have_posts()) : $loop->the_post();
                    $articleImage = get_field("artikel_billede");
                    $articleTitle = get_field('artikel_titel');
                    $articleDescription = get_field('artikel_kort_beskrivelse');
                    $articleCategory = get_field('artikel_type');

                        if ($articleCategory) {
                            if (is_object($articleCategory)) {
                            $categoryLabel = $articleCategory->name;
                            $categoryLink = get_term_link($articleCategory);
                        }
                        }
                    ?>
              
              <div class="heroContainer carousel-slide active" style="background-image: url('<?php echo ($articleImage)["url"]; ?>" alt="<?php echo ($articleImage)["alt"]; ?>');">
                <div class="heroContainerOverlay">
                  <div class="heroContainerTextArea">
                    <div class="heroContainerTextAreaContent">
                      <h3>    <a href="<?php echo esc_url($categoryLink); ?>">
                          <?php echo esc_html($categoryLabel); ?>
                      </a></h3>
            <h2 class="text-4xl"><?php echo $articleTitle; ?></h2>
            <p><?php echo $articleDescription; ?></p>
            <a href="<?php the_permalink(); ?>" class="hero-button">Læs artiklen →</a>
        </div>
      </div>
    </div>
  </div>
              <?php
                endwhile;
                endif;
                wp_reset_postdata();
              ?>

    </div>
    <button class="carousel-btn right" onclick="moveSlide(1)"><i class="fa-solid fa-chevron-right"></i></button>
    <div class="carousel-indicators">
      <span class="indicator active" onclick="goToSlide(0)"></span>
      <span class="indicator" onclick="goToSlide(1)"></span>
      <span class="indicator" onclick="goToSlide(2)"></span>
    </div>
  </div>
</div>

<div class="aboutContainer">
  <div class="aboutImage">
    <img src="<?php echo ($homeAboutImage)["url"]; ?>" alt="<?php echo ($homeAboutImage)["alt"]; ?>">
  </div>
  <div class="aboutContent">
    <h3>Hvem er Tidslerne</h3>
    <p><?php echo $homeAboutText; ?></p>
    <a href="<?php echo site_url('/aboutpage/'); ?>" class="about-button">Læs mere →</a>
  </div>
</div>

<section class="stats-section">
  <div class="stats-container">
    <div class="stat">
<i class="fa-regular fa-calendar"></i>
      <p>30+</p>
      <h5>År med støtte til kræftramte</h5>
    </div>
    <div class="stat">
      <i class="fa-solid fa-people-group"></i>
      <p>5600+</p>
      <h5>Medlemmer i fællesskabet</h5>
    </div>
    <div class="stat">
      <i class="fa-regular fa-handshake"></i>
      <p>100+</p>
      <h5>Arrangementer afholdt</h5>
    </div>
  </div>
</section>



<section class="stories-section">
  <div class="section-breaker">
  <hr class="line">
  <h3>Seneste patientshistorier</h3>
  <hr class="line">
</div>
  <div class="stories-grid">

      <?php
$args = array(
  'post_type' => 'artikel',
  'posts_per_page' => 3,
  'tax_query' => array(
    array(
      'taxonomy' => 'artikel-type',
      'field'    => 'slug',
      'terms'    => 'patienthistorie',
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
              ?>
    <a href="<?php the_permalink(); ?>">
      <div class="story-card">
        <img src="<?php echo ($articleImage)["url"]; ?>" alt="<?php echo ($articleImage)["alt"]; ?>">
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
              </div>
              <a href="/artikel-type/patienthistorie" class="section-button">Se mere →</a>
</section>

  




  <section class="eventsHome">
    <div class="section-breaker">
  <hr class="line">
  <h3>Kommende arrangementer</h3>
  <hr class="line">
</div>
    <div class="eventSiteCardsSection">


              <?php
                $args = array(
                  'post_type' => 'event',
                  'posts_per_page' => 3,
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                  while ($loop->have_posts()) : $loop->the_post();
                    $eventImage = get_field("event_image");
                    $eventTitle = get_field("event_title");
                    $eventDescription = get_field('event_description');
                    $eventTime = get_field('event_time');
                    $eventLocation = get_field("event_location");
                    $eventStatus = get_field('event_status');
                    $eventConditions = get_field('event_conditions');
                    $eventPrice = get_field('event_price');
                    $eventLink = get_field('event_link');
              ?>

 <div class="eventSiteCard cursor-pointer">
              <a href="<?php echo esc_url($eventLink['url']); ?>">
                <div class="eventSiteCardWhole roundBar">
                    <div class="eventSiteCardImage">
                        <img src="<?php echo ($eventImage)["url"]; ?>" alt="<?php echo ($eventImage)["alt"]; ?>" class="rounded-tl-[10px] rounded-tr-[10px]">
    
                          <?php if ($eventPrice < 1) : ?>
                            <div class="eventSiteCardPT">
                              <h5><?php echo $eventPrice; ?>Gratis</h5>
                            </div>
                          <?php else : ?>
                            <div class="eventSiteCardPToff">
                              <h5><?php echo $eventPrice; ?>.-</h5>
                            </div>
                          <?php endif; ?>
                          
                          <?php if ($eventStatus) : ?>
                              <div class="eventSiteCardBadge">
                                  <h5>Aflyst</h5>
                              </div>
                          <?php endif; ?>
                    </div>
                    <div class="eventSiteCardHeader rounded-bl-[10px] rounded-br-[10px]">
                        <h6><?php echo $eventConditions; ?></h6>
                        <h4 class="!pt-3"><?php echo $eventTitle; ?></h4>
                        <p><?php echo $eventDescription; ?></p>
                        <div class="grid !mt-[auto] !pt-[10px]">
                            <div class="flex">
                                <i class="fa-regular fa-calendar !pb-5 !pr-5"></i>
                                <small><?php echo $eventTime; ?></small>
                            </div>
                            <div class="flex">
                                <i class="fa-solid fa-location-dot !pr-5"></i>
                                <small><?php echo $eventLocation; ?></small>
                            </div>
                        </div>
                    </div>
                </div>  
            </a>
        </div> 
 
              <?php
                endwhile;
                endif;
                wp_reset_postdata();
              ?>
    </div>
            <a href="https://tidslerne.nemtilmeld.dk" class="section-button">Se mere →</a>
 </section>


<section class="LatestArticles">  
   <div class="section-breaker">
  <hr class="line">
  <h3>Seneste artikler</h3>
  <hr class="line">
</div>
  <div class="card-container"> 

<?php
$args = array(
  'post_type' => 'artikel',
  'posts_per_page' => 4,
  'tax_query' => array( 
    array(
      'taxonomy' => 'artikel-type',
      'field'    => 'slug',
      'terms'    => array('patienthistorie', 'information'),
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
<a href="<?php echo site_url('/articlearchive/'); ?>" class="section-button">Se mere →</a>

</section>


<section class="newsLetterSection">
  
  <div class="newsLetterContainer">

    <div class="section-breaker">
      <hr class="line">
      <h3>Tilmeld vores nyhedsbrev</h3>
      <hr class="line">
    </div>

    <div class="newsLetterContainerText">
      <p>Få de seneste nyheder, eksklusive tilbud og inspiration direkte i din indbakke - like og følg vores nyhedsbrev i dag!</p>
    </div>

<div class="newsletterSignup">
  <form id="customNewsletterForm" method="post">
    <div class="newsletterInputWrapper">
      <i class="fa-regular fa-envelope"></i>
      <input
        type="email"
        name="ne"
        class="newsletterInput"
        placeholder="Indtast din e-mail"
        required
      >
    </div>
    <input type="hidden" name="nr" value="widget">
    <input type="hidden" name="nlang" value="">
    <input type="hidden" name="ns" value="">
    <input type="hidden" name="action" value="subscribe">
    <input type="hidden" name="nl[]" value="1"> <!-- list ID -->
    <button type="submit" class="newsletterButton">Tilmeld</button>
  </form>
  <div id="newsletterMessage" class="mt-2"></div>
</div>
  </div>
</section>


<div class="support">
  <div class="support-box">

     <div class="section-breaker">
      <hr class="line">
      <h3>Støt Tidslerne</h3>
      <hr class="line">
    </div>

    <p class="font-bold">
      Støt – og stå sammen med os<br>
      Som medlem er du med til at styrke fællesskabet for kræftramte og pårørende.<br> </p>
      <br>
      <p>Dit medlemskab hjælper os med at drive hjemmesiden, udgive artikler og arrangere fælles aktiviteter.<br>
      Det koster 100 kr. det første år – og gør en stor forskel.
    </p>

      <a href="#" class="support-button">Læs mere →</a>

  </div>
</div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>