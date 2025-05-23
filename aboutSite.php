<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

    <section class="SiteBody">
        <div class="SiteImage">
            <img src="../img/COLOURBOX1.png" alt="">
            <div class="SiteImgGrad"></div>
        </div>

        <div class="SiteHeaderAbout roundBar">
            <p class="p1 !mb-[20px]">Hjem / Om os</p>
            <h3 class="!mb-[20px]">Om os</h3>

            <div class="SiteHeaderAboutBox">
                <div class="SiteHeaderAboutBoxText">
                    <p class="p2">
                    På siden kan du se billeder, der følger patientens rejse gennem kræftforløbet. 
                    Billederne giver et visuelt indblik i stemninger, situationer og vigtige øjeblikke i historien.
                    På siden kan du se billeder, der følger patientens rejse gennem kræftforløbet. 
                    Billederne giver et visuelt indblik i stemninger, situationer og vigtige øjeblikke i historien.
                    På siden kan du se billeder, der følger patientens rejse gennem kræftforløbet. 
                    Billederne giver et visuelt indblik i stemninger, situationer og vigtige øjeblikke i historien. 
                    På siden kan du se billeder, der følger patientens rejse gennem kræftforløbet. 
                    Billederne giver et visuelt indblik i stemninger, situationer og vigtige øjeblikke i historien.På siden kan du se billeder, der følger patientens rejse gennem kræftforløbet. 
                    Billederne giver et visuelt indblik i stemninger, situationer og vigtige øjeblikke i historien.
                    </p>
                </div>

    
                <div class="SiteHeaderAboutBoxImage">
                    <img src="../img/COLOURBOX1.png" alt="" class="roundBar">
                    <div class="ImgInfoBoxs ">
                        <div class="InfoBox roundBar">5.069<br><span>Medlemmer</span></div>
                        <div class="InfoBox roundBar">20 år<br><span>Tidslerne</span></div>
                        <div class="InfoBox roundBar">Frivillige<br><span>Organisation</span></div>
                        <div class="InfoBox roundBar">30+<br><span>Samarbejdspartnere</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SiteBodyTwoBoxs">
        <div class="SiteBodyTwoLeft roundBar">

            <div class="SiteBodyTwoLeftBox">
                <h6>Vores mission</h6>
                <h4>Vores mission</h4>
                <p>Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
                Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen
                 Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen.
            Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
                Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdom.</p>
            </div>
        </div>

        <div class="SiteBodyTwoRight roundBar">
            <div class="SiteBodyTwoRightBox ">
                <h6>Vores mission</h6>
                <h4>Vores mission</h4>
                <p>Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
                Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen.
            Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
                Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen.
            Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
                Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen.</p>
            </div>
        </div>
    </section>

    <section class="SiteBodyMiddleBox roundBar">
        <div class="SiteBodyMiddleBoxImg">
            <img src="../img/sasass.jpg" alt="">
        </div>

        <div class="SiteBodyMiddleBoxText">
            <h6>Vores mission</h6>
            <h4>Vores mission</h4>
            <p>Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
            Vores mål er at gøre en forskel i livet for dem, der er berørt af sygdommen.
            Vi ønsker at skabe et fællesskab, hvor mennesker med kræft kan finde støtte og forståelse. 
            </p>
        </div>
    </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>