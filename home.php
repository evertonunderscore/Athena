<?php get_header( );?>

 <!-- Start of blog page section
        ============================================= -->
    <section id="news-feed" class="news-feed-section">
      <div class="container">
        <div class="blog-feed-content">
          <div class="row">
            <div class="col-md-8">
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
                        <?php the_excerpt( );?>
                        <a class="blog-read-more" href="#">Continue Lendo</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                endwhile; endif; wp_reset_postdata(  ); 
                ?>
              <div class="saasio-pagination text-center ul-li">
                <ul>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a class="active" href="#">3</a></li>
                  <li><a href="#">...</a></li>
                  <li><a href="#">10</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="saasio-blog-sidebar">
                <div class="side-bar-widget">
                  <div class="search-widget dia-headline">
                    <h3 class="widget-title-2">Search</h3>
                    <form action="#" class="relative-position">
                      <input
                        type="text"
                        name="search"
                        placeholder="Search Here"
                      />
                      <button type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </form>
                  </div>
                </div>
                <div class="side-bar-widget">
                  <div class="category-widget dia-headline ul-li-block">
                    <h3 class="widget-title-2">Category</h3>
                    <ul>
                      <li>
                        <a href="#">Application <span>(06)</span></a>
                      </li>
                      <li>
                        <a href="#">Software <span>(06)</span></a>
                      </li>
                      <li>
                        <a href="#">Landing Page <span>(06)</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="side-bar-widget">
                  <div class="category-widget dia-headline ul-li-block">
                    <h3 class="widget-title-2">Recent Post</h3>
                    <div class="recent-post-area">
                      <div class="recent-post-img-text">
                        <div class="recent-post-img float-left">
                          <img src="assets/img/blog/rec1.jpg" alt="" />
                        </div>
                        <div class="recent-post-text dia-headline">
                          <h3><a href="#">Engaging New Smart Approach.</a></h3>
                          <span class="rec-post-meta"
                            ><a href="#">December 12, 2021</a></span
                          >
                        </div>
                      </div>
                      <div class="recent-post-img-text">
                        <div class="recent-post-img float-left">
                          <img src="assets/img/blog/rec-2.jpg" alt="" />
                        </div>
                        <div class="recent-post-text dia-headline">
                          <h3><a href="#">Engaging New Smart Approach.</a></h3>
                          <span class="rec-post-meta"
                            ><a href="#">December 12, 2021</a></span
                          >
                        </div>
                      </div>
                      <div class="recent-post-img-text">
                        <div class="recent-post-img float-left">
                          <img src="assets/img/blog/rec-3.jpg" alt="" />
                        </div>
                        <div class="recent-post-text dia-headline">
                          <h3><a href="#">Engaging New Smart Approach.</a></h3>
                          <span class="rec-post-meta"
                            ><a href="#">December 12, 2021</a></span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="side-bar-widget">
                  <div class="popular-widget dia-headline ul-li">
                    <h3 class="widget-title-2">Popular Tag</h3>
                    <ul>
                      <li><a href="#">Application </a></li>
                      <li><a href="#">Software </a></li>
                      <li><a href="#">Landing </a></li>
                      <li><a href="#">App </a></li>
                      <li><a href="#">Design </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of blog section
        ============================================= -->

<?php get_footer( );?>