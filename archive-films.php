<?php get_header(); ?>

<main class="main main-films">
<section> 
  <!-- <h1>The Films</h1> -->
         <?php if (have_posts() ) : ?>
            <div id="films" class="films">

              <?php while ( have_posts() ) : the_post(); ?> 
                 <?php $images = get_field('images');
                        global $post;
                        $film_slug=$post->post_name;
                        $url = get_home_url() . "/films/" . $film_slug; 
                  ?>
                  <a href="<?php echo $url; ?>" class="film" style="background-image: url(<?php echo $images[0]['sizes']['large']; ?>); no-repeat fixed cover">                  
                    <div class="overlay">
                      <h2 class=film-title><?php the_title(); ?></h2>
                      <p><?php the_field('year'); ?> </p>
                    </div>
                  </a>

             <?php endwhile; ?> <!-- end of loop -->
            </div> <!-- end div#fims-->
          <?php endif; ?>
  </section>
</main> <!-- /.main -->

<?php get_footer(); ?>