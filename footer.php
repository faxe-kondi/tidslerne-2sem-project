 <footer class="main-footer">
  <div class="footer-container">
    <div class="footer-col">
      <h4>Kundeservice</h4>
      <div class="contact-info">
        <div class="contact-item">
          <span class="icon-circle">
            <i class="fa-solid fa-phone"></i>
          </span>
          <div>
            <p>+45 7020-0515</p>
            <small>man.: 18.00 – 20.00<br>tir. - tor.: 10.00 – 12.00</small>
          </div>
        </div>
        <div class="contact-item">
          <span class="icon-circle">
            <i class="fa-solid fa-envelope"></i>
          </span>
          <p>sekretariat@tidslerne.dk</p>
        </div>
      </div>
    </div>

 <div class="footer-col">
      <h4>Nyhedsbrev</h4>
      <ul>
       <div class="newsletterSignupFooter">
  <form id="customNewsletterFormFooter" method="post">
    <div class="newsletterInputWrapperFooter">
      <i class="fa-regular fa-envelope"></i>
      <input
        type="email"
        name="ne"
        class="newsletterInputFooter"
        placeholder="Indtast din e-mail"
        required
      >
    </div>
    <input type="hidden" name="nr" value="widget">
    <input type="hidden" name="nlang" value="">
    <input type="hidden" name="ns" value="">
    <input type="hidden" name="action" value="subscribe">
    <input type="hidden" name="nl[]" value="1"> <!-- list ID -->
    <button type="submit" class="newsletterButtonFooter">Tilmeld</button>
  </form>
  <div id="newsletterMessageFooter" class="mt-2"></div>
</div>
      </ul>
    </div>

    
    <div class="footer-col">
      <h4>Tidslerne</h4>
      <ul>
        <li><a href="<?php echo site_url('/aboutpage/'); ?>">Om tidslerne</a></li>
        <li><a href="https://medlem.tidslerne.dk/indmeld" target="_blank" rel="noopener noreferrer" class="btn">Bliv medlem</a></li>
        <li><a href="#">Bestyrelsen</a></li>
        <li><a href="#">Vedtægter</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Service</h4>
      <ul>
        <li><a href="https://medlem.tidslerne.dk/kontakt" target="_blank" rel="noopener noreferrer" class="btn">Kontakt</a></li>
        <li><a href="#">Privatlivspolitik</a></li>
        <li><a href="https://medlem.tidslerne.dk/" target="_blank" rel="noopener noreferrer" class="btn">Login</a></li>
      </ul>
    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>