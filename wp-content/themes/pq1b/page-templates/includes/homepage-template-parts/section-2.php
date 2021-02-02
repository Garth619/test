<section id="section-two">

  <div id="sec-two-inner">

    <div id="sec-two-left">

      <div id="sec-two-left-inner">

        <?php if (have_rows('section_two_featured_posts')): ?>
        <?php while (have_rows('section_two_featured_posts')): the_row();?>

        <?php $post_object = get_sub_field('mypost');?>
        <?php if ($post_object): ?>
        <?php $post = $post_object;?>
        <?php setup_postdata($post);?>

        <div class="sec-two-single-post">

          <a class="single-cat-title"><?php the_sub_field('blue_bar_title');?></a><!-- /.single-cat-title -->

          <a href="<?php the_permalink();?>" class="single-post-content">

            <span class="single-content"><?php the_title();?></span><!-- /.single-content -->

            <span class="learn-more">Learn more</span><!-- /.learn-more -->
          </a>

        </div><!-- /.sec-two-single-post -->

        <?php wp_reset_postdata();?>
        <?php endif;?>
        <?php the_sub_field('description');?>
        <?php endwhile;?>
        <?php endif;?>

      </div><!-- /.sec-two-left-inner -->

      <?php if (get_field('section_two_mobile_button_verbiage') && get_field('section_two_mobile_button_verbiage')) {?>

      <a href="<?php the_field('section_two_mobile_button_link');?>"
        class="button sec-two-button"><?php the_field('section_two_mobile_button_verbiage');?></a>

      <?php }?>

    </div> <!-- /.sec-two-left -->

    <!-- /.button sec-two-button -->

    <div id="sec-two-right">

      <div id="sec-two-right-inner" class="preload-section">

        <span id='sec-two-title'>case results</span><!-- sec-two-title -->

        <div id="sec-two-slider-wrapper">

          <div class="sec-two-tablet-arrow sec-two-tablet-arrow-left"></div><!-- /.sec-two-mobile-arrow -->

          <div id="sec-two-slider" class="preload-slider">

            <div class='sec-two-single-slide'>

              <span class='sec-two-slide-title'>$17 Million Settlement</span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-content'>Nationwide Real Estate Kickback Class Action</span>
              <!-- sec-two-slide-content -->

            </div>
            <!-- / sec-two-single-slide -->

            <div class='sec-two-single-slide'>

              <span class='sec-two-slide-title'>$20 Million Settlement</span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-content'>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
              <!-- sec-two-slide-content -->

            </div>
            <!-- / sec-two-single-slide -->

            <div class='sec-two-single-slide'>

              <span class='sec-two-slide-title'>$25 Million Settlement</span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-content'>Nationwide Real Estate Kickback Class Action</span>
              <!-- sec-two-slide-content -->

            </div>
            <!-- / sec-two-single-slide -->

            <div class='sec-two-single-slide'>

              <span class='sec-two-slide-title'>$17 Million Settlement</span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-content'>Nationwide Real Estate Kickback Class Action</span>
              <!-- sec-two-slide-content -->

            </div>
            <!-- / sec-two-single-slide -->

            <div class='sec-two-single-slide'>

              <span class='sec-two-slide-title'>$17 Million Settlement</span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-content'>Nationwide Real Estate Kickback Class Action</span>
              <!-- sec-two-slide-content -->

            </div>
            <!-- / sec-two-single-slide -->

          </div><!-- /#sec-two-slider -->

          <div id="sec-two-mobile-arrows">

            <div class="sec-two-mobile-arrow sec-two-mobile-arrow-left"></div><!-- /.sec-two-mobile-arrow -->

            <div class="sec-two-mobile-arrow sec-two-mobile-arrow-right"></div><!-- /.sec-two-mobile-arrow -->

          </div><!-- /#sec-two-mobile-arrows -->

          <div class="sec-two-tablet-arrow sec-two-tablet-arrow-right"></div><!-- /.sec-two-mobile-arrow -->

        </div><!-- /#sec-two-slider-wrapper -->

      </div><!-- /#sec-two-right-inner -->

    </div><!-- /.sec-two-right -->

  </div><!-- /.sec-two-inner -->

</section><!-- /#section-two -->