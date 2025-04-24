
<div class="container mt-5" style ="text-align:center !important;">
   
                <div class="row">
                <?php
                    
                    global $wpdb;
                    $option = shortcode_atts(
                        array(
                        'category_id' =>''
                        ),$attr);
                      $new_category_id = $option['category_id'];
                    
                    $result = $wpdb->get_results("SELECT * FROM wp_jlurd_tile_view_maker WHERE category_id='$new_category_id'");
                    foreach($result as $print) {
                        $name = $print->name;
                        $featured_photo = $print->featured_photo;
                        $position = $print->position;
                            echo '<div class="col-sm-'.$print->tile_column_number.'">
                                        <img src ="'.$featured_photo.'" style ="width:100%px; height:120px;">
                                        <h5>'.$name.'</h5>
                                        <p>'.$position.'</p>
                                    </div>  
                                ';
                    
                    
                    }
                    ?>
                </div> 
       
 </div>