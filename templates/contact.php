<?php 
/**
/* 
Template Name: Contact
*/
get_header(); ?>

<main class="main main-contact">
 	<section id="contact">
 		<div class="container">
 			 <h3 class="contact-heading">To learn more about our services, general inquires, or to schedule an appointment please contact:</h3>
              <h3 class="name"><?php the_field('contact_name'); ?></h3>
            	<a href="mailto:<?php the_field("email"); ?>"><h3 class="email"><?php the_field('email'); ?></h3></a>
              <h3 class="phone"><?php the_field('phone'); ?></h3>
                <h3 class="address"><?php the_field('address'); ?></h3>
 		</div>
        
      </section>
</main> <!-- /.main -->

<?php get_footer(); ?>