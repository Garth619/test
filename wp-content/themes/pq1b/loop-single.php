<?php if (have_posts()): while (have_posts()): the_post();?>

<div id='single-post'>

  <div class="blog-meta">

    <span class="date">Posted on <?php $pfx_date = get_the_date();
        echo $pfx_date?></span>

  </div><!-- blog-meta -->

  <div class="blog-content content">

    <?php the_content();?>

  </div><!-- blog-content -->

  <?php edit_post_link(__('Edit'), '', '');?>

</div><!-- single-post -->

<?php endwhile; // end of loop ?>

<?php endif;?>