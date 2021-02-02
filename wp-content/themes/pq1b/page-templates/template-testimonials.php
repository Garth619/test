<?php

/* Template Name: Testimonials */

get_header();?>

<div id="internal-main">

  <div id="page-container">

    <div id='large-title-wrapper'>

      <h1 class="page-title large-title no-banner-title"><?php the_title();?></h1>

    </div><!-- large-title-wrapper -->

    <div id='testi-top'>

      <div class='testi-single'>

        <img class='stars' src='<?php bloginfo('template_directory');?>/images/stars.svg' alt='' />

        <div class='testi-quote'>

          <?php the_field('featured_testimonial_quote');?>

        </div><!-- testi-quote -->

        <div class='testi-descrip content'>

          <?php the_field('featured_testimonial_content');?>

        </div><!-- testi-descrip content -->

        <span class='testi-name'><?php the_field('featured_testimonial_name');?></span><!-- testi-name -->

      </div><!-- testi-single -->

    </div><!-- testi-top -->

    <div id='testi-bottom'>

      <div class='testi-col'>

        <?php if (have_rows('testimonials')): ?>

        <?php while (have_rows('testimonials')): the_row();?>

        <div class='testi-single'>

          <img class='stars' src='<?php bloginfo('template_directory');?>/images/stars.svg' alt='' />

          <div class='testi-quote'>

            <?php the_sub_field('quote');?>

          </div><!-- testi-quote -->

          <div class='testi-descrip content'>

            <?php the_sub_field('content');?>


          </div><!-- testi-descrip content -->

          <span class='testi-name'> <?php the_sub_field('name');?></span><!-- testi-name -->

        </div>

        <?php endwhile;?>
        <?php endif;?>

      </div><!-- testi-col -->

      <div class='testi-col'>

        <?php if (have_rows('testimonials_column_two_')): ?>

        <?php while (have_rows('testimonials_column_two_')): the_row();?>

        <div class='testi-single'>

          <img class='stars' src='<?php bloginfo('template_directory');?>/images/stars.svg' alt='' />

          <div class='testi-quote'>

            <?php the_sub_field('quote');?>

          </div><!-- testi-quote -->

          <div class='testi-descrip content'>

            <?php the_sub_field('content');?>


          </div><!-- testi-descrip content -->

          <span class='testi-name'> <?php the_sub_field('name');?></span><!-- testi-name -->

        </div>

        <?php endwhile;?>
        <?php endif;?>

      </div><!-- testi-col -->

    </div><!-- testi-bottom -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>