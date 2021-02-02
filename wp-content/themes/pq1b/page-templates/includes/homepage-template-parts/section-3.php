<section id='section-three'>

  <div id='sec-three-inner'>

    <h1 id='sec-three-header'><?php the_field('section_three_title');?></h1><!-- sec-three-header -->

    <?php if (get_field('section_three_description')) {?>

    <div id='sec-three-intro' class="content">

      <?php the_field('section_three_description');?>

    </div><!-- sec-three-intro -->

    <?php }?>

    <div id='sec-three-content-wrapper'>

      <div id='sec-three-sidebar'>

        <?php if (get_field('section_three_wistia_or_youtube_3')) {?>

        <div id='sec-three-video' class="pq-video">

          <?php if (get_field('section_three_wistia_or_youtube_3') == "Youtube") {?>

          <a href="https://www.youtube.com/embed/<?php the_field('sec_three_youtube_id');?>" data-lity>

            <?php }?>

            <?php if (get_field('section_three_wistia_or_youtube_3') == "Wistia") {?>

            <div
              class='mywistia wistia_embed wistia_async_<?php the_field('wistia_id_new');?> popover=true popoverContent=html'>
            </div><!-- mywistia -->

            <?php }?>

            <div class='pq-video-img'>

              <?php $section_three_video_thumnail = get_field('section_three_video_thumnail');?>
              <?php if ($section_three_video_thumnail) {?>
              <img class="lazyload" data-src="<?php echo $section_three_video_thumnail['url']; ?>"
                alt="<?php echo $section_three_video_thumnail['alt']; ?>" />
              <?php }?>

              <div class='pq-video-overlay'>

                <span class='pq-play-button'></span><!-- pq-play-button -->

              </div><!-- pq-video-overlay -->

            </div><!-- pq-video-img -->

            <?php if (get_field('section_three_wistia_or_youtube_3') == "Youtube") {?>

          </a>

          <?php }?>

        </div><!-- sec-three-video -->

        <?php }?>

        <?php if (get_field('section_three_large_description')) {?>

        <div id='sec-three-sidebar-quote' class="content">

          <?php the_field('section_three_large_description');?>

        </div><!-- sec-three-sidebar-quote -->

        <?php }?>

      </div><!-- sec-three-sidebar -->

      <div id='sec-three-content' class="content">

        <?php the_field('section_three_content');?>

      </div><!-- sec-three-content -->

    </div><!-- sec-three-content-wrapper -->

  </div><!-- sec-three-inner -->

</section><!-- section-three -->