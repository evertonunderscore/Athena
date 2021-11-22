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
                        <img src="assets/img/blog/news-4.jpg" alt="" />
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
                            ><i class="fas fa-calendar-alt"></i> September 12,
                            2021</a
                          >
                          <a href="#"><i class="fas fa-user"></i> Admin</a>
                        </div>
                        <p>
                          At vero eos et accusamus et iustoodio digni
                          goikussimos ducimus qui blanp ditiis praesum voluum.
                        </p>
                        <a class="blog-read-more" href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endwhile; endif; wp_reset_postdata(  ); 
                ?>