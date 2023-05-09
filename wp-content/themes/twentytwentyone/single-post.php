<?php
  /*
  Template Name: Tutorial Post Template
  */

  // Add your custom code here

  // Include the header
  get_header();

?> 
  <div class="container">
    <?php echo '<h2>' . get_the_title() . '</h2>';?>
    <?php if (have_posts()) :?>
      <?php while (have_posts()) : the_post();?>
        <?php the_content();?>
        <?php 
          $img = get_field('icon')['url'];
          echo '<img width="100px" height="100px" class="rounded-circle" src="'. $img .'" />';
        ?>
      <?php endwhile;?>
    <?php endif;?>
  </div>
<?php
  // Display the post title
  // // Display the featured image
  // if (has_post_thumbnail()) {
  //   the_post_thumbnail();
  // }
  // Include the footer
  get_footer();
?>
