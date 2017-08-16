<?php 
/**
/* 
Template Name: About
*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main class="main main-about">
 	<section id="about">
      <div class="container">
        <h2 class="about-heading"><?php the_title(); ?></h2>
        <div class="about-content"><?php the_content(); ?></div>
      </div>
    </section>
</main> <!-- /.main -->

<?php endwhile; // End the loop. Whew. ?>
<?php get_footer(); ?>
