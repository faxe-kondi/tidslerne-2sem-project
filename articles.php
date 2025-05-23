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
<!--  -->

<div class="card-container"> 

 <div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

 <div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

<div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

<div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

 <div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

 <div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

<div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

<div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

<div class="card">
  <div class="image-container">
    <img src="../img/sagi.jpg" alt="" />
    <div class="label">Komplementær behandling</div>
  </div>
  <h2>Nammam appelsin</h2>
  <p class="date">14. januar 2024</p>
  <p class="body">æblemand kom inden i æblemand kom inden i giv mig dine børn inden i mig</p>
</div>

</div>  

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>