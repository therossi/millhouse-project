
          <h2 class="h2-sidebar">Blog feed<h2>
          <p class="p-sidebar">by product category</p>

          <hr>

          <div class="category-box">
          <h3 class="category-h3">Watches</h3>
          <ul class="list-unstyled">
            <?php 

            /* NUMBER OF WATCH POSTS DISPLAYED IN SIDEBAR */ 

            $number_of_posts = 5;
            $category_id = 1;
            $category_posts = $posts->getLatestCategoryPosts($category_id, $number_of_posts);
            include 'includes/index_sidebar_foreach_category_post.php'; ?>

          </ul>
          </div>

          <div class="category-box">
          <h3 class="category-h3">Sunglasses</h3>
          <ul class="list-unstyled">
            <?php 

            /* NUMBER OF SUNGLASSES POSTS DISPLAYED IN SIDEBAR */ 

            $number_of_posts = 5;
            $category_id = 2;
            $category_posts = $posts->getLatestCategoryPosts($category_id, $number_of_posts);
            include 'includes/index_sidebar_foreach_category_post.php'; ?>

          </ul>
          </div>

          <div class="category-box">
          <h3 class="category-h3">Furnishing articles</h3>
          <ul class="list-unstyled">
            <?php 

            /* NUMBER OF FURNISHING POSTS DISPLAYED IN SIDEBAR */

            $number_of_posts = 5;
            $category_id = 3;
            $category_posts = $posts->getLatestCategoryPosts($category_id, $number_of_posts);
            include 'includes/index_sidebar_foreach_category_post.php'; ?>

          </ul>
          </div>

          <div class="category-box">
          <h3>Recent Posts</h3>
          <ul class="list-unstyled">
            <?php   

            /* NUMBER OF RECENT POSTS DISPLAYED IN SIDEBAR */ 

            $number_of_posts = 10;
            $category_posts = $posts->getLatestPosts($number_of_posts);
            include 'includes/index_sidebar_foreach_category_post.php'; ?>

          </ul>
          </div>