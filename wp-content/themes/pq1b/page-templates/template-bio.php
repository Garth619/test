<?php

/* Template Name: Att Bio */

get_header();?>

<div id="internal-main">

  <div id="page-container" class="two-col no-banner-layout">

    <?php get_sidebar('bio');?>

    <div class="page-content">

      <h1 class="page-title default-title bio-title"><?php the_title();?></h1>

      <span id='att-bio-position'><?php the_field('position_title');?></span><!-- att-bio-position -->

      <div id='mobile-att-profile'>

        <?php // mobile att profile

get_template_part('page-templates/includes/template', 'att-profile-box');?>

      </div><!-- mobile-att-profile -->

      <div class='page-content-inner content bio-content'>

        <?php

get_template_part('loop', 'page');

if (have_rows('news_media_and_publications')):
    while (have_rows('news_media_and_publications')): the_row();?>

        <h2><?php the_sub_field('title');?></h2>

        <?php

        $category_ids = get_sub_field('category');
        $attorney_tag_ids = get_sub_field('attorney_tag');

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $category_ids,
                ),
                array(
                    'taxonomy' => 'post_tag',
                    'field' => 'id',
                    'terms' => $attorney_tag_ids,
                ),
            ),
        );

        $articles_query = new WP_Query($args);
        echo "<ul>";
        while ($articles_query->have_posts()): $articles_query->the_post();

            if (get_field('video_news_media') == 'Video') {

                $video = get_field('blog_video');

                preg_match('/src="(.+?)"/', $video, $matches_url);
                $src = $matches_url[1];

                preg_match('/embed(.*?)?feature/', $src, $matches_id);
                $id = $matches_id[1];
                $id = str_replace(str_split('?/'), '', $id);

                ?>

        <li class="bio-video-wrapper">

          <div class='bio-video-img'>

            <img src="http://img.youtube.com/vi/<?php echo $id; ?>/mqdefault.jpg">

          </div><!-- bio-video-img -->

          <div class='bio-video-content'>

            <?php the_content();?>

            <a href="<?php the_permalink();?>">View Video</a>

          </div><!-- bio-video-content -->

        </li>

        <?php }?>

        <?php if (get_field('video_news_media') == 'PDF' || get_field('video_news_media') == null) {?>

        <li>

          <strong><?php the_title();?></strong><br />

          <?php if (get_field('publication_name')) {

                the_field('publication_name');?> |

          <?php }

                if (get_field('media_date')) {

                    the_field('media_date');?> |

          <?php }?>

          <?php if (get_field('video_news_media') == 'PDF') {?>

          <a href="<?php the_field('read_article_pdf');?>">Read Article</a>

          <?php }?>

          <?php if (get_field('video_news_media') == null) {?>

          <a href="<?php the_permalink();?>">Read Article</a>

          <?php }?>

        </li>

        <?php }

        endwhile;
        echo "</ul>";
        wp_reset_postdata();
    endwhile;
endif;?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>