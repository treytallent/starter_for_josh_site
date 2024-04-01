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
      <h3 class="text-center"><?php the_field("titleforarticles"); ?></h3>
      <!-- div that gives access to BS columns -->
      <div class="row">
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="<?php the_field("article1image"); ?>"
            alt="woman illustration"
          />
          <h4 class="article-title font-accent"><?php the_field(
              "article1title"
          ); ?></h4>
          <time datetime="<?php the_field(
              "article1dateaccessibility"
          ); ?>" class="date"
            ><?php the_field("article1datedisplayed"); ?></time
          >
          <p class="article-p">
          <?php the_field("article1excerpt"); ?>
          </p>
          <a class="read-more" href="#"><?php the_field(
              "article1readmore"
          ); ?></a>
        </div>
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="<?php the_field("article2image"); ?>"
            alt="woman illustration"
          />
          <h4 class="article-title font-accent"><?php the_field(
              "article2title"
          ); ?></h4>
          <time datetime="<?php the_field(
              "article2dateaccessibility"
          ); ?>" class="date"
            ><?php the_field("article2datedisplayed"); ?></time
          >
          <p class="article-p">
          <?php the_field("article2excerpt"); ?>
          </p>
          <a class="read-more" href="#"><?php the_field(
              "article2readmore"
          ); ?></a>
        </div>
        <div class="col-md-4">
          <img
            class="img-fluid"
            src="<?php the_field("article3image"); ?>"
            alt="woman illustration"
          />
          <h4 class="article-title font-accent"><?php the_field(
              "article3title"
          ); ?></h4>
          <time datetime="<?php the_field(
              "article3dateaccessibility"
          ); ?>" class="date"
            ><?php the_field("article3datedisplayed"); ?></time
          >
          <p class="article-p">
          <?php the_field("article3excerpt"); ?>
          </p>
          <a class="read-more" href="#"><?php the_field(
              "article3readmore"
          ); ?></a>
        </div>

        <!-- row -->
      </div>
      <!-- container -->
    </div>
  </section>
</main>
<?php get_footer(); ?>
<!-- Tells WordPress to include footer.php   -->
