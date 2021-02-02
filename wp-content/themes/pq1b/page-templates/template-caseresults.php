<?php

/* Template Name: Case Results */

get_header();?>

<div id="internal-main">

  <div id="page-container">

    <div id='large-title-wrapper'>

      <h1 class="page-title large-title no-banner-title"><?php the_title();?></h1>

    </div><!-- large-title-wrapper -->

    <div id='case-results-wrapper'>

      <?php if (have_rows('case_results')): ?>

      <?php while (have_rows('case_results')): the_row();?>
      <div class='single-case-result'>

        <div class='single-case-result-inner'>

          <span class='single-case-result-title'><?php the_sub_field('title');?></span>
          <!-- single-case-result-title -->

          <div class='single-case-result-content content'>

            <?php the_sub_field('content');?>

          </div><!-- single-case-result-content -->

        </div><!-- single-case-result-inner -->

      </div><!-- single-case-result -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- case-results-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>