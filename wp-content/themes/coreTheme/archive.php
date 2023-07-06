<?php 

    get_header();

?>

    <!--================ Start Banner Area =================-->
    <section class="container text-center">
        <h1 style="padding-top: 150px;color: black;">Archive Post List</h1>
    </section>
    <!--================ End Banner Area =================-->

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
                                    get_template_part('template-parts/archive-post');
                                endwhile;
                                the_posts_pagination();
                            endif;

                        ?>
                        
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php 

    get_footer();

?>