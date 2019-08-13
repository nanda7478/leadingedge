<?php
/*
 Display Template Name: My Document
*/

 $user = wp_get_current_user();
 $currentuserrole = $user->roles['0'];
 if($currentuserrole == "administrator"){
      $currentuserrolemail == "subscriber";
 }else{
    $currentuserrolemail == "administrator";
}
 if ( ! function_exists( 'wp_handle_upload' ) ) {
  require_once ( ABSPATH . 'wp-admin/includes/file.php' );
}
require_once(ABSPATH . 'wp-admin/includes/image.php');

 if($_POST['submit']  == "Upload"){
               $args1 = array(
        'role' => $currentuserrolemail,
        'orderby' => 'user_nicename',
        'order' => 'ASC'
         );
         $subscribers = get_users($args1);
         foreach($subscribers as $user){
            $sendto = $user->user_email;
            $to      =  $sendto;
            $subject = 'the subject';
            $message = 'hello';
            mail($to, $subject, $message, $headers);
                 
              }
         
                     $document_category= 11;
                     $my_post = array(
                        'post_title'    => "Agreements",
                        'post_status'   => 'publish',
                        'post_type'   => 'my-document'
                       );

                      $my_post_id = wp_insert_post($my_post);
                     if($my_post_id) {
                         
                         /* upload  DRIVERS LICENSE  Start */
                      if($_FILES['document_upload']['error'] == 0) {
                        $uploadedfile = $_FILES['document_upload'];
                        $upload_overrides = array( 'test_form' => false );
                        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
                        if ( $movefile && !isset( $movefile['error'] ) ) {

                          $wp_filetype = $movefile['type'];
                          $filename = $movefile['file'];
                          $wp_upload_dir = wp_upload_dir();
                          $attachment = array(
                            'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ),
                            'post_mime_type' => $wp_filetype,
                            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
                            'post_content' => '',
                            'post_status' => 'inherit'
                          );
                          $attach_id = wp_insert_attachment( $attachment, $filename);
                          $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
                          wp_update_attachment_metadata( $attach_id,  $attach_data );
                          
                          
                          update_post_meta( $my_post_id, 'document_upload', $attach_id);
                        }  else {
                          $_SESSION['success'] .= $movefile['error'];
                        }
                      }
                      /* upload  DRIVERS LICENSE  Close */

                      $cat_ids = array($document_category);
    
                    $cat_ids = array_map( 'intval', $cat_ids );
                    $cat_ids = array_unique( $cat_ids );
                 
                    $term_taxonomy_ids = wp_set_object_terms($my_post_id, $cat_ids, 'document_category' );

                     }




                       //update_post_meta($my_post_id, 'type', "General Aviation");
 

 }


if($currentuserrole == "administrator"){
      $currentuserrolemail == "subscriber";
 }else{
    $currentuserrolemail == "administrator";
}
 if ( ! function_exists( 'wp_handle_upload' ) ) {
  require_once ( ABSPATH . 'wp-admin/includes/file.php' );
}
require_once(ABSPATH . 'wp-admin/includes/image.php');

 if($_POST['submit'] == "Report"){
               $args1 = array(
        'role' => $currentuserrolemail,
        'orderby' => 'user_nicename',
        'order' => 'ASC'
         );
         $subscribers = get_users($args1);
         foreach($subscribers as $user){
            $sendto = $user->user_email;
            $to      =  $sendto;
            $subject = 'the subject';
            $message = 'hello';
            mail($to, $subject, $message, $headers);
                 
              }
         
                     $document_category1= 12;
                     $my_post = array(
                        'post_title'    => "Reports",
                        'post_status'   => 'publish',
                        'post_type'   => 'my-document'
                       );

                      $my_post_id = wp_insert_post($my_post);
                     if($my_post_id) {
                         
                         /* upload  DRIVERS LICENSE  Start */
                      if($_FILES['document_upload']['error'] == 0) {
                        $uploadedfile = $_FILES['document_upload'];
                        $upload_overrides = array( 'test_form' => false );
                        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
                        if ( $movefile && !isset( $movefile['error'] ) ) {

                          $wp_filetype = $movefile['type'];
                          $filename = $movefile['file'];
                          $wp_upload_dir = wp_upload_dir();
                          $attachment = array(
                            'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ),
                            'post_mime_type' => $wp_filetype,
                            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
                            'post_content' => '',
                            'post_status' => 'inherit'
                          );
                          $attach_id = wp_insert_attachment( $attachment, $filename);
                          $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
                          wp_update_attachment_metadata( $attach_id,  $attach_data );
                          
                          
                          update_post_meta( $my_post_id, 'document_upload', $attach_id);
                        }  else {
                          $_SESSION['success'] .= $movefile['error'];
                        }
                      }
                      /* upload  DRIVERS LICENSE  Close */

                      $cat_ids = array($document_category1);
    
                    $cat_ids = array_map( 'intval', $cat_ids );
                    $cat_ids = array_unique( $cat_ids );
                 
                    $term_taxonomy_ids = wp_set_object_terms($my_post_id, $cat_ids, 'document_category' );

                     }




                       //update_post_meta($my_post_id, 'type', "General Aviation");
 

 }


 if($currentuserrole == "administrator"){
      $currentuserrolemail == "subscriber";
 }else{
    $currentuserrolemail == "administrator";
}
 if ( ! function_exists( 'wp_handle_upload' ) ) {
  require_once ( ABSPATH . 'wp-admin/includes/file.php' );
}
require_once(ABSPATH . 'wp-admin/includes/image.php');

 if($_POST['submit'] == "Market"){
               $args1 = array(
        'role' => $currentuserrolemail,
        'orderby' => 'user_nicename',
        'order' => 'ASC'
         );
         $subscribers = get_users($args1);
         foreach($subscribers as $user){
            $sendto = $user->user_email;
            $to      =  $sendto;
            $subject = 'the subject';
            $message = 'hello';
            mail($to, $subject, $message, $headers);
                 
              }
         
                     $document_category2= 13;
                     $my_post = array(
                        'post_title'    => "Market Evaluations",
                        'post_status'   => 'publish',
                        'post_type'   => 'my-document'
                       );

                      $my_post_id = wp_insert_post($my_post);
                     if($my_post_id) {
                         
                         /* upload  DRIVERS LICENSE  Start */
                      if($_FILES['document_upload']['error'] == 0) {
                        $uploadedfile = $_FILES['document_upload'];
                        $upload_overrides = array( 'test_form' => false );
                        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
                        if ( $movefile && !isset( $movefile['error'] ) ) {

                          $wp_filetype = $movefile['type'];
                          $filename = $movefile['file'];
                          $wp_upload_dir = wp_upload_dir();
                          $attachment = array(
                            'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ),
                            'post_mime_type' => $wp_filetype,
                            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
                            'post_content' => '',
                            'post_status' => 'inherit'
                          );
                          $attach_id = wp_insert_attachment( $attachment, $filename);
                          $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
                          wp_update_attachment_metadata( $attach_id,  $attach_data );
                          
                          
                          update_post_meta( $my_post_id, 'document_upload', $attach_id);
                        }  else {
                          $_SESSION['success'] .= $movefile['error'];
                        }
                      }
                      /* upload  DRIVERS LICENSE  Close */

                      $cat_ids = array($document_category2);
    
                    $cat_ids = array_map( 'intval', $cat_ids );
                    $cat_ids = array_unique( $cat_ids );
                 
                    $term_taxonomy_ids = wp_set_object_terms($my_post_id, $cat_ids, 'document_category' );

                     }




                       //update_post_meta($my_post_id, 'type', "General Aviation");
 

 }


get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('banner_header_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
The Inside Edge
 </h1>
<div class="profile-document-button">
    <div class="profile-button">
        <a href="<?php echo site_url();?>/account/">My Profile</a>
    </div>
    <div class="document-button">
        <a href="<?php echo site_url();?>/document/">My Document</a>
    </div>
</div>
</div>
</div>
</div>
<?php endwhile;?>


<div class="client-document-section">
    <div class="container">
    <h2>Agreements</h2>
    <div class="row">
    <?php $args = array(
           'post_type' => 'my-document' ,
           'order' => 'ASC' ,
           'posts_per_page' => 4,
           'tax_query' => array(
                  array(
                         'taxonomy' => 'document_category',
                         'field'  => 'slug',
                            'terms' => 'agreements'
                         )
                     )
            ); ?>
      <?php $query = new WP_Query($args); 
     $counter = 1;      
     ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-lg-12">
            <table>
                <tr>
                    <td><?php the_title(); ?><?php echo $counter; ?> </td>
                    <td>
                    <?php 
                 $file = get_field('document_upload');
                 if( $file ) {
                $url = wp_get_attachment_url( $file );
                 ?>
                    <a href="<?php echo $url; ?>" target="_blank">Downloads</a>
                    <?php
                     }
                     ?>
                    </td>

                    <!-- <td><a href="<?php echo get_delete_post_link( get_the_ID() ); ?>">Delete</a></td> -->
                </tr>
            </table>
        </div>
        <?php 
        $counter++;
endwhile;
wp_reset_postdata();  
?>
    </div>


        <?php if($currentuserrole == 'administrator'){ ?>
        <div class="row">
        <div class="col-lg-12">
               <form id="thumbnail_upload" name="thumbnail_upload" method="post"  enctype="multipart/form-data">
                <input type="file" name="document_upload"  id="document_upload">
                <input type="submit" id="submit" name="submit" value="Upload">
                </form>
            </div>
            
        </div>
        <?php } ?>
    </div>

<div class="container">
    <h2>Reports</h2>
    <div class="row">
    <?php $args = array(
           'post_type' => 'my-document' ,
           'order' => 'ASC' ,
           'posts_per_page' => 4,
           'tax_query' => array(
                  array(
                         'taxonomy' => 'document_category',
                         'field'  => 'slug',
                            'terms' => 'reports'
                         )
                     )
            ); ?>
      <?php $query = new WP_Query($args); 
     $counter = 1;      
     ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-lg-12">
            <table>
                <tr>
                    <td><?php the_title(); ?><?php echo $counter; ?> </td>
                    <td>
                    <?php 
                 $file = get_field('document_upload');
                 if( $file ) {
                $url = wp_get_attachment_url( $file );
                 ?>
                    <a href="<?php echo $url; ?>" target="_blank">Downloads</a>
                    <?php
                     }
                     ?>
                    </td>
                    <!-- <td><a href="<?php echo get_delete_post_link( get_the_ID() ); ?>">Delete</a></td> -->
                </tr>
            </table>
        </div>
        <?php 
        $counter++;
endwhile;
wp_reset_postdata();  
?>
    </div>


<?php if($currentuserrole == 'administrator'){ ?>
        <div class="row">
        <div class="col-lg-12">
               <form id="thumbnail_upload" name="thumbnail_upload" method="post"  enctype="multipart/form-data">
                <input type="file" name="document_upload"  id="document_upload">
                <input type="submit" id="submit" name="submit" value="Report">
                </form>
            </div>
            
        </div>
        <?php } ?>
    </div>


<div class="container">
    <h2>Market Evaluations</h2>
    <div class="row">
    <?php $args = array(
           'post_type' => 'my-document' ,
           'order' => 'ASC' ,
           'posts_per_page' => 4,
           'tax_query' => array(
                  array(
                         'taxonomy' => 'document_category',
                         'field'  => 'slug',
                            'terms' => 'market-evaluations'
                         )
                     )
            ); ?>
      <?php $query = new WP_Query($args); 
     $counter = 1;      
     ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-lg-12">
            <table>
                <tr>
                    <td><?php the_title(); ?><?php echo $counter; ?> </td>
                    <td>
                    <?php 
                 $file = get_field('document_upload');
                 if( $file ) {
                $url = wp_get_attachment_url( $file );
                 ?>
                    <a href="<?php echo $url; ?>" target="_blank">Downloads</a>
                    <?php
                     }
                     ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php 
        $counter++;
endwhile;
wp_reset_postdata();  
?>
    </div>


<?php if($currentuserrole == 'administrator'){ ?>
        <div class="row">
        <div class="col-lg-12">
               <form id="thumbnail_upload" name="thumbnail_upload" method="post"  enctype="multipart/form-data">
                <input type="file" name="document_upload"  id="document_upload">
                <input type="submit" id="submit" name="submit" value="Market">
                </form>
            </div>
            
        </div>
        <?php } ?>
    </div>



</div>

<?php
get_footer();
?>