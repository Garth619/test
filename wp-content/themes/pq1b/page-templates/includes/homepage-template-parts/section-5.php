<section id='section-five'>

  <div id='sec-five-inner' class="content">

    <div class='sec-five-col'>

      <?php if (get_field('section_five_column_one_intro')) {?>

      <div id='sec-five-intro'>

        <?php the_field('section_five_column_one_intro');?>

      </div><!-- sec-five-intro -->

      <?php }?>

      <?php the_field('section_five_column_one_content');?>

    </div><!-- sec-five-col -->

    <div class='sec-five-col'>

      <?php if (get_field('section_five_column_two_quote')) {?>

      <div id='sec-five-quote'>

        <span id='sec-five-quote-character'>

          <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

          <?php echo file_get_contents(get_template_directory() . '/images/quote.svg', false, $auth); ?>

        </span>
        <!-- quote-character -->

        <span id='sec-five-quote-content'><?php the_field('section_five_column_two_quote');?></span>
        <!-- sec-five-quote-content -->

      </div><!-- sec-five-quote -->

      <?php }?>

      <?php the_field('section_five_column_two_content');?>

    </div><!-- sec-five-col -->

  </div><!-- sec-five-inner -->

</section><!-- section-five -->