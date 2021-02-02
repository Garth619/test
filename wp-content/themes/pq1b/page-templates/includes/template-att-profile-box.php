<div class='att-profile-wrapper'>

  <div class='att-profile-image'>

    <?php $attorney_profile = get_field('attorney_bio_image');?>

    <?php if ($attorney_profile) {?>

    <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

    <?php } else {?>

    <img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Bio Placeholder" />

    <div class='placeholder-wrapper'></div><!-- placeholder-wrapper -->

    <?php }?>

  </div><!-- att-profile-image -->

  <div class='att-profile-button-wrapper'>

    <?php
global $post;
$vcfname = $post->post_name;
?>

    <?php if (get_field('location_one_address')) {?>

    <a class='button-three att-profile-button'
      href='<?php echo get_template_directory_uri(); ?>/vcard/<?php echo $vcfname; ?>.vcf'><?php the_field('download_vcard_verbiage');?></a>
    <!-- button-two  -->

    <?php }?>

    <a class='button-three att-profile-button' href=''><?php the_field('download_bio_pdf_verbiage');?></a>
    <!-- button-two  -->

  </div><!-- att-profile-button-wrapper -->

</div><!-- att-profile-wrapper -->