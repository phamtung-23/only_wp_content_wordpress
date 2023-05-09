
  <?php
  /*
    Template Name: Tutorial Post Template
    */

  // Add your custom code here

  // Include the header
  get_header();

  ?>


  <div class="container">
      <?php echo '<h1>' . get_the_title() . '</h1>';?>
      <div class="d-flex justify-content-end">
        <div>Ngày Đăng:  
          <?php $date = get_field("date");
            if ($date==null){
              echo 'Chưa đặt ngày đăng';
            }else{
              echo $date;
            }
          ?>
      </div>
      </div>
      <?php echo '<h2>' . get_the_content() . '</h2>';?>
      <?php echo "<br>";?>
     

  </div>


  <?php
  

  // // Display the featured image
  // if (has_post_thumbnail()) {
  //   the_post_thumbnail();
  // }

  // // Display the post content
  // if (have_posts()) :
  //   while (have_posts()) : the_post();
  //     the_content();
  //   endwhile;
  // endif;

  // Add your custom code here

  // Include the footer
    get_footer();
  ?>
