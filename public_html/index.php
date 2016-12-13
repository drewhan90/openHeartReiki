<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Heart Reiki</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body id="index">
    <!-- HEADER + NAV MENU -->
    <?php include 'partials/header.php' ?>
    
    <!-- Static Content: Benifits of Reiki -->
    <section id="first" class="benefits module">
      <div class="content">
        <div class="title">
          <h1>open heart reiki</h1>
          <span class="divider">divider</span>
        </div>
        <p>
          Are you stressed? 
          <br>
          Are you having sleeping problems?
          <br> 
          Experiencing physical or mental chronic pain?
          <br>
          I strongly believe that all healing comes from within. 
          <br>
          However, we need help to initiate this process of internal healing. 
          <br>
          Reiki is a practice that can help to awaken your body energies.
          <br> 
          One can balance these energies to help the body heal and nourish itself.
        </p>
        <div class="end">
          <button class="primary-btn cta-btn"><a href="about.php">learn more</a></button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <!-- Static Content: My Services -->
    <section class="services module">
      <div class="content">
        <div class="title">
          <h1>my services</h1>
          <span class="divider">divider</span>
        </div>
        <!-- List of Services -->
        <div class="row">
          <ul class="services-list">
            <li class="medium-4 columns">
              <span class="learn icon hide-for-small-only">mandala icon</span>
              <h2>learn reiki</h2>
            </li>
            <li class="medium-4 columns">
              <span class="therapy icon hide-for-small-only">mandala icon</span>
              <h2>reiki therapy</h2>
            </li>
            <li class="medium-4 columns">
              <span class="yoga-women icon hide-for-small-only">mandala icon</span>
              <h2>yoga &amp; women circles</h2>                                         
            </li>
          </ul>
        </div>
        <div class="end">
          <button class="primary-btn cta-btn"><a href="services.php">learn more</a></button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <!-- Static Content: Testimonials -->
    <section class="testimonials secondary-bg module">
      <div class="content">
        <div class="title">
          <h1>testimonials</h1>
          <span class="divider">divider</span>
        </div>
        <!-- Database Testimonial Posts (show recent 2) -->
        <div class="row">
          <div class="post small-12 medium-6 columns">
            <article>
              <!-- Post Content -->
              <div class="row">
                <p class="text-left small-12 medium-12 columns">
                  "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a medium language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia." 
                </p>
              </div>
              <!-- Post Description -->
              <div class="row">
                <img class="post-img small-4 medium-2 columns" src="img/uploads/woman01.jpg" alt="post image">
                <div class="post-desc text-left small-8 medium-10 columns">
                  <h3>sarah jameson</h3>
                  <h4>nov 10 2016</h4>
                </div>
              </div>
            </article>
          </div>
          <div class="post medium-6 columns">
            <article>
              <!-- Post Content -->
              <div class="row">
                <p class="text-left medium-12 columns">
                  "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a medium language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia." 
                </p>
              </div>
              <!-- Post Description -->
              <div class="row">
                <img class="post-img small-4 medium-2 columns" src="img/uploads/woman02.jpg" alt="post image">
                <div class="post-desc text-left small-8 medium-10 columns">
                  <h3>sarah jameson</h3>
                  <h4>nov 10 2016</h4>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="end">
          <button class="secondary-btn cta-btn"><a href="blog.php">read more</a></button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <div class="leaving reveal hidden" id="exampleModal1" data-reveal>
      <h1>You are about to leave the page</h1>
      <p class="lead">Goodbye!!!</p>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- FOOTER + TOP BTN + SCRIPT LINKS-->
    <?php require 'partials/footer.php' ?>
  </body>
</html>
