<?php get_header(  );?>
<section id="news-feed" class="news-feed-section">
    <div class="container">
        <div class="blog-feed-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="saasio-blog-details-content">
                        <?php while(have_posts(  )): the_post(  );?>
                            <div class="blog-details-img">
                                <?php the_post_thumbnail('full');?>
                            </div>
                            <div class="blog-details-text">
                                <h2><?php the_title( ); ?></h2>
                                <div class="saasio-post-meta">
                                    <a href="#"><i class="fas fa-calendar-alt"></i> <?php the_date('F j, Y');?></a>
                                    <a href="#"><i class="fas fa-user"></i> <?php the_author(); ?></a>
                                    <span><i class="fas fa-tag"></i>
                                        <?php 
                                            foreach((get_the_category()) as $getCat){
                                                echo '<a href=""'. get_category_link($getCat->cat_ID). '>'. $getCat->cat_name .  '</a> ';
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <article>
                                <?php
                                    the_content(  );
                                ?>
                            </article>                                
                            <div class="blog-details-tag clearfix">
                                <div class="blog-feed-tag float-left">
                                    <?php
                                        the_tags( null ,'','' );
                                    ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="saasio-blog-sidebar">
                        <div class="side-bar-widget">
                            <div class="search-widget dia-headline">
                                <h3 class="widget-title-2">Search</h3>
                                <form action="#" class="relative-position">
                                    <input type="text" name="search" placeholder="Search Here">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <div class="category-widget dia-headline ul-li-block">
                                <h3 class="widget-title-2">Category</h3>
                                <ul>
                                    <li><a href="#">Application <span>(06)</span></a></li>
                                    <li><a href="#">Software <span>(06)</span></a></li>
                                    <li><a href="#">Landing Page <span>(06)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <div class="category-widget dia-headline ul-li-block">
                                <h3 class="widget-title-2">Recent Post</h3>
                                <div class="recent-post-area">
                                    <div class="recent-post-img-text">
                                        <div class="recent-post-img float-left">
                                            <img src="assets/img/blog/rec1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-text dia-headline">
                                            <h3><a href="#">Engaging New  Smart Approach.</a></h3>
                                            <span class="rec-post-meta"><a href="#">December 12, 2021</a></span>
                                        </div>
                                    </div>
                                    <div class="recent-post-img-text">
                                        <div class="recent-post-img float-left">
                                            <img src="assets/img/blog/rec-2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-text dia-headline">
                                            <h3><a href="#">Engaging New  Smart Approach.</a></h3>
                                            <span class="rec-post-meta"><a href="#">December 12, 2021</a></span>
                                        </div>
                                    </div>
                                    <div class="recent-post-img-text">
                                        <div class="recent-post-img float-left">
                                            <img src="assets/img/blog/rec-3.jpg" alt="">
                                        </div>
                                        <div class="recent-post-text dia-headline">
                                            <h3><a href="#">Engaging New  Smart Approach.</a></h3>
                                            <span class="rec-post-meta"><a href="#">December 12, 2021</a></span>
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
<?php get_footer( );?>