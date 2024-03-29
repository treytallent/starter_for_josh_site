<?php
/* Template Name: Home page */
?>
<?php get_header(); ?>
<!--  Tells WordPress to include header.php -->
<main>
  <!-- About -->
  <section class="container-fluid about-bg text-center">
    <!-- div to hold content in the centre of the page -->
    <div class="container">
      <h2 class="font-accent"><?php the_field("titleforaboutme"); ?></h2>
      <p class="particle"><?php the_field("subtitleforaboutme"); ?></p>
      <p class="about-text"><?php the_field("paragraphforaboutme"); ?></p>
      <!-- container -->
    </div>
  </section>
  <!-- Articles -->
  <section class="container-fluid articles-bg">
    <!-- div to hold content in the centre of the page -->
    <div class="container">
      <h3 class="text-center">LATEST ARTICLES</h3>
      <!-- div that gives access to BS columns -->
      <div class="row">
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="http://170.187.231.66/~mesh20/sub/wp-content/themes/starter_for_josh_site/img/port1.jpg"
            alt="woman illustration"
          />
          <h4 class="article-title font-accent">A PORTRAIT</h4>
          <time datetime="2030-11-10" class="date"
            >Friday,November 10. 2030</time
          >
          <p class="article-p">
            STS has never been shy of seeking new terrains of investigation.
            More and more STS s cholars are starting to explore and intervene in
            the arts. This object of study brings new challenges and
            opportunities that we want to explore in this session. We would like
            to gather first of all simply new kinds of knowledge arising from
            STS study of the arts.
          </p>
          <a class="read-more" href="#">CONTINUE READING</a>
        </div>
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="http://170.187.231.66/~mesh20/sub/wp-content/themes/starter_for_josh_site/img/port2.jpg"
            alt="3d model showcase"
          />
          <h4 class="article-title font-accent">A PORTRAIT</h4>
          <time datetime="2030-11-10" class="date"
            >Friday,November 10. 2030</time
          >
          <p>
            STS has never been shy of seeking new terrains of investigation.
            More and more STS s cholars are starting to explore and intervene in
            the arts. This object of study brings new challenges and
            opportunities that we want to explore in this session. We would like
            to gather first of all simply new kinds of knowledge arising from
            STS study of the arts.
          </p>

          <a class="read-more" href="#">CONTINUE READING</a>
        </div>
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="http://170.187.231.66/~mesh20/sub/wp-content/themes/starter_for_josh_site/img/port3.jpg"
            alt="3d modelled environment"
          />
          <h4 class="article-title font-accent">A PORTRAIT</h4>
          <time datetime="2030-11-10" class="date"
            >Friday,November 10. 2030</time
          >
          <p class="article-p">
            STS has never been shy of seeking new terrains of investigation.
            More and more STS s cholars are starting to explore and intervene in
            the arts. This object of study brings new challenges and
            opportunities that we want to explore in this session. We would like
            to gather first of all simply new kinds of knowledge arising from
            STS study of the arts.
          </p>
          <a class="read-more" href="#">CONTINUE READING</a>
        </div>

        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </section>
</main>
<?php get_footer(); ?>
<!-- Tells WordPress to include footer.php   -->
