<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
    get_header();
    ?>
    <div class="container">
    <h2 class="text-center font-weight-bold m-3">TIN TỨC THỂ THAO</h2>
      <?php if ( have_posts() ) :?>
        <?php while ( have_posts() ) : the_post(); ?>
            
          <?php 
            echo "<h2 class='mt-3 mb-3'><a href='".get_permalink()."'>".get_the_title()."</a></h2>";
          ?>

            <div class="text-center">

                <?php 
                  $thumbnail_url = get_the_post_thumbnail_url();
                  // Output the URL of the post thumbnail
                  echo '<a href="'. get_permalink() .'"><img class="img_thumbnail_all_post" width="600px" src="'. $thumbnail_url .'" /></a>';
                ?>

            </div>
            <?php //  the_content();  ?>
            <?php // the_title( '<h2>', '</h2>' ); ?>
            <?php // the_post_thumbnail( 'postbox-thumb', array( 'width' => 100, 'height' => 100 ) ); ?>
            <?php // the_excerpt(); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <?php  _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
      <div class="text-center m-5">
        <?php echo wp_pagenavi(); ?>
      </div>
    </div>

    <?php
            

    
    // get_sidebar();
    get_footer();
?>
</body>

</html>