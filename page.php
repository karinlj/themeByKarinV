<?php
/*
Template name:  Page
Description:  Page
 */
?>
<?php get_header();?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php // for layouts of content_block

//Loopa ACF flex Content
if (function_exists('have_rows')) {

    if (have_rows('content')) {

        while (have_rows('content')) {
            the_row();

            $layout = get_row_layout();

            // load the layout from the templates folder
            get_template_part('templates/' . $layout);

        }
    }
}?>

        <?php get_footer();?>

      </div>
    </div>
  </div>
</div>