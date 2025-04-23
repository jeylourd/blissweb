<?php
/**
 * Plugin Name: jlurd Company Counsel Crud
 * Description: My First Wordpress Plugin
 * Author: Jeylourd T. Alcontin
 * Author URI: https://alcontinj.blissweb.info
 * Version: 1.0.0 
 * Text Domain: Company-Counsel-Crud
 * 
 * */  

//  if( !defined('ABSPATH') ){
//     echo 'Something is not normal here';
//     exit;
//  }


register_activation_hook(__FILE__, 'crudOperationsTable');

function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name = $wpdb->prefix . 'jlurd_tile_view_maker';
  $sql = "CREATE TABLE `$table_name` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) DEFAULT NULL,
  `position` varchar(220) DEFAULT NULL,
  `tile_row_number` int(150) DEFAULT NULL,
  `tile_column_number` int(150) DEFAULT NULL,
  `featured_photo` varchar(220) DEFAULT NULL,
  PRIMARY KEY(user_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
}

add_action('admin_menu', 'addAdminPageContent');

function addAdminPageContent() {
  add_menu_page('CRUD', 'JLURD Tile View Maker', 'manage_options' ,__FILE__, 'crudAdminPage', 'dashicons-wordpress');
  wp_enqueue_media(); // Make sure media scripts are loaded

}
function crudAdminPage() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'jlurd_tile_view_maker';
   
  if (isset($_POST['newsubmit'])) {
    $user_id = get_current_user_id();
    $name = $_POST['newname'];
    $position = $_POST['newposition'];
    $tile_row_number = $_POST['tile_row_number'];
    $tile_column_number = $_POST['tile_column_number'];
    $my_media_field = $_POST['my_media_field'];
    $wpdb->query("INSERT INTO $table_name(name,position,	tile_row_number,tile_column_number,featured_photo,created_by_user_id) VALUES('$name','$position','$tile_row_number','$tile_column_number','$my_media_field','$user_id')");
    echo "<script>location.replace('admin.php?page=jlurd_crud/Client-+ns.php');</script>";
  }

  if (isset($_POST['uptsubmit'])) {
    $id = $_POST['uptid'];
    $name = $_POST['uptname'];
    $position = $_POST['uptposition'];
    $upt_tile_row_number = $_POST['upt_tile_row_number'];
    $upt_tile_column_number = $_POST['upt_tile_column_number'];
    $upt_position_featured_photo = $_POST['upt_position_featured_photo'];
    $today = date ('Y-m-d H:i:s');
    $wpdb->query("UPDATE $table_name SET name='$name',position='$position',tile_row_number='$upt_tile_row_number',tile_column_number='$upt_tile_column_number',featured_photo='$upt_position_featured_photo',modified_date='$today'  WHERE user_id='$id'");
    echo "<script>location.replace('admin.php?page=jlurd_crud/Client-+ns.php');</script>";
  }

  
        
        

  if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $wpdb->query("DELETE FROM $table_name WHERE user_id='$del_id'");
    echo "<script>location.replace('admin.php?page=jlurd_crud/Client-+ns.php');</script>";
  }
  
  ?>
  <div class="wrap">
    <h2>JLURD Tile View Maker</h2>
    <table class="wp-list-table widefat striped">
      <thead>
        <tr>
          
          <th width="25%">Name</th>
          <th width="25%">Position</th>
          <th width="25%">Row No.</th>
          <th width="25%">Column No.</th>
          <th width="25%">Featured Photo</th>
          <th width="25%">Actions</th>
        </tr>
      </thead>
      <tbody>
        <form action="" method="post">
          <tr>
           
            <td><input type="text" id="newname" name="newname"></td>
            <td><input type="text" id="newposition" name="newposition"></td>
            <td><input type="text" id="tile_row_number" name="tile_row_number"></td>
            <td><input type="text" id="tile_column_number" name="tile_column_number"></td>
            <td><img src = "" height="120px" id ="img_url"><input type="text" id="my_media_field" name="my_media_field" style ="display:none;"><button type="button" id="my-media-button" class="button">Add Media</button></td>
            <td><button id="newsubmit" name="newsubmit" type="submit">INSERT</button></td>
          </tr>
        </form>
        <?php
          $result = $wpdb->get_results("SELECT * FROM $table_name");
          foreach ($result as $print) {
            echo "
              <tr>
                <td width='25%' style ='display:none;'>$print->user_id</td>
                <td width='25%'>$print->name</td>
                <td width='25%'>$print->position</td>
                <td width='25%'>$print->tile_row_number</td>
                <td width='25%'>$print->tile_column_number</td>
                <td width='25%'> <img src = '$print->featured_photo' height='120px'></td>
                <td width='25%'><a href='admin.php?page=jlurd_crud/Client-+ns.php&upt=$print->user_id'><button type='button'>UPDATE</button></a> <a href='admin.php?page=jlurd_crud/Client-+ns.php&del=$print->user_id'><button type='button'>DELETE</button></a></td>
              </tr>
            ";
          }
        ?>
      </tbody>  
    </table>
    <br>
    <br>
    <?php
      if (isset($_GET['upt'])) {
        $upt_id = $_GET['upt'];
        $result = $wpdb->get_results("SELECT * FROM $table_name WHERE user_id='$upt_id'");
        foreach($result as $print) {
          $name = $print->name;
          $email = $print->email;
        }

        
        echo "
        <table class='wp-list-table widefat striped'>
          <thead>
            <tr>
              <th style ='display:none;'  width='25%'>ID</th>
              <th width='25%'>Name</th>
               <th width='25%'>Position</th>
               <th width='25%'>Row No.</th>
               <th width='25%'>Column No.</th>
               <th width='25%'>Featured Photo</th>
               <th width='25%'>Actions</th>
            </tr>
          </thead>
          <tbody>
            <form action='' method='post'>
              <tr>
                <td style ='display:none;' width='25%'>$print->user_id <input type='hidden' id='uptid' name='uptid' value='$print->user_id'></td>
                <td width='25%'><input type='text' id='uptname' name='uptname' value='$print->name'></td>
                <td width='25%'><input type='text' id='uptposition' name='uptposition' value='$print->position'></td>
                <td width='25%'><input type='text' id='uptposition' name='upt_tile_row_number' value='$print->tile_row_number'></td>
                <td width='25%'><input type='text' id='uptposition' name='upt_tile_column_number' value='$print->tile_column_number'></td>
                <td width='25%'><img src = '$print->featured_photo' height='120px' id ='upt_img_url'><input type='text' id='upt_position_featured_photo' name='upt_position_featured_photo' value='$print->featured_photo' style ='display:none;'><button type='button' id='update-my-media-button' class='button'>Select Media</button></td>
                <td width='25%'><button id='uptsubmit' name='uptsubmit' type='submit'>UPDATE</button> <a href='admin.php?page=jlurd_crud/Client-+ns.php'><button type='button'>CANCEL</button></a></td>
              </tr>
            </form>
          </tbody>
        </table>";
      }
    ?>
  </div>
  <script>
jQuery(document).ready(function($) {
    $('#my-media-button').click(function(e) {
        e.preventDefault();

        // Open the media uploader
        var media_uploader = wp.media.editor.open();
        
        media_uploader.on('insert', function(selected, attachment) {
         console.log(selected.models[0].changed.url);
            // Get the attachment URL (or other data)
            var attachment_url =selected.models[0].changed.url;
           // var attachment_id = attachment.id;

            // Set the URL in the input field
            $('#my_media_field').val(attachment_url);
            $('#img_url').attr('src', attachment_url);;
            // You might also want to set an ID for later use
            //$('#my-media-input').data('attachment_id', attachment_id);
        });

        media_uploader.open();
    });
    $('#update-my-media-button').click(function(e) {
        e.preventDefault();

        // Open the media uploader
        var media_uploader = wp.media.editor.open();
        
        media_uploader.on('insert', function(selected, attachment) {
         console.log(selected.models[0].changed.url);
            // Get the attachment URL (or other data)
            var attachment_url =selected.models[0].changed.url;
           // var attachment_id = attachment.id;

            // Set the URL in the input field
            $('#upt_position_featured_photo').val(attachment_url);
            $('#upt_img_url').attr('src', attachment_url);;
            // You might also want to set an ID for later use
            //$('#my-media-input').data('attachment_id', attachment_id);
        });

        media_uploader.open();
    });


    
});
</script>
  <?php
}