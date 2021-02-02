<?php

/* Template Name: Contact */

get_header();?>

<div id="internal-main">

  <div id="page-container">

    <div id='large-title-wrapper' class='contact-title-wrapper'>

      <h1 class="page-title large-title no-banner-title"><?php the_title();?></h1>

      <span id='contact-description'><?php the_field('contact_description');?></span><!-- contact-description -->

    </div><!-- large-title-wrapper -->

    <div id='contact-wrapper'>

      <?php get_template_part('page-templates/includes/template', 'locations');?>

    </div><!-- contact-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>