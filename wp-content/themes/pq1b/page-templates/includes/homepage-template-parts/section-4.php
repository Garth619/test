<section id='section-four'>

  <div id='sec-four-inner'>

    <span id='sec-four-title'><?php the_field('section_four_title');?></span><!-- sec-four-title -->

    <div id='sec-four-slider-wrapper' class="preload-section">

      <div class='sec-four-tablet-arrow sec-four-tablet-arrow-left'></div><!-- sec-four-tablet-arrow -->

      <div id='sec-four-slider' class="preload-slider">

        <?php $section_four_slider = get_field('section_four_slider');?>
        <?php if ($section_four_slider): ?>
        <?php foreach ($section_four_slider as $post): ?>
        <?php setup_postdata($post);?>

        <div class='sec-four-single-slide'>

          <a href="<?php the_permalink();?>">

            <div class='sec-four-img-wrapper'>

              <?php $attorney_bio_image = get_field('attorney_bio_image');?>
              <?php if ($attorney_bio_image) {?>
              <img class="lazyload" data-src="<?php echo $attorney_bio_image['url']; ?>"
                alt="<?php echo $attorney_bio_image['alt']; ?>" />
              <?php }?>

            </div><!-- sec-four-img-wrapper -->

            <span class='sec-four-single-att-title'><?php the_title();?></span><!-- sec-four-single-att-title -->

            <span class='sec-four-single-position-title'><?php the_field('position_title');?></span>
            <!-- sec-four-single-position-title -->

          </a>

        </div><!-- sec-four-single-slide -->

        <?php endforeach;?>
        <?php wp_reset_postdata();?>
        <?php endif;?>

      </div><!-- sec-four-slider -->

      <div class='sec-four-tablet-arrow sec-four-tablet-arrow-right'></div><!-- sec-four-tablet-arrow -->

      <div id='sec-four-mobile-arrows'>

        <div class='sec-four-mobile-arrow sec-four-mobile-arrow-left'></div><!-- sec-four-mobile-arrow -->

        <div class='sec-four-mobile-arrow sec-four-mobile-arrow-right'></div><!-- sec-four-mobile-arrow -->

      </div><!-- sec-four-mobile-arrows -->

    </div><!-- sec-four-slider-wrapper -->

  </div><!-- sec-four-inner -->

</section><!-- section-four -->