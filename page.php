<?php get_header(); ?>
  <main>

    <?php while (have_posts()) {
      the_post(); ?>
      <h1>This is a page, not a post.</h1>
      <h2> <?php the_title(); ?></h2>
      <?php the_content("Click to read mre",true); ?>
      <hr />
    <?php } ?>
  </main>
  <?php get_footer(); ?>