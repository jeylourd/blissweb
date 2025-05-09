


 <!-- TILE VIEW -->

 <?php 
 global $wpdb;
 $table_name = $wpdb->prefix . 'jlurd_tile_view_maker';
 $table_name2 = $wpdb->prefix . 'jlurd_tileview_maker_category';
if (isset($_POST['newsubmit'])) {
    $user_id = get_current_user_id();
    $name = $_POST['newname'];
    $position =  nl2br(htmlentities($_POST['newposition'], ENT_QUOTES, 'UTF-8'));
    $bionote_link = $_POST['bionote_link'];
    $tile_column_number = $_POST['tile_column_number'];
    $my_media_field = $_POST['my_media_field'];
    $category_id = $_POST['category_id'];
    $wpdb->query("INSERT INTO $table_name(name,position,bionote_link,tile_column_number,featured_photo,created_by_user_id,category_id) VALUES('$name','$position','$bionote_link','$tile_column_number','$my_media_field','$user_id','$category_id')");
    echo "<script>location.replace('admin.php?page=view-profiles');</script>";
  }

  if (isset($_POST['uptsubmit'])) {
   $user_id = get_current_user_id();
    $id = $_POST['uptid'];
    $name = $_POST['uptname'];
    $position = nl2br(htmlentities( $_POST['uptposition'], ENT_QUOTES, 'UTF-8'));
    $upt_bionote_link = $_POST['upt_bionote_link'];
    $upt_tile_column_number = $_POST['upt_tile_column_number'];
    $upt_position_featured_photo = $_POST['upt_position_featured_photo'];
    $upt_category_id = $_POST['upt_category_id'];
    $today = date ('Y-m-d H:i:s');
    $wpdb->query("UPDATE $table_name SET name='$name',category_id='$upt_category_id',position='$position',bionote_link='$upt_bionote_link',tile_column_number='$upt_tile_column_number',featured_photo='$upt_position_featured_photo',modified_date='$today',modified_by_user_id='$user_id'  WHERE tileview_id='$id'");
    echo "<script>location.replace('admin.php?page=view-profiles');</script>";
  }

  if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $wpdb->query("DELETE FROM $table_name WHERE tileview_id='$del_id'");
    echo "<script>location.replace('admin.php?page=view-profiles');</script>";
  }
  ?>

<div class="container-fluid p-5 bg-warning text-white text-center">
  <h1 style ="color:white;">Tile View Maker</h1>
  <p>Version 1.0.0</p> 
</div>
   <br>
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewTile">Add New</button>

   <!-- The Modal -->
    <div class="modal" id="addNewTile">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add new tile form</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="" method="post">
			Full Name
                <input type="text" class ="form-control input-sm" id="newname" name="newname" placeholder = "Full Name" required><br>
			Designation
                <textarea style ="height:150px;" type="text" class ="form-control input-sm" id="newposition" name="newposition" placeholder = "Designation" required></textarea><br>
                
			Select Page for BIONOTE
                <select name="bionote_link" class ="form-control input-sm"> 
                  <option selected="selected" value="">--Leave as Empty--</option> 
                  <?php
                      $selected_page = get_option( 'option_key' );
                      $pages = get_pages(); 
                      foreach ( $pages as $page ) {
                          $option = '<option value="' . $page->ID . '" ';
                          $option .= ( $page->ID == $selected_page ) ? 'selected="selected"' : '';
                          $option .= '>';
                          $option .= $page->post_title;
                          $option .= '</option>';
                          echo $option;
						   $data_page_link .= '<option '.$selected.' value ="'.$page->ID.'">'.$page->post_title.'</option>';
                      }
                  ?>
              </select><hr>
				Column
                <select class ="form-control input-sm" id="tile_column_number" name="tile_column_number" placeholder = "Column No. Arrangement">
					<option value ="3">3</option>
					<option value ="4">4</option>
					<option value ="6">6</option>
					<option value ="12">12</option>
				</select>
			<hr>

                <img src = "" height="120px" id ="img_url">
                <input type="text" id="my_media_field" name="my_media_field" style ="display:none;">
                <label>Select Category</label>
                 <select class ="form-control" id="category_id" name="category_id">
                    <?php  $result = $wpdb->get_results("SELECT * FROM $table_name2");
                    foreach ($result as $print_category) {?>
                        <option value ="<?php echo $print_category->tileview_category_id;?>"><?php echo $print_category->category_name;?></option>
                    <?php }
                    ?>
                  </select><hr>
                <button type="button" id="my-media-button" class="button">Add Media</button><hr>
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
   <?php
      if (isset($_GET['upt'])) {
        $upt_id = $_GET['upt'];
        $result = $wpdb->get_results("SELECT * FROM $table_name WHERE tileview_id='$upt_id'");
        foreach($result as $print) {
          $name = $print->name;
          $selected_page_id = $print->bionote_link;
          $selected_column = $print->tile_column_number;
		  $selected_cat = $print->category_id;
		
        }

        $category = $wpdb->get_results("SELECT * FROM $table_name2");
        foreach ($category as $print_category){
			if($print_category->tileview_category_id==$selected_cat){
				$cat_sel = 'selected';
			}else{
				$cat_sel = '';
			}
            $data_cat .= '<option '.$cat_sel.' value ="'.$print_category->tileview_category_id.'">'.$print_category->category_name.'</option>';
            
        } 
		$column_array = array(3,4,6,12);
		  foreach($column_array as $x){
			  	if($selected_column==$x){
						$column_selected = 'selected';
				}else{
						$column_selected = '';
				}
			  $column_option .= '<option '.$column_selected.' value ="'.$x.'">'.$x.'</option>';
		  }
        
        $selected_page = get_option( 'option_key' );
        $pages = get_pages(); 
        //var_dump($pages);
		
        foreach ( $pages as $page ) {
			   if($page->ID == $selected_page_id){
				  $selected= 'selected';
				}else{
				  $selected= '';
				}
			
			
            $data_page_link .= '<option '.$selected.' value ="'.$page->ID.'">'.$page->post_title.'</option>';
        }
		
       
        echo "
        <table class='table table-bordered table-striped'>
          <thead>
            <tr>
              <th style ='display:none;'  width='25%'>ID</th>
              <th>Name</th>
               <th>Position</th>
               <th>Bionote</th>
               <th>Column No.</th>
               <th>Category</th>
               <th>Featured Photo</th>
               <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <form action='' method='post'>
              <tr>
                <td style ='display:none;' >$print->tileview_id <input type='hidden' id='uptid' name='uptid' value='$print->tileview_id'></td>
                <td ><input type='text' id='uptname' name='uptname' value='$print->name'></td>
                <td ><textarea textarea style ='height:150px;' id='uptposition' name='uptposition' >".str_replace('<br />', '',$print->position)."</textarea></td>
                <td >  <select class ='form-control' name='upt_bionote_link'><option value ='0'>--Leave as empty--</option>".$data_page_link."</select></td>
                <td>
					<select ' id='uptposition' name='upt_tile_column_number' value='$print->tile_column_number'>
						".$column_option."
					</select>
				</td>
                <td><select class ='form-control' id='upt_category_id' name='upt_category_id'>".$data_cat."</select></td>
                <td ><img src = '$print->featured_photo' height='120px' id ='upt_img_url'><input type='text' id='upt_position_featured_photo' name='upt_position_featured_photo' value='$print->featured_photo' style ='display:none;'><br><button type='button' id='update-my-media-button' class='button'>Select Media</button></td>
                <td ><button id='uptsubmit' name='uptsubmit' type='submit' class ='btn btn-sm btn-success'>Save</button> <a href='admin.php?page=view-profiles'><button type='button' class ='btn btn-sm btn-danger'>Cancel</button></a></td>
              </tr>
            </form>
          </tbody>
        </table>";
      }
    ?>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          
          <th width="20%">Name</th>
          <th width="25%">Position</th>
          <th width="7%">Bionote</th>
          <th width="7%">Column No.</th>
          <th width="25%">Category</th>
          <th width="25%">Actions</th>
        </tr>
      </thead>
      <tbody>
       
        <?php
          $result = $wpdb->get_results("SELECT 
                                                 profiles.tileview_id 
                                                ,profiles.name 
                                                ,profiles.position 
                                                ,profiles.bionote_link 
                                                ,profiles.tile_column_number 
                                                ,profiles.featured_photo 
                                                ,pages.post_title
                                                ,pages.guid
                                                ,pages.ID
                                                ,cat.category_name
                                        FROM  wp_jlurd_tile_view_maker as profiles 
                                        left join wp_jlurd_tileview_maker_category as cat ON cat.tileview_category_id = profiles.category_id
                                        left join wp_posts as pages ON pages.ID = profiles.bionote_link");
          foreach ($result as $print) {
            echo "
              <tr>
                <td  style ='display:none;'>$print->tileview_id</td>
                <td width='20%'><img src = '$print->featured_photo' height='120px'><br>$print->name</td>
                <td width='25%'>$print->position</td>
                <td width='7%'>$print->post_title</td>
                <td width='7%'>$print->tile_column_number</td>
                <td width='25%'>$print->category_name</td>
                <td width='25%'><a href='admin.php?page=view-profiles&upt=$print->tileview_id'><button type='button' class ='btn btn-warning btn-sm'><i class='bi bi-pencil'></i></button></a> <a href='admin.php?page=view-profiles&del=$print->tileview_id'><button type='button' class ='btn btn-danger btn-sm'><i class='bi bi-trash'></i></button></a></td>
              </tr>
            ";
          }
        ?>
      </tbody>  
    </table>
    <br>
    <br>
    
  </div>


  <!-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
   -->