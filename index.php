<?php 
  while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php permalink_link() ?>"> <?php the_title(); ?></a></h2>
    <p><?php the_content("Click to read mre",true); ?> </p>
    <hr />
  <?php }
?>