<?php if (!get_field('disable_banner_new')) {?>

<div id="internal-banner">

  <div id="internal-banner-content">

    <?php // blog main feed

    if (is_home()) {?>

    <h1 class="banner-title page-title large-title"><?php the_field('internal_banner_blog_title', 'option');?></h1>
    <!-- banner_title -->

    <?php }?>

    <?php // category feed

    if (is_category()) {?>

    <h1 class="banner-title page-title large-title"><?php single_cat_title()?></h1><!-- banner_title -->

    <?php }?>

    <?php // archive feed

    if (is_archive() && !is_category()) {?>

    <h1 class="banner-title page-title large-title">
      <?php printf(__('<span>%s</span>'), get_the_date(_x('Y', 'yearly archives date format', 'twentyten')));?>
    </h1>

    <?php }?>

    <?php

    // pa pages

    if (!is_home() && !is_archive() && basename(get_page_template()) === 'page.php') {?>

    <?php if (get_field('banner_title')): ?>

    <?php if (get_field('banner_h1') == "Yes"): ?>

    <h1 class="banner-title page-title"><?php the_field('banner_title');?></h1><!-- banner_title -->

    <?php else: ?>

    <span class="banner-title page-title"><?php the_field('banner_title');?></span><!-- banner_title -->

    <?php endif;?>

    <?php else: ?>

    <?php if (get_field('banner_h1') == "Yes"): ?>

    <h1 class="banner-title page-title"><?php the_field('global_banner_title', 'option');?></h1><!-- banner_title -->

    <?php else: ?>

    <span class="banner-title page-title"><?php the_field('global_banner_title', 'option');?></span>
    <!-- banner_title -->

    <?php endif;?>

    <?php endif;?>

    <?php }?>

    <?php // practice areas directory

    if (is_page_template('page-templates/template-padirectory.php')) {?>

    <h1 class="banner-title page-title large-title"><?php the_title();?></h1>

    <?php }?>

  </div><!-- internal-banner-content -->

  <?php $banner_image_small_laptop = get_field('banner_image_small_laptop');?>
  <?php $banner_image_large_laptop = get_field('banner_image_large_laptop');?>
  <?php $banner_image_monitor = get_field('banner_image_monitor');?>

  <?php $global_banner_image_monitor = get_field('global_banner_image_monitor', 'option');?>
  <?php $global_banner_image_large_laptop = get_field('global_banner_image_large_laptop', 'option');?>
  <?php $global_banner_image_small_laptop = get_field('global_banner_image_small_laptop', 'option');?>

  <?php if ($banner_image_small_laptop || $banner_image_large_laptop || $banner_image_monitor): ?>

  <picture>

    <?php if ($banner_image_monitor) {?>
    <source media='(min-width: 1695px)' srcset='<?php echo $banner_image_monitor['url']; ?>'>
    <?php }?>

    <?php if ($banner_image_large_laptop) {?>
    <source media='(min-width: 1380px)' srcset='<?php echo $banner_image_large_laptop['url']; ?>'>
    <?php }?>

    <img id='banner-img' src="<?php echo $banner_image_small_laptop['url']; ?>"
      alt="<?php echo $banner_image_small_laptop['alt']; ?>" />

  </picture>

  <?php else: ?>

  <picture>

    <?php if ($global_banner_image_monitor) {?>
    <source media='(min-width: 1695px)' srcset='<?php echo $global_banner_image_monitor['url']; ?>'>
    <?php }?>

    <?php if ($global_banner_image_large_laptop) {?>
    <source media='(min-width: 1380px)' srcset='<?php echo $global_banner_image_large_laptop['url']; ?>'>
    <?php }?>

    <img id='banner-img' src="<?php echo $global_banner_image_small_laptop['url']; ?>"
      alt="<?php echo $global_banner_image_small_laptop['alt']; ?>" />

  </picture>

  <?php endif;?>

</div><!-- internal-banner -->

<?php }?>