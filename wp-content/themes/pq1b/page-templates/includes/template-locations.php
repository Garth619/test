<?php if (have_rows('locations', 'option')): ?>

<?php while (have_rows('locations', 'option')): the_row();?>

<div class='location-col'>

  <span class='location-title'><?php the_sub_field('city_title');?></span><!-- location-title -->

  <span class='location-address'><?php the_sub_field('address');?></span>
  <!-- location-address -->

  <span class='location-phone'><?php the_sub_field('phone_call_to_action');?> <a
      href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_sub_field('loc_phone')); ?>'><?php the_sub_field('loc_phone');?></a></span>
  <!-- location-phone -->

  <a class='button-two location-button' href='<?php the_sub_field('google_map_link');?>' target='_blank'
    rel='noopener'>Get Directions</a><!-- button-two -->

</div><!-- location-col -->

<?php endwhile;?>

<?php endif;?>