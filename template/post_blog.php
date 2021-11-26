<?php
                $args = 'posts_per_page=-1';
                $megapost = new WP_Query($args); 
                if($megapost -> have_posts()): while($megapost -> have_posts()) : $megapost->the_post(  );
             ?>
              <div class="blog-feed-post">
                <div class="blog-feed-img-txt">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="saasio-blog-img">
                        <img src="<?php 
                          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                          echo esc_url($featured_img_url); ?>
                          " alt="<?php the_title( );?>" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="saasio-blog-text">
                        <h3>
                          <a href="#"
                            ><?php the_title(); ?></a
                          >
                        </h3>
                        <div class="saasio-post-meta">
                          <a href="#"
                            ><i class="fas fa-calendar-alt"></i><?php the_date('F j, Y');?></a>
                          <a href="#"><i class="fas fa-user"></i> Admin</a>
                        </div>
                        <?php the_excerpt();?>
                        <div class="tags">
                        <?php
                          // everything available
                          foreach((get_the_category()) as $category) { 
                              echo '<span><a href="' . get_category_link($category->cat_ID) . '">' . '' ;
                              echo $category->cat_name . ' '; 
                              echo '</a></span>';
                          }; 
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endwhile; endif; wp_reset_postdata(); 
                ?>