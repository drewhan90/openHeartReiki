<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Heart Reiki</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body id="contact">
  	<!-- HEADER + NAV MENU -->
    <?php include 'partials/header.php' ?>
  <!-- Static Content: Benifits of Reiki -->
  <section>
    <div class="content">
      <div class="title">
        <h1>my contacts</h1>
        <span class="divider">divider</span>
      </div>
      <div class="intro">
        <p>Thank you for visiting my site and considering my services. <br> Please make an appointment by phone, direct email or <a href="#message"> message.</a></p>
      </div>
      <!-- CONTACT PAGE MAP -->
      <div id="map"></div>
  </section>
  <section class="secondary-bg module">
    <div class="content">
      <div class="row">
        <div class="medium-4 columns">  
            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> address</h2>
          <p>570 Dunsmuir St #600, Vancouver, BC V6B 1Y1</p>
        </div>
        <div class="medium-4 columns">
          <h2><i class="fa fa-phone" aria-hidden="true"></i> phone</h2>
          <p>(604) 682-2787</p>
        </div>
        <div class="medium-4 columns">
          <h2><i class="fa fa-envelope" aria-hidden="true"></i> email</h2>
          <p>sasha@vanarts.com</p>
        </div>
      </div>
    </div>
  </section>
  <section id="message" class="module">
    <div class="content">
      <div class="title">
        <h1>send me a message</h1>
        <span class="divider">divider</span>
      </div>
      <!-- CONTACT FORM -->
      <form class="contact-form text-left medium-12 columns" method="post">
        <label>your name*
          <input type="text" class="name" required>
        </label>
        <label>your email*
          <input type="email" class="email" placeholder="john_doe@gmail.com" required>
        </label>
        <label>your message
          <textarea class="message" placeholder="max 300 words"></textarea>
        </label>
        <!-- FORM BUTTON -->
        <div class="end">
          <button class="primary-btn cta-btn">send</button>
          <span class="divider">divider</span>
        </div>
      </form>
    </div>
  </section>

    <!-- FOOTER + TOP BTN + SCRIPT LINKS-->
    <!-- FOOTER MAP IS HIDDEN ON CONTACT PAGE -->
    <?php require 'partials/footer.php' ?>
  </body>
</html>