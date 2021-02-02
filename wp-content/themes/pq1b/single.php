<?php get_header();?>


<div id="internal-main">

  <?php if (get_field('disable_sidebar')) {
    $sidebar = ' disabled-sidebar';
} else {
    $sidebar = ' enabled-sidebar';
}

?>

  <div id="page-container" class="two-col <?php echo $banner;
echo $sidebar; ?>">

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

    <div class="page-content">

      <h1 class="page-title default-title"><?php the_title();?></h1>

      <div class='page-content-inner content'>

        <?php get_template_part('loop', 'single');?>

        <?php if (get_field('media_&_broadcast_appearances_or_a_publications_&_lectures') == 'Media & Broadcast Appearances') {?>

        <div class="embed-container">

          <?php the_field('blog_video');?>

        </div>

        <?php }?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

  </div><!-- page-container -->

</div><!-- internal-main -->


<?php get_footer();?>