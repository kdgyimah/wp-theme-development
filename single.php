<?php
  get_header();
  while (have_posts()) {
    the_post(); ?>
    <h2> <?php the_title(); ?></h2>
    <?php the_content("Click to read mre",true); ?>
  <?php }

  get_footer();
?>