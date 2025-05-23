<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <div class="carousel">
  <button class="carousel-btn left" onclick="moveSlide(-1)"><i class="fa-solid fa-chevron-left"></i></button>
  <div class="carousel-slides">
    <div class="heroContainer carousel-slide active" style="background-image: url('https://picsum.photos/1200/600?1');">
      <div class="heroContainerText">

        <div class="heroContainerTextText">
              <div class="heroContainerTextTextText">
                <p class="text-xl">Tidslerne 1</p>
                <p class="text-4xl">Kræft n shit</p>
                <p>luckily theres a family guy luckily there a man whopositively can do everything that makes us cry and cum hes a family guy</p>
              </div>   
         </div>

      </div>
    </div>
    <div class="heroContainer carousel-slide" style="background-image: url('https://picsum.photos/1200/600?2');">
      <div class="heroContainerText">
        <div class="heroContainerTextText">
              <div class="heroContainerTextTextText">
                <p class="text-xl">Tidslerne 2</p>
                <p class="text-4xl">Kræft n shit</p>
                <p>luckily theres a family guy luckily there a man whopositively can do everything that makes us cry and cum hes a family guy</p>
              </div>   
         </div>

      </div>
    </div>
    <div class="heroContainer carousel-slide" style="background-image: url('https://picsum.photos/1200/600?3');">
      <div class="heroContainerText">
        <div class="heroContainerTextText">
              <div class="heroContainerTextTextText">
                <p class="text-xl">Tidslerne 3</p>
                <p class="text-4xl">Kræft n shit</p>
                <p>luckily theres a family guy luckily there a man whopositively can do everything that makes us cry and cum hes a family guy</p>
              </div>   
         </div>
      </div>
    </div>
  </div>
  <button class="carousel-btn right" onclick="moveSlide(1)"><i class="fa-solid fa-chevron-right"></i></button>
  <div class="carousel-indicators">
    <span class="indicator active" onclick="goToSlide(0)"></span>
    <span class="indicator" onclick="goToSlide(1)"></span>
    <span class="indicator" onclick="goToSlide(2)"></span>
  </div>
</div>

<div class="aboutContainer">
  <div class="aboutImage">
    <img src="https://picsum.photos/400/300" alt="Tidslerne arrangement">
  </div>
  <div class="aboutContent">
    <h2 class="!text-3xl !text-[#404040]">Hvem er Tidslerne</h2>
    <p>Tidslerne er en frivillig kræftforening, der støtter mennesker, 
      som lever med senfølger efter kræft og kræftbehandling. Vi skaber
      fællesskab, forståelse og et trygt rum, hvor du ikke behøver forklare alt –
      her møder du andre, der ved, hvordan det føles. Gennem aktiviteter, samtale og
      videndeling arbejder vi for at bryde tabuer og give plads til livet efter kræft.</p>
    <a href="#" class="about-button">Læs mere →</a>
  </div>
</div>

<section class="stats-section">
  <div class="stats-container">
    <div class="stat">
<i class="fa-regular fa-calendar"></i>
      <h3>30+</h3>
      <p>År med støtte til kræftramte</p>
    </div>
    <div class="stat">
      <i class="fa-solid fa-people-group"></i>
      <h3>5600+</h3>
      <p>Døde af cancer</p>
    </div>
    <div class="stat">
      <i class="fa-regular fa-handshake"></i>
      <h3>100+</h3>
      <p>Arrangementer afholdt</p>
    </div>
  </div>
</section>



<section class="stories-section">
  <div class="section-breaker">
  <hr class="line">
  <h2 class="!text-4xl">Seneste patientshistorier</h2>
  <hr class="line">
</div>
  <div class="stories-grid">

    <a href="#">
      <div class="story-card">
        <img src="/img/sagi.jpg" alt="">
        <div class="story-content">
          <h3>Et Liv Forandret</h3>
          <p>En personlig fortælling om, hvordan en kræftdiagnose ændrede hverdagen og satte livet i perspektiv – fra chok til accept og håb.</p>
          <small>Skrevet af Dorthe Iversen | 17 Apr, 2026</small>
      </div>
    </div>
    </a>

    <a href="#">
      <div class="story-card">
        <img src="/img/sagi.jpg" alt="">
        <div class="story-content">
          <h3>Et Liv Forandret</h3>
          <p>En personlig fortælling om, hvordan en kræftdiagnose ændrede hverdagen og satte livet i perspektiv – fra chok til accept og håb.</p>
          <small>Skrevet af Dorthe Iversen | 17 Apr, 2026</small>
      </div>
    </div>
    </a>  
    
    
    <a href="#">
      <div class="story-card">
        <img src="/img/sagi.jpg" alt="">
        <div class="story-content">
          <h3>Et Liv Forandret</h3>
          <p>En personlig fortælling om, hvordan en kræftdiagnose ændrede hverdagen og satte livet i perspektiv – fra chok til accept og håb.</p>
          <small>Skrevet af Dorthe Iversen | 17 Apr, 2026</small>
      </div>
    </div>
    </a>

  </div>
    <a href="#" class="custom-button">Se mere</a>
</section>

  




  <section class="eventSiteAssNigger">
    <div class="section-breaker">
  <hr class="line">
  <h2 class="!text-4xl">Kommende arrangementer</h2>
  <hr class="line">
</div>
    <div class="eventSiteCardsSection">
 <div class="eventSiteCard cursor-pointer">
            <a href="https://tidslerne.nemtilmeld.dk/461/">
                <div class="eventSiteCardWhole roundBar">
                    <div class="eventSiteCardImage">
                        <img src="../img/sagi.jpg" alt="" class="rounded-tl-[10px] rounded-tr-[10px]">
    
                        <div class="eventSiteCardPT !hidden">
                            <p>Gratis</p>
                        </div>
                        <div class="eventSiteCardPToff">
                            <p>50,-</p>
                        </div>
                        
                        <div class="eventSiteCardBadge">
                            <p>Aflyst</p>
                        </div>
                    </div>
                    <div class="eventSiteCardHeader rounded-bl-[10px] rounded-br-[10px]">
                        <h6>Udendørs</h6>
                        <h5 class="!pt-3">Kaffemik hos Rikke Rix</h5>
                        <p>Tag med ud at drikke kaffe med Rikke blah blah blah...</p>
                        <div class="grid !pt-[10px]">
                            <div class="flex">
                                <i class="fa-regular fa-calendar !pb-4 !pr-5"></i>
                                <p>Torsdag d. 15. maj 2025 kl. 14:00 til 16:00</p>
                            </div>
                            <div class="flex">
                                <i class="fa-solid fa-location-dot !pr-5"></i>
                                <p>Mozartsvej 13 2450 København SV</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </a>
        </div> 
 
            <div class="eventSiteCard cursor-pointer">
                <a href="https://tidslerne.nemtilmeld.dk/461/">
                    <div class="eventSiteCardWhole roundBar">
                        <div class="eventSiteCardImage">
                            <img src="../img/sagi.jpg" alt="" class="rounded-tl-[10px] rounded-tr-[10px]">
        
                            <div class="eventSiteCardPT !hidden">
                                <p>Gratis</p>
                            </div>
                            <div class="eventSiteCardPToff">
                                <p>50,-</p>
                            </div>
                            
                            <div class="eventSiteCardBadge">
                                <p>Aflyst</p>
                            </div>
                        </div>
                        <div class="eventSiteCardHeader rounded-bl-[10px] rounded-br-[10px]">
                            <h6>Udendørs</h6>
                            <h5 class="!pt-3">Kaffemik hos Rikke Rix</h5>
                            <p>Tag med ud at drikke kaffe med Rikke blah blah blah...</p>
                            <div class="grid !pt-[10px]">
                                <div class="flex">
                                    <i class="fa-regular fa-calendar !pb-4 !pr-5"></i>
                                    <p>Torsdag d. 15. maj 2025 kl. 14:00 til 16:00</p>
                                </div>
                                <div class="flex">
                                    <i class="fa-solid fa-location-dot !pr-5"></i>
                                    <p>Mozartsvej 13 2450 København SV</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </a>
            </div> 
                
        
        <div class="eventSiteCard cursor-pointer">
            <a  href="https://tidslerne.nemtilmeld.dk/461/">
               <div class="eventSiteCardWhole roundBar">
                    <div class="eventSiteCardImage">
                        <img src="../img/sagi.jpg" alt=""  class="rounded-tl-[10px] rounded-tr-[10px]">
                        <div class="eventSiteCardPT">
                            <p>Gratis</p>
                        </div>
                        <div class="eventSiteCardPToff !hidden">
                            <p>50,-</p>
                        </div> 
                        
                        <div class="eventSiteCardBadge !hidden">
                            <p>Aflyst</p>
                        </div>
                    </div>
                    <div class="eventSiteCardHeader rounded-bl-[10px] rounded-br-[10px]">
                        <h6>Udendørs</h6>
                        <h5 class="!pt-3">Kaffemik hos Rikke Rix</h5>
                        <p>Tag med ud at drikke kaffe med Rikke blah blah blah...</p>
                        <div class="grid !pt-[10px]">
                            <div class="flex">
                                <i class="fa-regular fa-calendar !pb-4 !pr-5"></i>
                                <p>Torsdag d. 15. maj 2025 kl. 14:00 til 16:00</p>
                            </div>
                            <div class="flex">
                                <i class="fa-solid fa-location-dot !pr-5"></i>
                                <p>Mozartsvej 13 2450 København SV</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </a>
        </div>
    </div>
       
            <a href="#" class="custom-button">Se mere</a>
 </section>


<section class="LatestArticles">  
   <div class="section-breaker">
  <hr class="line">
  <h2 class="!text-4xl">Seneste artikler</h2>
  <hr class="line">
</div>
  <div class="card-container"> 

    <a href="#">
      <div class="card">
        <div class="image-container">
          <img src="../img/sagi.jpg" alt="" />
          <div class="label">Komplementær behandling</div>
        </div>
        <h2>Nammam appelsin</h2>
        <p class="date">14. januar 2024</p>
        <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
      </div>
    </a>
    <a href="#">
      <div class="card">
        <div class="image-container">
          <img src="../img/sagi.jpg" alt="" />
          <div class="label">Komplementær behandling</div>
        </div>
        <h2>Nammam appelsin</h2>
        <p class="date">14. januar 2024</p>
        <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
      </div>
    </a>    <a href="#">
      <div class="card">
        <div class="image-container">
          <img src="../img/sagi.jpg" alt="" />
          <div class="label">Komplementær behandling</div>
        </div>
        <h2>Nammam appelsin</h2>
        <p class="date">14. januar 2024</p>
        <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
      </div>
    </a>    <a href="#">
      <div class="card">
        <div class="image-container">
          <img src="../img/sagi.jpg" alt="" />
          <div class="label">Komplementær behandling</div>
        </div>
        <h2>Nammam appelsin</h2>
        <p class="date">14. januar 2024</p>
        <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
      </div>
    </a>
</div>  
    <a href="#" class="custom-button">Se mere</a>
</section>






<div class="support">
  <div class="support-box">

     <div class="section-breaker">
      <hr class="line">
      <h2 class="!text-4xl">Støt Tidslerne</h2>
      <hr class="line">
    </div>

    <p class="font-bold">
      Støt – og stå sammen med os<br>
      Som medlem er du med til at styrke fællesskabet for kræftramte og pårørende.<br> </p>
      <br>
      <p>Dit medlemskab hjælper os med at drive hjemmesiden, udgive artikler og arrangere fælles aktiviteter.<br>
      Det koster 100 kr. det første år – og gør en stor forskel.
    </p>

      <a href="#" class="custom-button">Læs mere →</a>

  </div>
</div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>