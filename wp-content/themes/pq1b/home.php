<?php get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/template', 'default-page-banner');?>

  <div id="page-container" class="two-col">

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

    <div class="page-content">

      <div class='page-content-inner'>

        <?php get_template_part('loop', 'index');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

  </div><!-- page-container -->

</div><!-- internal-main -->


<?php get_footer();?>