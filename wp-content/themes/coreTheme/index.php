<?php 

    get_header();

?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2><?php wp_title();?></h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="blog.php">Our Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
        
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html"><h5>Social Life</h5></a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html"><h5>Politics</h5></a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html"><h5>Food</h5></a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php 

                            if(have_posts()):
                                while(have_posts()):
                                    the_post();
                                    get_template_part('template-parts/post-content');
                                endwhile;
                                the_posts_pagination();
                            endif;

                        ?>
                        
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- sidebar -->
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php 

    get_footer();

?>