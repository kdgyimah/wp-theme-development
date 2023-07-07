<?php get_header(); ?>
  <main>

    <?php while (have_posts()) {
      the_post(); ?>
      <h2><a href="<?php permalink_link() ?>"> <?php the_title(); ?></a></h2>
      <?php the_content("Click to read mre",true); ?>
      <hr />
      <?php } ?>
  </main>
  <?php get_footer(); ?>