<?php get_header();?>

<div id="internal-main">

  <div id="page-container">

    <div id='large-title-wrapper' class='contact-title-wrapper'>

      <h1 class="page-title large-title no-banner-title"><?php the_field('not_found_title', 'option');?></h1>

    </div><!-- large-title-wrapper -->

    <div id='not-found-wrapper' class='content'>

      <?php the_field('not_found_content', 'option');?>

    </div><!-- not-found-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>