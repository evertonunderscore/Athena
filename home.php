<?php get_header( );?>

 <!-- Start of blog page section
        ============================================= -->
    <section id="news-feed" class="news-feed-section">
      <div class="container">
        <div class="blog-feed-content">
          <div class="row">
            <div class="col-md-8">
              <?php
                include_once ('template/post_blog.php');
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
            <?php get_sidebar( ); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- End of blog section
        ============================================= -->

<?php get_footer( );?>