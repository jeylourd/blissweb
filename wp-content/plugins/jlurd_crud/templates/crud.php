<?php
     global $wpdb;
     $table_name = $wpdb->prefix . 'jlurd_tileview_maker_category';
    if (isset($_POST['newsubmit'])) {
        $user_id = get_current_user_id();
        $category_name = $_POST['category_name'];
        $catdescription = $_POST['catdescription'];
   
        //$my_media_field = $_POST['my_media_field'];
        $wpdb->query("INSERT INTO $table_name(category_name,cat_description,created_by_user_id) VALUES('$category_name','$catdescription','$user_id')");
        echo "<script>location.replace('admin.php?page=new-entry');</script>";
      }

      if (isset($_POST['uptsubmit'])) {
        $user_id = get_current_user_id();
         $id = $_POST['uptid'];
         $update_category_name = $_POST['update_category_name'];
         $update_cat_description = $_POST['update_cat_description'];
         $today = date ('Y-m-d H:i:s');
         $wpdb->query("UPDATE $table_name SET category_name='$update_category_name',cat_description='$update_cat_description',modified_date='$today',modified_by_user_id='$user_id'  WHERE tileview_category_id='$id'");
         echo "<script>location.replace('admin.php?page=new-entry');</script>";
       }
     
       if (isset($_GET['del'])) {
         $del_id = $_GET['del'];
         $wpdb->query("DELETE FROM $table_name WHERE tileview_category_id='$del_id'");
         echo "<script>location.replace('admin.php?page=new-entry');</script>";
       }
      
?>

<div class="container-fluid p-5 bg-warning text-white text-center">
  <h1 style ="color:white;">Tile View Maker</h1>
  <p>Version 1.0.0</p> 
</div>
<br>
  
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCategory">Add New Category</button>

   <!-- The Modal -->
    <div class="modal" id="addNewCategory">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add new tile category</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="" method="post">
                <input type="text" class ="form-control input-sm" id="category_name" name="category_name" placeholder = "Category Name" required><br>
                <textarea type="text" class ="form-control input-sm" id="catdescription" name="catdescription" placeholder = "Description" ></textarea><br>
                <button id="newsubmit" name="newsubmit" type="submit" class="btn btn-primary btn-lg px-4">Save Data</button>
                </tr>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
    </div> 
    <!-- ENBD MODAL -->


    <div class="wrap">
   
   <table class="table table-bordered table-hover">
     <thead>
       <tr>
         
         <th>Category Name</th>
         <th>Description</th>
         <th>Created Date</th>
		     <th>Shortcode</th>
         <th>Actions</th>
       </tr>
     </thead>
     <tbody>
      
       <?php
         $result = $wpdb->get_results("SELECT * FROM $table_name");
         foreach ($result as $print) {
           echo "
             <tr>
               <td ' style ='display:none;'>$print->tileview_category_id</td>
               <td >$print->category_name</td>
               <td>$print->cat_description</td>
               <td>".date('F d Y H:m:sa',strtotime($print->created_date))."</td>
			   <td>[tileViewDisplay category_id ='".$print->tileview_category_id."']</td>
               <td width='25%'><a href='admin.php?page=new-entry&view=$print->tileview_category_id' class ='btn btn-warning btn-sm'>View <i style ='background-color:blue !important;color:white;border-radius:7px 7px 7px 7px' class='bi bi-info'></i></a> <a href='admin.php?page=new-entry&upt=$print->tileview_category_id' class ='btn btn-warning btn-sm'><i class='bi bi-pencil'></i></a> <a href='admin.php?page=new-entry&del=$print->tileview_category_id'><button type='button' class ='btn btn-danger btn-sm'><i class='bi bi-trash'></i></button></a></td>
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
       $result = $wpdb->get_results("SELECT * FROM $table_name WHERE tileview_category_id='$upt_id'");
       foreach($result as $print) {
         $name = $print->name;
         $email = $print->email;
       }

       
       echo "
       <table class='wp-list-table widefat striped'>
         <thead>
           <tr>
             <th style ='display:none;'  width='25%'>ID</th>
             <th width='25%'>Category Name</th>
              <th width='25%'> Description</th>
              <th width='25%'>Actions</th>
           </tr>
         </thead>
         <tbody>
           <form action='' method='post'>
             <tr>
               <td style ='display:none;' width='25%'>$print->tileview_category_id <input type='hidden' id='uptid' name='uptid' value='$print->tileview_category_id'></td>
               <td width='25%'><input type='text' id='uptname' name='update_category_name' value='$print->category_name'></td>
               <td width='25%'><textarea type='text' id='uptposition' name='update_cat_description' style ='width:300px;'>$print->cat_description</textarea></td>
               <td width='25%'><button id='uptsubmit' name='uptsubmit' type='submit' class ='btn btn-sm btn-success'>Save</button> <a href='admin.php?page=new-entry'><button type='button' class ='btn btn-sm btn-danger'>Cancel</button></a></td>
             </tr>
           </form>
         </tbody>
       </table>";
     }
   ?>
   <div class="container mt-5" style ="text-align:center !important;">
    
                <div class="row">
                <?php
                    if (isset($_GET['view'])) {
                    $upt_id = $_GET['view'];
                    $result = $wpdb->get_results("SELECT * FROM wp_jlurd_tile_view_maker WHERE category_id='$upt_id'");
                    foreach($result as $print) {
                        $name = $print->name;
                        $featured_photo = $print->featured_photo;
                        $position = $print->position;
                    
                            echo '
                                    <div class="col-sm-'.$print->tile_column_number.'">
                                        <img src ="'.$featured_photo.'" style ="width:100%px; height:120px;">
                                        <h5>'.$name.'</h5>
                                        <p>'.$position.'</p>
                                    </div>  
                                ';
                    
                    
                    }
                    ?>
                </div> 
        
    </div>
    <?php
     }
   ?> 
