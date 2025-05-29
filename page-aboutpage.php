<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

                <?php
                    $omOsBillede = get_field("om_os_billede");
                    $omOsTekst = get_field("om_os_tekst");
                    $omOsMissionTekst = get_field("om_os_mission_tekst");
                    $omOsHistorieTekst = get_field("om_os_historie_tekst");
                    $omOsLedelseTekst = get_field("om_os_ledelse_tekst");
                    $omOsLedelseBillede = get_field("om_os_ledelse_billede");
                ?>

    <section class="SiteBody">
        <div class="SiteImage">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tidsler.webp" alt="Tidslerne baggrundsbillede">
            <div class="SiteImgGrad"></div>
        </div>

        <div class="SiteHeaderAbout roundBar">
            
            <div class="SiteHeaderAboutBox">
                <div class="SiteHeaderAboutBoxText">
                    <h3 class="">Om os</h3>
                    <p> <?php echo ($omOsTekst); ?></p>
                </div>
    
                <div class="SiteHeaderAboutBoxImage">
                    <img src="<?php echo ($omOsBillede)["url"]; ?>" alt="<?php echo ($omOsBillede)["alt"]; ?>" class="roundBar">
                </div>
            </div>
        </div>
   


    <section class="SiteBodyTwoBoxs">
        <div class="SiteBodyTwoLeft roundBar">
            <div class="SiteBodyTwoLeftBox">
                <h4>Vores mission</h4>
                <?php echo ($omOsMissionTekst);?>
            </div>
        </div>

        <div class="SiteBodyTwoRight roundBar">
            <div class="SiteBodyTwoRightBox ">
                <h4>Vores historie</h4>
                <?php echo ($omOsHistorieTekst);?>
            </div>
        </div>
    </section>

    <section class="SiteBodyMiddleBox roundBar">
        <div class="SiteBodyMiddleBoxImg">
            <img src="<?php echo ($omOsLedelseBillede)["url"]; ?>" alt="<?php echo ($omOsLedelseBillede)["alt"]; ?>">
        </div>

        <div class="SiteBodyMiddleBoxText">
            <h4>Vores ledelse</h4>
            <p> <?php echo ($omOsLedelseTekst); ?></p>
        </div>
    </section>
     </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>