<section id='section-six'>

  <div id='sec-six-inner'>

    <span id='sec-six-title'><?php the_field('section_six_title');?></span><!-- sec-six-title -->

    <div id='sec-six-pa-wrapper'>

      <?php if (have_rows('section_six_pa_links')): ?>
      <?php while (have_rows('section_six_pa_links')): the_row();?>

      <?php $background_hover_image = get_sub_field('background_hover_image');?>

      <a class='sec-six-single-pa <?php if ($background_hover_image) {echo "bg-hover";}?>'
        href='<?php the_sub_field('link');?>'>

        <span class='sec-six-pa-title'><?php the_sub_field('title');?></span><!-- sec-six-pa-title -->
        <?php if ($background_hover_image) {?>
        <img class="lazyload" data-src="<?php echo $background_hover_image['url']; ?>"
          alt="<?php echo $background_hover_image['alt']; ?>" />
        <?php }?>

      </a><!-- sec-six-single-pa -->

      <?php endwhile;?>
      <?php endif;?>

    </div><!-- sec-six-pa-wrapper -->

    <a class='button-two sec-six-button'
      href='<?php the_field('section_six_see_all_button_link');?>'><?php the_field('section_six_see_all_button_verbiage');?></a>
    <!-- button-two -->

  </div><!-- sec-six-inner -->

</section><!-- section-six -->