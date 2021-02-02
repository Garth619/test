<div id="sidebar-wrapper">

  <div id='sidebar-inner'>

    <div class="sidebar-box sidebar-pa">

      <?php bulk_sidebar();?>

    </div><!-- sidebar-box -->

  </div><!-- sidebar-inner -->

  <?php $featured_attorneys = get_field('featured_attorneys');?>
  <?php if ($featured_attorneys): ?>

  <div id='featured-att-wrapper'>

    <div id='featured-att-inner'>

      <span id='featured-att-title'><?php the_field('featured_attorneys_title');?></span><!-- class -->

      <div id='featured-att-list'>

        <?php foreach ($featured_attorneys as $post): ?>
        <?php setup_postdata($post);?>

        <a href="<?php the_permalink();?>" class='single-featured-att'>

          <div class='single-featured-att-inner'>

            <div class='single-featured-att-img'>

              <?php $attorney_bio_image = get_field('attorney_bio_image');?>
              <?php if ($attorney_bio_image) {?>
              <img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />
              <?php }?>

            </div><!-- single-featured-att-img -->

            <div class='single-featured-att-content'>

              <div class='single-featured-att-content-inner'>

                <span class='single-featured-att-title'><?php the_title();?></span><!-- single-featured-att-title -->

                <span class='single-featured-att-position'><?php the_field('position_title');?></span>

                <!-- single-featured-att-position -->

              </div><!-- single-featured-att-content-inner -->

            </div><!-- single-featured-att-content -->

          </div><!-- single-featured-att-inner -->

        </a><!-- single-featured-att -->

        <?php endforeach;?>
        <?php wp_reset_postdata();?>

      </div><!-- featured-att-list -->

      <div id='featured-att-button-wrapper'>

        <?php
$row_count = count(get_field('featured_attorneys'));

if ($row_count > 5) {?>

        <a id="att-more" class='button-three featured-att-button'>MORE attorneys</a>
        <!-- button-three featured-att-button -->

        <?php }?>



        <a href="<?php the_permalink(30343);?>" class='button-three featured-att-button'>VIEW ALL</a>
        <!-- button-three featured-att-button -->

      </div><!-- featured-att-button-wrapper -->

    </div><!-- feafeatured-att-inner -->

  </div><!-- featured-att-wrapper -->

  <?php endif;?>

</div><!-- sidebar_wrapper -->