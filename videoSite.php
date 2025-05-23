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

    <section class="videoSection">
        <div class="!mb-16">
            <div class="videoSectionHeader">
                <h5>pookssssssssssssssie</h5>
            </div>
            <div class="videoSectionContent">
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/LO5IzYZozH0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="!mb-16">
            <div class="videoSectionHeader">
                <h5>pookssssssssssssssie</h5>
            </div>
            <div class="videoSectionContent">
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/LO5IzYZozH0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="videoContainer">
                    <iframe src="https://www.youtube.com/embed/fvHMcK3BVI4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        

        
    </section>

            <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>