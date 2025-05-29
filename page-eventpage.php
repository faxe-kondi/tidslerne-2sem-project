<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

<section class="SiteBody">
        <div class="SiteImage">
            <img src="../img/COLOURBOX1.png" alt="">
            <div class="SiteImgGrad"></div>
        </div>
        <div class="SiteHeader">
            <p class="p1 !mb-[20px]">Home / Arrangementer</p>
            <h3 class="!mb-[20px]">Aktuelle arrangementer</h3>
            <p class="p2">å overblik over alle de spændende events i Esbjerg Kommune. Brug søgefunktionen til at finde det helt rigtige til dig.</p>
        </div>
    </section>

    <section class="eventSiteFilter roundBar ">
        <h4>Søg efter</h4>
        <div class="eventSiteFilterBox">
            <input class="roundBar outline outline-1 outline-gray-300 rounded-[10px] !p-[20px] w-[250px] bg-white" type="date" value="2025-06-01" />
            <div class="relative w-[250px] outline outline-1 outline-gray-300 rounded-[10px]">
                <select name="Kategori" id="category" class="roundBar appearance-none !p-[20px] pr-[40px] bg-white w-full h-full">
                    <option value="" disabled>Kategori</option>
                    <li><option value="Udendørs">Udendørs</option></li>
                    <li><option value="Forsamling">Forsamling</option></li>
                    <li><option value="Fordrag">Fordrag</option></li>
                    <li><option value="Børn">Børn</option></li>
                </select>
                <div class="pointer-events-none absolute top-1/2 right-4 transform -translate-y-1/2 text-gray-700">
                    ▼
                </div>
              </div>
            <form action="https://rule34.xxx/index.php?page=post&s=list&tags=nahida_%28genshin_impact%29+" class="flex">
               <div class="relative w-auto flex justify-between">
                    <i class="fa-solid fa-magnifying-glass absolute left-90 top-1/2 transform -translate-y-1/2 text-gray-400"></i>

                    <input
                        class="roundBar w-[400px] pl-10 pr-4 py-[20px] !p-[20px] bg-white bg-white border border-gray-300 focus:outline-none"
                        type="text"
                        placeholder="Hvad søger du efter?"
                        name="search"
                    >
                </div>
            </form>
            <button class="roundBar !p-[20px] w-40 bg-[#A880B9]" type="submit">
                    <p3>Søg</p3>
                </button>

            
        </div>
    </section>

    <section class="eventSiteCardsSection">
         
         <?php
                $args = array(
                  'post_type' => 'event',
                  'posts_per_page' => 12,
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
    <p><?php echo $eventPrice; ?>Gratis</p>
  </div>
<?php else : ?>
  <div class="eventSiteCardPToff">
    <p><?php echo $eventPrice; ?>.-</p>
  </div>
<?php endif; ?>
                        
                        <?php if ($eventStatus) : ?>
                            <div class="eventSiteCardBadge">
                                <p>Aflyst</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="eventSiteCardHeader rounded-bl-[10px] rounded-br-[10px]">
                        <h6><?php echo $eventConditions; ?></h6>
                        <h5 class="!pt-3"><?php echo $eventTitle; ?></h5>
                        <p><?php echo $eventDescription; ?></p>
                        <div class="grid !pt-[10px]">
                            <div class="flex">
                                <i class="fa-regular fa-calendar !pb-4 !pr-5"></i>
                                <p><?php echo $eventTime; ?></p>
                            </div>
                            <div class="flex">
                                <i class="fa-solid fa-location-dot !pr-5"></i>
                                <p><?php echo $eventLocation; ?></p>
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
    </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>