document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById("toggle-search");
  const searchBar = document.getElementById("search-bar");
  const input = searchBar.querySelector("input");

  toggleBtn.addEventListener("click", () => {
    searchBar.classList.toggle("show");
    if (searchBar.classList.contains("show")) {
      setTimeout(() => input.focus(), 300);
    }
  });

  const ajaxInput = document.getElementById("ajax-search-input");
  const resultsContainer = document.getElementById("ajax-search-results");

  ajaxInput.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
    }
  });

  ajaxInput.addEventListener("input", function () {
    const query = ajaxInput.value.trim();

    if (query.length < 2) {
      resultsContainer.style.display = "none";
      return;
    }

    fetch(`${ajaxSearch.ajax_url}?action=ajax_search&search=${encodeURIComponent(query)}`)
      .then(response => response.text())
      .then(data => {
        resultsContainer.innerHTML = data;
        resultsContainer.style.display = "block";
      });
  });

  const menuToggle = document.querySelector('.menu-toggle');
  const dropdownNav = document.getElementById('dropdownNav');
  const overlay = document.getElementById('overlay');

  menuToggle.addEventListener('click', () => {
    const isOpen = dropdownNav.classList.contains('open');
    dropdownNav.classList.toggle('open', !isOpen);
    overlay.classList.toggle('show', !isOpen);
    document.body.classList.toggle('no-scroll', !isOpen);
  });

  overlay.addEventListener('click', () => {
    dropdownNav.classList.remove('open');
    overlay.classList.remove('show');
    document.body.classList.remove('no-scroll');
  });

  document.querySelectorAll('.menu-btn').forEach(button => {
    button.addEventListener('click', () => {
      const menuItem = button.parentElement;
      const submenu = menuItem.querySelector('.submenu');
      const isOpen = submenu.style.display === 'block';
      submenu.style.display = isOpen ? 'none' : 'block';
      menuItem.classList.toggle('open', !isOpen);
    });
  });

  let lastScrollY = window.scrollY;
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > lastScrollY) {
      navbar.style.transform = 'translateY(-100%)';
    } else {
      navbar.style.transform = 'translateY(0)';
    }
    navbar.style.transition = 'transform 0.3s';
    lastScrollY = window.scrollY;
  });

  // Fade-in animation
  const observerFadeIn = (selector) => {
    const element = document.querySelector(selector);
    if (!element) return;
    element.style.opacity = 0;
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          anime({
            targets: element,
            translateY: '-4rem',
            opacity: [0, 1],
            easing: 'easeInOutQuad',
            duration: 500,
          });
          observer.unobserve(element);
        }
      });
    }, { threshold: 0.5 });
    observer.observe(element);
  };

  observerFadeIn('.stories-section');
  observerFadeIn('.eventsHome');
  observerFadeIn('.LatestArticles');



  const filterInput = document.getElementById("dynamic-filter");
  if (filterInput) {
    const cards = document.querySelectorAll(".story-card-data");
    const form = filterInput.closest("form");

    filterInput.addEventListener("keydown", function (e) {
      if (e.key === "Enter") {
        e.preventDefault();
      }
    });

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
      });
    }

    filterInput.addEventListener("input", function () {
      const query = filterInput.value.toLowerCase().trim();

      cards.forEach(card => {
        const title = card.dataset.title?.toLowerCase() || "";
        const description = card.dataset.description?.toLowerCase() || "";
        const author = card.dataset.author?.toLowerCase() || "";
        const date = card.dataset.date?.toLowerCase() || "";
        const category = card.dataset.category?.toLowerCase() || "";

        const match =
          title.includes(query) ||
          description.includes(query) ||
          author.includes(query) ||
          category.includes(query) ||
          date.includes(query);

        card.style.display = match ? "block" : "none";
      });
    });
  }

document.getElementById("customNewsletterForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  fetch("/?na=s", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(html => {
    const msgBox = document.getElementById("newsletterMessage");

    const htmlLower = html.toLowerCase();

    if (htmlLower.includes("flood detected")) {
      msgBox.textContent = "Du har allerede forsøgt. Vent venligst lidt og prøv igen.";
      msgBox.style.color = "orange";
    } else {

      msgBox.textContent = "Tak for din tilmelding!";
      msgBox.style.color = "green";
    }
  })
  
});

document.getElementById("customNewsletterFormFooter").addEventListener("submit", function (e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  fetch("/?na=s", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(html => {
    const msgBox = document.getElementById("newsletterMessageFooter");

    const htmlLower = html.toLowerCase();

    if (htmlLower.includes("flood detected")) {
      msgBox.textContent = "Du har allerede forsøgt. Vent venligst lidt og prøv igen.";
      msgBox.style.color = "orange";
    } else {

      msgBox.textContent = "Tak for din tilmelding!";
      msgBox.style.color = "green";
    }
  })
  
});  



  let currentSlide = 0;
  const slides = document.querySelectorAll('.carousel-slide');
  const indicators = document.querySelectorAll('.indicator');
  let autoAdvanceTimer = setTimeout(() => moveSlide(1), 5000);

  function showSlide(idx, dir = 1) {
    if (idx === currentSlide || idx < 0 || idx >= slides.length) return;

    const prev = slides[currentSlide];
    const next = slides[idx];

    next.style.display = 'flex';
    next.style.position = 'absolute';
    next.style.left = 0;
    next.style.width = '100%';
    next.style.transform = `translateX(${dir > 0 ? '100%' : '-100%'})`;

    anime({
      targets: prev,
      translateX: [0, dir > 0 ? '-100%' : '100%'],
      duration: 500,
      easing: 'easeInOutQuad',
      complete: () => {
        prev.style.display = 'none';
        prev.style.transform = '';
      }
    });

    anime({
      targets: next,
      translateX: [dir > 0 ? '100%' : '-100%', 0],
      duration: 500,
      easing: 'easeInOutQuad',
      complete: () => {
        next.style.transform = '';
        next.style.position = '';
      }
    });

    indicators.forEach((el, i) => el.classList.toggle('active', i === idx));
    currentSlide = idx;
    resetAutoAdvance();
  }

  function moveSlide(dir) {
    showSlide((currentSlide + dir + slides.length) % slides.length, dir);
  }

  function goToSlide(idx) {
    showSlide(idx, idx > currentSlide ? 1 : -1);
  }

  window.moveSlide = moveSlide;
  window.goToSlide = goToSlide;

  function autoAdvance() {
    autoAdvanceTimer = setTimeout(() => moveSlide(1), 5000);
  }

  function resetAutoAdvance() {
    clearTimeout(autoAdvanceTimer);
    autoAdvance();
  }

  slides.forEach((s, i) => s.style.display = i === 0 ? 'flex' : 'none');
  autoAdvance();

  const carouselContainer = document.querySelector('.carousel-slides');
  let touchStartX = 0;
  let touchEndX = 0;

  carouselContainer.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
  }, false);

  carouselContainer.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, false);

  function handleSwipe() {
    const swipeThreshold = 50;
    const distance = touchEndX - touchStartX;

    if (distance > swipeThreshold) {
      moveSlide(-1);
    } else if (distance < -swipeThreshold) {
      moveSlide(1);
    }
  }
});