<?php
  /*
  Template Name: Landing Page Template
  */

  // Add your custom code here

  // Include the header
  get_header();

  // Display the header image
  // Replace 'header-image.jpg' with the name of your image file
  echo '<div class="header-image" style="background-image: url(' . get_template_directory_uri() . '/header-image.jpg)"></div>';

  // Display the content
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;

  // Add your custom code here

  // Include the footer
  get_footer();
?>
