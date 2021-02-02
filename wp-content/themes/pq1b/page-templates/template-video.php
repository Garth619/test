<?php

/* Template Name: Video Center */

get_header();?>

<div id="internal-main">

  <div id="page-container">

    <div id='large-title-wrapper'>

      <h1 class="page-title large-title no-banner-title"><?php the_title();?></h1>

    </div><!-- large-title-wrapper -->

    <div id='video-wrapper'>

      <?php if (have_rows('video_center_')): ?>
      <?php while (have_rows('video_center_')): the_row();?>

      <?php if (get_field('wistia_or_youtube') == "Youtube") {?>

      <div class='single-video pq-video'>

        <a href="https://www.youtube.com/embed/<?php the_sub_field('youtube_id_video_center');?>" data-lity>

          <div class='single-video-inner'>

            <div class='pq-video-img'>

              <div class='pq-video-overlay'>

                <span class='pq-play-button'></span><!-- pq-play-button -->

              </div><!-- pq-video-overlay -->

              <?php if (get_sub_field('video_thumbnail_select') == "Leave Blank") {?>

              <img src="https://img.youtube.com/vi/<?php the_sub_field('youtube_id_video_center');?>/0.jpg" />

              <?php }?>

              <?php if (get_sub_field('video_thumbnail_select') == "Add Thumbnail Image") {?>

              <?php $video_thumbnail_video_center = get_sub_field('video_thumbnail_video_center');?>

              <img src="<?php echo $video_thumbnail_video_center['url']; ?>"
                alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

              <?php }?>

            </div><!-- pq-video-img -->

            <div class='video-title-wrapper'>

              <span class='video-title'><?php the_sub_field('video_title_video_center');?></span><!-- video_title -->

            </div><!-- video_title_wrapper -->

          </div><!-- single-video-inner -->

        </a>

        <div class='pq-video-line'></div><!-- pq-video-line -->

      </div><!-- single_video -->

      <?php }?>

      <?php if (get_field('wistia_or_youtube') == "Wistia") {?>

      <div class='single-video pq-video'>

        <div class='single-video-inner'>

          <div class='pq-video-img'>

            <?php if (get_sub_field('video_thumbnail_select') == "Add Thumbnail Image") {?>

            <div
              class='mywistia wistia_embed wistia_async_<?php the_sub_field('wistia_id_video_center');?> popover=true popoverContent=html'>
            </div><!-- mywistia -->

            <?php }?>

            <?php if (get_sub_field('video_thumbnail_select') == "Leave Blank") {?>

            <div class="mywistia-thumbnail">

              <div
                class='mywistia wistia_embed wistia_async_<?php the_sub_field('wistia_id_video_center');?> popover=true popoverContent=thumbnail'>
              </div><!-- mywistia -->

            </div>
            <!-- mywistia-thumbnail -->

            <?php }?>

            <div class='pq-video-overlay'>

              <span class='pq-play-button'></span><!-- pq-play-button -->

            </div><!-- pq-video-overlay -->

            <?php if (get_sub_field('video_thumbnail_select') == "Add Thumbnail Image") {?>

            <?php $video_thumbnail_video_center = get_sub_field('video_thumbnail_video_center');?>

            <img src="<?php echo $video_thumbnail_video_center['url']; ?>"
              alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

            <?php }?>

          </div><!-- pq-video-img -->

          <div class='video-title-wrapper'>

            <span class='video-title'><?php the_sub_field('video_title_video_center');?></span><!-- video-title -->

          </div><!-- video-title-wrapper -->

        </div><!-- single-video-inner -->

        <div class='pq-video-line'></div><!-- pq-video-line -->

      </div><!-- single-video -->

      <?php }?>

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- video-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>

<?php if (get_field('wistia_or_youtube') == "Wistia") {?>

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php }?>