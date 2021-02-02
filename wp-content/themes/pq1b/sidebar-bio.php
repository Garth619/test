<div id="sidebar-wrapper" class='sidebar-bio'>

  <div id='sidebar-inner'>

    <div id='desktop-att-profile'>

      <?php

// desktop att profile

get_template_part('page-templates/includes/template', 'att-profile-box');?>

    </div><!-- desktop-att-profile -->

    <?php if (get_field('att_email') || get_field('att_phone')) {?>

    <div id='att-bio-contact-info'>

      <?php if (get_field('att_email')) {?>

      <span><?php the_field('email_call_to_action');?> <a
          href="mailto:<?php the_field('att_email');?>s"><?php the_field('att_email');?></a></span>

      <?php }?>

      <?php if (get_field('att_phone')) {?>

      <span><?php the_field('phone_call_to_action');?> <a
          href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('att_phone')); ?>"><?php the_field('att_phone');?></a></span>

      <?php }?>

    </div><!-- att-bio-contact-info -->

    <?php }?>

    <?php if (get_field('location_one_address') || get_field('location_two_address')): ?>

    <div id='att-bio-location-wrapper'>

      <?php if (get_field('location_one_address')) {?>

      <div class='att-bio-location'>

        <span class='att-bio-location-title'><?php the_field('location_one_city_title');?></span>
        <!-- att-bio-location-title -->

        <span class='att-bio-location-address'><?php the_field('location_one_address');?></span>
        <!-- att-bio-location-address -->

        <span class='att-bio-location-phone'><?php the_field('location_one_phone_call_to_action');?> <a
            href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_one_phone')); ?>"><?php the_field('location_one_phone');?></a></span>
        <!-- att-bio-location-phone -->

      </div><!-- att-bio-location -->

      <?php }?>

      <?php if (get_field('location_two_address')) {?>

      <div class='att-bio-location'>

        <span class='att-bio-location-title'><?php the_field('location_two_city_title');?></span>
        <!-- att-bio-location-title -->

        <span class='att-bio-location-address'><?php the_field('location_two_address');?></span>
        <!-- att-bio-location-address -->

        <span class='att-bio-location-phone'><?php the_field('location_two_phone_call_to_action');?> <a
            href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_two_phone')); ?>"><?php the_field('location_two_phone');?></a></span>
        <!-- att-bio-location-phone -->

      </div><!-- att-bio-location -->

      <?php }?>

    </div><!-- att-bio-location-wrapper -->

    <?php endif;?>

    <?php if (have_rows('sidebar_accolades')): ?>

    <div id='sidebar-accolades'>

      <?php while (have_rows('sidebar_accolades')): the_row();?>

      <div class='sidebar-accolades-section'>

        <span class="sidebar-accolades-title"><?php the_sub_field('accolades_title');?></span>
        <!-- sidebar-accolades-title -->

        <?php if (have_rows('accolades_list_items')): ?>

        <ul>

          <?php while (have_rows('accolades_list_items')): the_row();?>

          <li><?php the_sub_field('accolades_list_item');?>

            <?php if (have_rows('accolades_sub_list_items')): ?>

            <ul>

              <?php while (have_rows('accolades_sub_list_items')): the_row();?>

              <li><?php the_sub_field('accolades_sub_list_item');?></li>

              <?php endwhile;?>

            </ul>

            <?php endif;?>

          </li>


          <?php endwhile;?>

        </ul>

        <?php endif;?>

      </div><!-- sidebar-accolades-section -->

      <?php endwhile;?>

    </div><!-- sidebar-accolades -->

    <?php endif;?>

  </div><!-- sidebar-inner -->

</div><!-- sidebar_wrapper -->