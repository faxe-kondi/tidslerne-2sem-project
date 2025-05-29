<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tidslerne</title>
    <?php wp_head(); ?>
</head>
    <header>
      <section class="navbar">
  <div class="nav-content">

    <a href="<?php echo site_url('/home/'); ?>"> <img class="nav-Logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.webp"></a>
    
    <div class="nav-buttons">
      <button class="nav-btn medlemskab"><i class="fas fa-user"></i><a href="https://medlem.tidslerne.dk">Medlemskab</a></button>
<button id="toggle-search" class="nav-btn">
  <i class="fas fa-search"></i> Søg
</button>

<button class="nav-btn menu-toggle"><i class="fas fa-bars"></i> Menu</button>
</div>
</div>
</section>
<div id="search-bar" class="search-bar-container" style="position: relative;">
  <form id="ajax-search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <input type="search" id="ajax-search-input" name="s" placeholder="Search..." autocomplete="off" />
  </form>
  <div id="ajax-search-results"></div>
</div>
</header>

<div class="overlay" id="overlay"></div>

<nav class="dropdown-nav" id="dropdownNav">
  <ul class="menu">
    <li class="menu-item">
      <button class="menu-btn">Tidslerne <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="<?php echo site_url('/aboutpage/'); ?>">Hvem er Tidslerne </a></li>
        <li><a href="https://example.com/run2">Kontakt os</a></li>
        <li><a href="https://example.com/run2">Bestyrelsen</a></li>
        <li><a href="https://example.com/run2">Kredsene</a></li>
        <li><a href="https://example.com/run2">Bladet Tidslerne</a></li>
        

      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Artikler <span class="arrow">▶</span></button>
<ul class="submenu">
  <li><a href="/artikel-type/konventionel_behandling">Konventionel</a></li>
  <li><a href="/artikel-type/komplimentaer_behandling">Komplementær</a></li>
  <li><a href="/artikel-type/foelge_og_senskader">Følge og senskader</a></li>
  <li><a href="/artikel-type/kost_og_krop">Kost og krop</a></li>
  <li><a href="/artikel-type/patienthistorie">Patienthistorier</a></li>
</ul> 
    </li>
    <li class="menu-item">
      <button class="menu-btn">Arrangementer <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="https://tidslerne.nemtilmeld.dk">Kommende arrangementer</a></li>
        <li><a href="https://tidslerne.nemtilmeld.dk/previous/">Tidligere arrangementer</a></li>
        <li><a href="https://example.com/chest1">Vejledning ZOOM på Ipad</a></li>
        <li><a href="https://example.com/chest2">Vejledning ZOOM på PC</a></li>

      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Galleri <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="<?php echo site_url('/imagegallery/'); ?>">Billedgalleri</a></li>
        <li><a href="<?php echo site_url('/videogallery/'); ?>">Videogalleri</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Info <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="https://example.com/run2">Vedtægter</a></li>
        <li><a href="https://example.com/run2">Privatlivspolitik</a></li>
        <li><a href="https://example.com/run2">Søg legater</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Støt os <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="aboutSite.html">Merchandise</a></li>
        <li><a href="aboutSite.html">Donationer, gavebidrag og skattefradrag.</a></li>
        <li><a href="aboutSite.html">Donationer til Kræftforeningen Tidslerne via arv og testamente</a></li>
      </ul>
    </li>
        <li class="menu-item medlemskabbtn">
      <button class="menu-btn medlemskabbtn">Medlemskab <span class="arrow">▶</span></button>
    </li>
  </ul>
</nav>
<body <?php body_class(); ?>>
    