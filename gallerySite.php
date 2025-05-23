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

    <section class="gallerySiteContent">
        <img src="../img/sagi.jpg" alt="" class="roundBarWO">
        <img src="../img/Sagiri_Izumi_anime.png" alt="" class="roundBarWO">
        <img src="../img/sasass.jpg" alt="" class="roundBarWO">
        <img src="../img/SagiriIzumi.png" alt="" class="roundBarWO">
        <img src="../img/sagiri_izumi.png" alt="" class="roundBarWO">
        <img src="../img/images.jpg" alt="" class="roundBarWO">
        <img src="../img/hottt.png" alt="" class="roundBarWO">
        <img src="../img/sgiig.jpg" alt="" class="roundBarWO">
    </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>