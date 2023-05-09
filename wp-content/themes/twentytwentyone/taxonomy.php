<?php
  /*
  Template Name: Tutorial Post Template
  */

  // Add your custom code here

  // Include the header
  get_header();
?>

<div class="container">
  <div class="text-center m-4">
    <?php  echo '<h2 class="font-weight-bold">' . get_the_title() . '</h1>'; ?>
  </div>
  <div class="row">
    
      <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              ?>
                <div class="col-lg-6 p-2">
                 
                    <?php 
                      echo "<h3 class='text-success'  ><a class='text-success'  href='".get_permalink()."'>".get_the_title()."</a></h3>";
                    ?>

                  <div>
                    <?php the_content();?>
                  </div>
                </div>
              <?php
            endwhile;
          endif;
      ?>
  </div>
</div>
<div class="text-center">
  <?php echo wp_pagenavi(); ?>
</div>


<?php 
// // Display the featured image
  // if (has_post_thumbnail()) {
  //   the_post_thumbnail();
  // }
  get_footer();
?>
