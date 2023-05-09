<?php
  /*
  Template Name: test Page Template
  */

  // Add your custom code here

  // Include the header

  get_header();
  // Display the header image
  // Replace 'header-image.jpg' with the name of your image file
  // echo '<div class="header-image" style="background-image: url(' . get_template_directory_uri() . '/header-image.jpg)"></div>';
?>
  <div class="container">
    <div>
      <?php if ( has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        echo '<img width="100%" class="img-header" src="' . $large_image_url[0] . '"/>';
        } 
      ?>
       
    </div>
    <div class="container">
    <div class="row m-5">
        <a href="#" class="click_loadpost btn btn-info col-lg-12">Tải 5 bài viết mới nhất</a>
        <div class="loadpost_result col-lg-12 p-3"></div>
        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    $('.click_loadpost').click(function(){
                        $.ajax({
                            type : "post", //Phương thức truyền post hoặc get
                            dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                            url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                            data : {
                                action: "loadpost", //Tên action
                            },
                            context: this,
                            beforeSend: function(){
                                //Làm gì đó trước khi gửi dữ liệu vào xử lý
                            },
                            success: function(response) {
                                //Làm gì đó khi dữ liệu đã được xử lý
                                if(response.success) {
                                    $('.loadpost_result').html(response.data);
                                }
                                else {
                                    alert('Đã có lỗi xảy ra');
                                }
                            },
                            error: function( jqXHR, textStatus, errorThrown ){
                                //Làm gì đó khi có lỗi xảy ra
                                console.log( 'The following error occured: ' + textStatus, errorThrown );
                            }
                        })
                        return false;
                    })
                })
            })(jQuery)
        </script>
      </div>
      <?php
        // $page_id = get_queried_object_id(); // Get the ID of the current page or post
        // $content = get_post_field('post_content', $page_id);
        // $blocks = parse_blocks($content); // Parse the content into blocks
        // // Loop through the blocks and find the first wp:heading block
        // foreach ($blocks as $block) 
        //   print_r($block);
        //   break;
        // }
        // // Output the content of the first wp:heading block
        // echo $heading_content;
        // // Output the URL of the first wp:image block
        // echo $image_url;
      the_content();
 
      ?>
      

      <!-- get all post -->
      <?php
        // $args = array(
        //     'post_type' => 'post',
        //     'posts_per_page' => -1, // Lấy tất cả các bài viết
        // );

        // $the_query = new WP_Query( $args );

        // if ( $the_query->have_posts() ) {
        //     echo '<ul>';
        //     while ( $the_query->have_posts() ) {
        //         $the_query->the_post();
        //         echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        //     }
        //     echo '</ul>';
        // } else {
        //     // Không tìm thấy bài viết nào
        // }

        // wp_reset_postdata();
      ?>
    </div>
  </div>
<?php
  // Display the content
  
    
      
    
  

  // Add your custom code here

  // Include the footer
  get_footer();
?>
