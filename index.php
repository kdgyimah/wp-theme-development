<?php 
  while (have_posts()) {
    the_post(); ?>
    <h2><a href="<?php permalink_link() ?>"> <?php echo the_title() ?></a></h2>
    <p><?php echo the_content("Click to read mre",true); ?> </p>
    <hr />
  <?php }
?>