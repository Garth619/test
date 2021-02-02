<section id='section-seven'>

  <div id='sec-seven-inner'>

    <div id='sec-seven-tile-wrapper'>

      <span id='sec-seven-title'><?php the_field('section_seven_title');?></span><!-- sec-seven-title -->

    </div><!-- sec-seven-tile-wrapper -->

    <div id='sec-seven-content-wrapper'>

      <div id='sec-seven-top'>

        <div id='sec-seven-img-wrapper'>

          <?php $section_seven_image = get_field('section_seven_image');?>
          <?php if ($section_seven_image) {?>
          <img class="lazyload" data-src="<?php echo $section_seven_image['url']; ?>"
            alt="<?php echo $section_seven_image['alt']; ?>" />
          <?php }?>

        </div><!-- sec-seven-img-wrapper -->

      </div><!-- sec-seven-top -->

      <div id='sec-seven-bottom' class="content">

        <?php if (get_field('section_five_column_one_intro')) {?>

        <div id='sec-seven-intro'>

          <?php the_field('section_seven_intro');?>

        </div><!-- sec-seven-intro -->

        <?php }?>

        <?php the_field('section_seven_content');?>

      </div><!-- sec-seven-bottom -->

    </div><!-- sec-seven-content-wrapper -->

  </div><!-- sec-seven-inner -->

</section><!-- section-seven -->