
<div class="container mt-5" style ="text-align:center !important;">
   
                <div class="row">
                <?php
                    
                    global $wpdb;
                    $option = shortcode_atts(
                        array(
                        'category_id' =>''
                        ),$attr);
                      $new_category_id = $option['category_id'];
                    
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
                                        left join wp_posts as pages ON pages.ID = profiles.bionote_link 
										WHERE category_id='$new_category_id'");
                    foreach($result as $print) {
                        $name = $print->name;
                        $featured_photo = $print->featured_photo;
                        $position = $print->position;
						if( $print->tile_column_number ==12){
							$height = 'height:520px';
						}else{
							$height = 'height:420px auto';
						}
						if($print->bionote_link==0 || empty($print->bionote_link)){
							$new_bionote_link = '#';
							$target_blank = '';
						}else{
							$new_bionote_link = $print->guid;
							$target_blank = '_blank';
						}
					
                            echo '<div class="col-sm-'.$print->tile_column_number.'" style="border-style:groove;border-radius:7px 7px 7px 7px">
										 <a href ="'.$new_bionote_link.'" target ="'.$target_blank.'">
												<img src ="'.$featured_photo.'" style ="margin-top:10px;width:100%px;'.$height.'">
												<h3 style ="color:black !important;margin-top:10px;">'.$name.'</h3>
												<p style ="color:black !important">'.$position.'</p>
											
										  </a>
                                    </div>  
                                ';
                    
                    
                    }
                    ?>
                </div> 
       
 </div>