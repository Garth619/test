<section id="section-one">

  <div class="sec-one-inner">

    <span class="sec-one-title"><?php the_field('section_one_title');?></span> <!-- /.sec-one-title -->

    <span class="sec-one-name"><?php the_field('section_one_name');?></span> <!-- /.sec-one-name -->

  </div><!-- /.sec-one-inner -->

  <picture>

    <?php $section_one_monitor_image_webp = get_field('section_one_monitor_image_webp');?>
    <?php if ($section_one_monitor_image_webp) {?>
    <source media='(min-width: 1695px)' srcset='<?php echo $section_one_monitor_image_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php $section_one_monitor_image = get_field('section_one_monitor_image');?>
    <?php if ($section_one_monitor_image) {?>
    <source media='(min-width: 1695px)' srcset='<?php echo $section_one_monitor_image['url']; ?>'>
    <?php }?>

    <?php $section_one_large_laptop_image_webp = get_field('section_one_large_laptop_image_webp');?>
    <?php if ($section_one_large_laptop_image_webp) {?>
    <source media='(min-width: 1380px)' srcset='<?php echo $section_one_large_laptop_image_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php $section_one_large_laptop_image = get_field('section_one_large_laptop_image');?>
    <?php if ($section_one_large_laptop_image) {?>
    <source media='(min-width: 1380px)' srcset='<?php echo $section_one_large_laptop_image['url']; ?>'>
    <?php }?>

    <?php $section_one_small_laptop_image_webp = get_field('section_one_small_laptop_image_webp');?>
    <?php if ($section_one_small_laptop_image_webp) {?>
    <source media='(min-width: 1170px)' srcset='<?php echo $section_one_small_laptop_image_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php $section_one_small_laptop_image = get_field('section_one_small_laptop_image');?>
    <?php if ($section_one_small_laptop_image) {?>
    <source media='(min-width: 1170px)' srcset='<?php echo $section_one_small_laptop_image['url']; ?>'>
    <?php }?>

    <?php $section_one_tablet_image_webp = get_field('section_one_tablet_image_webp');?>
    <?php if ($section_one_tablet_image_webp) {?>
    <source media='(min-width: 768px)' srcset='<?php echo $section_one_tablet_image_webp['url']; ?>' type='image/webp'>
    <?php }?>

    <?php $section_one_tablet_image = get_field('section_one_tablet_image');?>
    <?php if ($section_one_tablet_image) {?>
    <source media='(min-width: 768px)' srcset='<?php echo $section_one_tablet_image['url']; ?>'>
    <?php }?>

    <?php $section_one_mobile_image_webp = get_field('section_one_mobile_image_webp');?>
    <?php if ($section_one_mobile_image_webp) {?>
    <source srcset='<?php echo $section_one_mobile_image_webp['url']; ?>' type='image/webp'>
    <?php }?>

    <?php $section_one_mobile_image = get_field('section_one_mobile_image');?>

    <img id='hero' src="<?php echo $section_one_mobile_image['url']; ?>"
      alt="<?php echo $section_one_mobile_image['alt']; ?>" />

  </picture>



</section><!-- /#section-one -->