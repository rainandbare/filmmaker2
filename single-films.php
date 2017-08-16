<?php get_header(); ?>

<main class="main single-films">
  <div class="container single-films-wrapper">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>   
    <section class="film-content">
      <div class="description">
        <h1 class="entry-title"><?php the_title(); ?></h1>
         <div class="specs no-trailer">
            <?php if(get_field('director')){ ?>
              <h6>Directed By <?php the_field('director'); ?></h6>
            <?php } ?>
            <h6><?php the_field('year'); ?> / <?php the_field('format'); ?> / <?php the_field('length'); ?> mins</h6>
          </div>
      <div class="container single-films-wrapper">
        <div class="slideshow-lower">
         <?php $images = get_field('images'); ?>
              <div class="main-carousel">
              <?php foreach ($images as $image) { ?>
                  <div class="carousel-cell">
                    <img class="carousel-cell-image" src=<?php echo $image['sizes']['large']; ?> alt="">
                  </div>
              <?php } ?>
            </div>
        </div>
      </div>
        <p><?php the_field('synopsis'); ?></p>
      </div>
      <div class="media">
        <?php if (get_field('has_trailer') == 1) {?>
         <div class="video-box">
          <div class="video-content"> <?php the_field('vimeo_embed'); ?>
          </div>
        </div>
        <div class="under-video">
          <div class="buy-me">
            
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="5BT5KTXX75SLG">
              <input type="hidden" name="on0" value="Type of Licence">
                    <select name="os0">
                      <option>CHOOSE LICENCE</option>
                      <option value="Personal">Personal ($30.00)</option>
                      <option value="Educational Institution">Educational ($200.00)</option>
                    </select> 
              <input type="hidden" name="on1" value="Name of DVD">
              <input type="hidden" name="os1" maxlength="200" value="<?php the_title(); ?>">
              <input type="hidden" name="currency_code" value="CAD">
              <div><input class="buy-me-button" type="submit" name="submit" value="BUY DVD"></div>
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

          </div>
        </div>
      <?php } ?>
      </div>

    </section>
    </div>
  <?php endwhile; ?>
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>