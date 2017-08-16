<footer>
	<ul class="menu social">
		<?php $frontpage_id = get_option( 'page_on_front' );?>
		<?php

		// The Query
		$args = array(
				'page_id' => $frontpage_id,
			);
		$social_query = new WP_Query( $args );
		
		// The Loop
		if ( $social_query->have_posts() ) { while ( $social_query->have_posts() ) { $social_query->the_post();
				if( have_rows('social_links') ):
				    while ( have_rows('social_links') ) : the_row(); ?>

				     <li>
					     <a href="<?php the_sub_field('link'); ?>"> 
					     	<i class="fa <?php the_sub_field('social_type'); ?>"></i>
					     </a>
				     </li>

					<?php
				    endwhile;
				else :
				    // no rows found
				    echo "Hi!";
				endif;
			} //endwhile
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		}
		?>
	</ul>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>