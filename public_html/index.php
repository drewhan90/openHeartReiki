<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body id="index">
    <!-- HEADER + NAV MENU -->
    <?php include 'partials/header.php' ?>
    <!-- Static Content: Benifits of Reiki -->
    <section class="benefits">
      <div class="content">
        <div class="title">
          <h1>benefits of reiki</h1>
          <span class="divider">divider</span>
        </div>
        <p>
          Are you tired, have sleeping problems, trying to manage the chronic pain or stressed at work? I strongly believe that all healing comes from within. However, sometimes we need help to initiate this process of internal healing. Reiki is a very simple practice that can help to awake your body energies and balance them to help your body to heal and nourish itself.
        </p>
        <ul class="benefits-list">
          <li><h2>soothe</h2></li>
          <li><h2>strengthen</h2></li>
          <li><h2>stimulate</h2></li>
        </ul>
        <div class="end">
          <button class="primary-btn" href="">learn more</button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <!-- Static Content: My Services -->
    <section class="services">
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
              <h2>yoga &amp; women studies</h2>
            </li>
          </ul>
        </div>
        <div class="end">
          <button class="primary-btn" href="">learn more</button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <!-- Static Content: Testimonials -->
    <section class="testimonials secondary-bg">
      <div class="content">
        <div class="title">
          <h1>testimonials</h1>
          <span class="divider">divider</span>
        </div>
        <!-- Database Testimonial Posts (show recent 2) -->
        <div class="row">
          <div class="post small-12 medium-6 columns">
            <div class="overlay hidden">
              <h2>read more</h2>
            </div>
            <article>
              <!-- Post Content -->
              <div class="row">
                <p class="text-left small-12 medium-12 columns">
                  "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a medium language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia." 
                </p>
              </div>
              <!-- Post Description -->
              <div class="row">
                <img class="post-img small-4 medium-4 columns" src="img/uploads/woman01.jpg" alt="post image">
                <div class="post-desc text-left small-8 medium-8 columns">
                  <h3>sarah jameson</h3>
                  <h4>nov 10 2016</h4>
                </div>
              </div>
            </article>
          </div>
          <div class="post medium-6 columns">
            <div class="overlay hidden">
              <h2>read more</h2>
            </div>
            <article>
              <!-- Post Content -->
              <div class="row">
                <p class="text-left medium-12 columns">
                  "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a medium language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia." 
                </p>
              </div>
              <!-- Post Description -->
              <div class="row">
                <img class="post-img small-4 medium-4 columns" src="img/uploads/woman02.jpg" alt="post image">
                <div class="post-desc text-left small-8 medium-8 columns">
                  <h3>sarah jameson</h3>
                  <h4>nov 10 2016</h4>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="end">
          <button class="secondary-btn" href="">read more</button>
          <span class="divider">divider</span>
        </div>
      </div>
    </section>
    <!-- FOOTER + TOP BTN + SCRIPT LINKS-->
    <?php require 'partials/footer.php' ?>
  </body>
</html>
