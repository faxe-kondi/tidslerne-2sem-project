<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tidslerne</title>
    <?php wp_head(); ?>
</head>
    <header class="navbar">
  <div class="nav-content">

    <a href="index.html"><img class="nav-Logo" src="img/Tidslerne.png" alt=""></a>
    
    <div class="nav-buttons">
      <button class="nav-btn"><i class="fas fa-user"></i><a href="https://medlem.tidslerne.dk">Login</a></button>
      <button class="nav-btn"><i class="fas fa-search"></i> Search</button>
      <button class="nav-btn menu-toggle"><i class="fas fa-bars"></i> Menu</button>
    </div>
  </div>
</header>

<div class="overlay" id="overlay"></div>

<nav class="dropdown-nav" id="dropdownNav">
  <ul class="menu">
    <li class="menu-item">
      <button class="menu-btn">Tidslerne <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="https://example.com/run1">Hvem er Tidslerne </a></li>
        <li><a href="https://example.com/run2">Kontakt os</a></li>
        <li><a href="https://example.com/run2">Vedtægter</a></li>
        <li><a href="https://example.com/run2">Bestyrelsen</a></li>
        <li><a href="https://example.com/run2">Kredsene</a></li>
        <li><a href="https://example.com/run2">Støt Tidslerne</a></li>
        <li><a href="https://example.com/run2">Bladet Tidslerne</a></li>
        

      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Behandling <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="">Konventionel</a></li>
        <li><a href="">Komplementær</a></li>
        <li><a href="">Behandling i udlandet</a></li>
        <li><a href="">Cannabis</a></li>
        <li><a href="">Patienthistorier</a></li>
        <li><a href="">Følge og senskader</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Kost & krop <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="aboutSite.html">Hvem er Tidslerne </a></li>
        <li><a href="https://example.com/run2">Kontakt os</a></li>
        <li><a href="https://example.com/run2">Vedtægter</a></li>
        <li><a href="https://example.com/run2">Bestyrelsen</a></li>
        <li><a href="https://example.com/run2">Kredsene</a></li>
        <li><a href="https://example.com/run2">Støt tidslerne</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Arrangementer <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="https://example.com/chest1">Pecs</a></li>
        <li><a href="https://example.com/chest2">Bench Press</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Galleri <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="gallerySite.html">Speech</a></li>
        <li><a href="videoSite.html">Hat</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <button class="menu-btn">Info <span class="arrow">▶</span></button>
      <ul class="submenu">
        <li><a href="aboutSite.html">Om os</a></li>
      </ul>
    </li>
  </ul>
</nav>
<body>
    