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
  <section id="reiki" class="reiki">
    <div class="content">
      <div class="title">
        <h1>contact us</h1>
        <span class="divider">divider</span>
      </div>
      <!-- CONTACT PAGE MAP -->
      <div id="map"></div>
      <!-- CONTACT FORM -->
      <form class="contact-form" method="post">
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
          <button class="primary-btn" href="">send</button>
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