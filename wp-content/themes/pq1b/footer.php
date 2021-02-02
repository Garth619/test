<footer>

  <div id='footer-inner'>

    <div id='footer-form-wrapper'>

      <span id='footer-form-title'><?php the_field('form_title', 'option');?></span><!-- footer-form-title -->

      <span id='footer-form-descrip'><?php the_field('form_title_description', 'option');?></span>
      <!-- footer-form-descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345);?>

      <span id='required'><span>*</span>Required Field</span><!-- required -->

    </div><!-- footer-form-wrapper -->

    <?php if (!is_page_template('page-templates/template-contact.php')) {?>

    <div id='footer-location-wrapper'>

      <div id='footer-logo'>

        <a href='<?php bloginfo('url');?>'>

          <?php // for private directory demo site, this can be deleted after going live

    $auth = stream_context_create(array(
        'http' => array(
            'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
    )
    );?>

          <?php $logom = get_field('logo', 'option');?>

          <?php if ($logom) {

        echo file_get_contents($logom, false, $auth);

    }?>


        </a>

      </div><!-- footer-logo -->

      <div id='footer-location-inner'>

        <?php get_template_part('page-templates/includes/template', 'locations');?>

      </div><!-- footer-location-inner -->

    </div><!-- footer-location-wrapper -->

    <?php }?>

    <div id='copyright-wrapper'>

      <ul>
        <li>Copyright &copy; <?php echo date('Y'); ?> <?php the_field('copyright_law_firm_name', 'option');?></li>
        <?php if (get_field('disclaimer', 'option') || get_field('disclaimer_title', 'option')) {?>
        <li><a href="<?php the_field('disclaimer', 'option');?>"><?php the_field('disclaimer_title', 'option');?></a>
          <?php }?>
        </li>
        <?php if (get_field('privacy_policy', 'option') || get_field('privacy_policy_title', 'option')) {?>
        <li><a
            href="<?php the_field('privacy_policy', 'option');?>"><?php the_field('privacy_policy_title', 'option');?></a>
        </li>
        <?php }?>
      </ul>

      <a id='ilawyer' href='//ilawyermarketing.com' target="_blank" rel="noopener">

        <?php echo file_get_contents(get_template_directory() . '/images/ilawyer.svg', false, $auth); ?>

      </a><!-- ilawyer -->

    </div><!-- copyright-wrapper -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

<?php if (is_front_page()) {?>

<script type="text/javascript">
jQuery(document).ready(function($) {

  // above the fold home functions

  $("body").addClass("ready");


});

// load all other scripts

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript("<?php bloginfo('template_directory');?>/js/custom-min.js", 2000);

<?php if (get_field('live_chat', 'option')) {?>

delayScript("<?php the_field('live_chat', 'option');?>", 2000);

<?php }?>
</script>

<?php }?>



</body>

</html>