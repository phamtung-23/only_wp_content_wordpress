<?php
  /*
  Template Name: Tutorial Post Template
  */

  // Add your custom code here

  // Include the header


  // Display the post title
  echo '<h1>' . get_the_title() . '</h1>';

  // Display the featured image
  if (has_post_thumbnail()) {
    the_post_thumbnail();
  }

  // Display the post content
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;

  // Add your custom code here

  // Include the footer

?>
