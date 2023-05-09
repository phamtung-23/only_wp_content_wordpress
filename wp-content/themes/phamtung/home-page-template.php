<?php
  /*
  Template Name: Home Page Template
  */

  // Add your custom code here

  // Include the header

  get_header();

?>
  <div class="main">
            <!-- MAIN CONTENT WRAP -->
            <div class="container g-0">
                <div class="content">
                    <div class="row">
                        <!-- LEFT -->
                        <div class="content__left col-sm-12 col-md col-lg-3">
                            <div class="content__panel">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">Quick link</h3>
                                    <div class="d-flex flex-column">
                                    <?php 
                                        $links = get_field('quick-link','options');
                                        if(  $links ): ?>
                                            <a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-1']['url']); ?>">
                                                <div>
                                                    <?php echo($links['link-1']['title']); ?>
                                                </div>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-2']['url']); ?>">
                                                <div>
                                                    <?php echo($links['link-2']['title']); ?>
                                                </div>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <a class="d-flex justify-content-between align-items-center" href="<?php echo ($links['link-3']['url']); ?>">
                                                <div>
                                                    <?php echo($links['link-3']['title']); ?>
                                                </div>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        <?php endif; 
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="content__panel">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">Follow us on</h3>
                                    <?php 
                                        $images = get_field('gallery-icon','options');
                                        if( $images ): ?>
                                            <ul class="list-unstyled d-flex justify-content-center mr-2 ml-2">
                                                <?php foreach( $images as $image ): ?>
                                                    <li class="m-3">
                                                        <a href="<?php echo esc_url($image['caption']); ?>">
                                                            <img width="30" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif;
                                    ?>
                                </div>
                            </div>

                            <div class="content__panel content__panel--background">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">
                                        the founder
                                    </h3>
                                    <?php 
                                        $image = get_field('img-founder','options');
                                        if( !empty( $image ) ): ?>
                                            <img class="img-founder" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo ($image['alt']); ?>" />
                                            <h4 class=""><?php echo ($image['title']); ?></h4>
                                            <p><?php echo ($image['description']); ?></p>
                                        <?php endif; 
                                    ?>
                                   
                                </div>
                            </div>
                        
                            <div class="content__panel content__panel--background">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">
                                        VOVINAM PHILOSOPHY
                                    </h3>
                                    <?php
                                        $hero = get_field('philosophy','options');
                                        if( $hero ): ?>
                                            <div id="hero">
                                                <div class="content">
                                                    <?php echo($hero['content'])?>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <img  class="img-philosophy" src="<?php echo $hero['img-philosophy']['url']; ?>" alt="">
                                                </div>
                                            </div>
                                        <?php endif; 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- LEFT -->

                        <!-- CENTER -->
                        <div class="content__center col-sm-12 col-md-12 col-lg-6">
                            <!-- SLIDER -->
                            <!-- <div class="slider__wrap">
                                <img
                                    src="./assets/images/slider_1.jpg"
                                    alt=""
                                    class="slider__img"
                                />
                                <img
                                    src="./assets/images/slider_2.jpg"
                                    alt=""
                                    class="slider__img"
                                />
                                <img
                                    src="./assets/images/slider_3.jpg"
                                    alt=""
                                    class="slider__img"
                                />
                            </div> -->
                            <!-- SLIDER -->

                            <!-- SWIPER -->
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php 
                                        $images = get_field('gallery-slider','options');
                                        if( $images ): ?>
                                                <?php foreach( $images as $image ): ?>
                                                    <div class="slider__wrap swiper-slide">
                                                        <img
                                                        
                                                            src="<?php echo ($image['url']); ?>"
                                                            alt="<?php echo ($image['alt']); ?>"
                                                            class="slider__img"
                                                        />
                                                    </div>
                                                <?php endforeach; ?>
                                        <?php endif;
                                    ?>
                                    
                                    
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <!-- SWIPER -->

                            <!-- CENTER CONTENT -->
                            <div class="content__panel">
                                <div class="center__panel-wrap">
                                    <div class="center__header">
                                        <div class="center__header-tag"></div>
                                        <h1 class="center__header-title">
                                            latest news
                                        </h1>
                                    </div>

                                    <div id="mainContentCenter" class="row">
                                        <div class="col-12">
                                            <div class="center__item active">
                                                <a href="#" class="center__item--link link--format">
                                                    <div class="center__wrap">
                                                        <div class="center__tag">
                                                            Sport
                                                        </div>
                                                        <?php
                                                            $recent_posts = wp_get_recent_posts(array(
                                                                'numberposts' => 1, // Number of recent posts thumbnails to display
                                                                'post_status' => 'publish' // Show only the published posts
                                                            ));
                                                            foreach( $recent_posts as $post_item ) : ?>
                                                                        <div class="center__wrap-img">
                                                                            <img src="<?php echo get_the_post_thumbnail_url($post_item['ID']); ?>" alt="">
                                                                        </div>
                                                                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                                                        <h3 class="center__title">
                                                                            <?php echo $post_item['post_title'] ?>
                                                                            
                                                                        </h3>
                                                                    </a>
                                                                    <div class="center__info">
                                                                        <p class="center__time">
                                                                            <?php echo $post_item['post_date_gmt'] ?>
                                                                        </p>
                                                                        <p  class="center__author">
                                                                            <?php
                                                                                $author = get_the_author_meta( 'display_name', $post_item['post_author'] );
                                                                                echo $author;
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <p class="center__description">
                                                                        <?php 
                                                                            echo $post_item['post_excerpt'];
                                                                        ?>
                                                                    </p>
                                                            <?php endforeach; ?>
                                                    
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                            $recent_posts = wp_get_recent_posts(array(
                                                'numberposts' => 4,// Number of recent posts thumbnails to display
                                                'offset'      => 1,
                                                'orderby'     => 'post_date',
                                                'order'       => 'DESC', 
                                                'post_status' => 'publish' // Show only the published posts
                                            ));
                                            foreach( $recent_posts as $post_item ) : ?>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="center__item">
                                                    <a href="#" class="center__item--link link--format">
                                                        <div class="center__wrap">
                                                            <div class="center__tag" >
                                                                Sport
                                                            </div>
                                                            <div class="center__wrap-img img_post">
                                                                <img
                                                                    src="<?php echo get_the_post_thumbnail_url($post_item['ID']); ?>"
                                                                    alt=""
                                                                    class="center__img"
                                                                />
                                                            </div>
                                                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                                                <h3 class="center__title">
                                                                        <?php echo $post_item['post_title'] ?>
                                                                </h3>
                                                            </a>
                                                            <div class="center__info">
                                                                <p class="center__time" >
                                                                    <?php echo $post_item['post_date_gmt'] ?>
                                                                </p>
                                                                <p class="center__author" >
                                                                <?php
                                                                    $author = get_the_author_meta( 'display_name', $post_item['post_author'] );
                                                                    echo $author;
                                                                ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                    </div>

                                    <div class="more-btn__wrap">
                                        <a
                                            type="button"
                                            href="<?php echo "http://".$_SERVER['HTTP_HOST']."/news";?>"
                                            class="link--format more-btn"
                                        >
                                            <span class="more-btn__text">
                                                see more news
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                
                                    
                            </div>


                            <!-- CENTER CONTENT -->
                        </div>
                        <!-- CENTER -->

                        <!-- RIGHT -->
                        <div class="content__right col-sm-12 col-md col-lg-3">
                            <div class="content__panel">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">
                                        CALENDER
                                    </h3>
                                    <div class="calendar"></div>
                                </div>
                            </div>
                            <div class="content__panel">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">
                                        MASTERS AND TEACHERS
                                    </h3>
                                    <?php 
                                        $images = get_field('gallery-teacher','options');
                                        if( $images ): ?>
                                            <ul class="list-unstyled d-flex flex-column justify-content-center mr-2 ml-2">
                                                <?php foreach( $images as $image ): ?>
                                                    <li class="m-3 d-flex align-items-center">
                                                        <img  class="img-teacher" src="<?php echo ($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        <div class="w-100 font-weight-bold"><?php echo ($image['title']); ?></div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif;
                                    ?>
                                </div>
                            </div>
                            <div class="content__panel">
                                <div class="content__panel-wrap">
                                    <h3 class="content__title">
                                        Member Federation
                                    </h3>
                                    <?php 
                                        $rows = get_field('member','options');
                                        if( $rows ) {
                                            echo '<ul class=" list-unstyled">';
                                            foreach( $rows as $row ) {
                                                ?>
                                                    <li>
                                                        <a class="text-dark " href="<?php echo $row['link-member'];?>"><?php echo $row['name-member'];?></a>
                                                    </li>
                                                <?php
                                            }
                                            echo '</ul>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- RIGHT -->
                        <div class="content__center col-sm-12 col-md-12 col-lg-12">
                        <div class="content__panel">
                                <div class="center__panel-wrap">
                                    <div class="center__header d-flex justify-content-center">
                                        <h1 class="center__header-title ">
                                            SPONSORS
                                        </h1>
                                    </div>

                                    <div id="mainContentCenter" class="row">
                                        <div class="col-12">
                                            <div class="center__item active">
                                            <?php 
                                                $images = get_field('img-sponsor','options');
                                                if( $images ): ?>
                                                    <ul class="list-unstyled d-flex justify-content-center align-items-center mr-2 ml-2">
                                                        <?php foreach( $images as $image ): ?>
                                                            <li class="m-3">
                                                                <a href="<?php echo esc_url($image['caption']); ?>">
                                                                    <img width="200" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif;
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN CONTENT WRAP -->
        </div>
<?php
  // Include the footer
  get_footer();
?>
