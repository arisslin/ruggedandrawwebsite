<section id="contact" class="bg-secondary text-white pt-5 py-5">
  <div class="container">

    <div class="row justify-content-center">
      <h1 class="text-uppercase">Kontakt</h1>
    </div>

    <div class="row">

      <!-- Contact Links -->
      <div class="col-12 col-md-6 mt-4 px-4">
        <h2 class="contact-form-subheading">Sag Hallo</h2>
        <p>Besuche uns in den sozialen Medien oder schreibe uns eine Nachricht.</p>
        <div class="row">
          <div class="col">
            <ul class="contact-link-list">           
              <li class="mb-1">
                <a class="contact-link" href="https://www.instagram.com/ruggedandrawjam/" target="_blank">
                  <span class="contact-icon"><i class="fab fa-instagram"></i></span>
                  <span class="contact-text">Instagram</span>
                </a>
              </li>
              <li class="mb-1">
                <a class="contact-link" href="https://www.facebook.com/events/2189492031362679/" target="_blank">
                  <span class="contact-icon"><i class="fab fa-facebook-f"></i></span>
                  <span class="contact-text">Facebook</span>  
                </a>
              </li>
              <li class="mb-1">
                <a class="contact-link" href="mailto:ruggedandraw@web.de" target="_self">
                  <span class="contact-icon"><i class="fas fa-paper-plane"></i></span>
                  <span class="contact-text">ruggedandraw@web.de</span>  
                </a>
              </li>
            </ul>
          </div>
        </div>    
      </div>

      <!-- Contact Form -->
      <div class="col-12 col-md-6 mt-4 px-4">
        <?php if (isset($_GET['contacted'])): ?>
          <p id="contact-success">Das Formular wurde erfolgreich verschickt!</p>
        <?php endif; ?>
        <form class="contact-form" action="assets/parts/form.php" method="POST">
          <div class="form-group">
            <input id="contact-name" class="form-control" name="name" type="text" placeholder="Dein Name *" required>
          </div>
          <div class="form-group">
            <input id="contact-email" class="form-control" name="email" type="email" placeholder="Deine Email *" required>
          </div>
          <div class="form-group">
            <textarea id="contact-message" class="form-control" name="message" rows="6" placeholder="Deine Nachricht *" required></textarea>
          </div>
          <button type="submit" class="btn btn-dark contact-submit-button">Absenden</button>
        </form>
      </div>
      
    </div>
  </div>
</section>