<article class="row blog_item">
    <div class="col-md-3">
        <div class="blog_info text-right">
            <div class="post_tag">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo "<a href=''>".$tag->name.' '."</a>"; 
                      }
                    }
                ?>
                
            </div>
            <ul class="blog_meta list">
                <li><a href="#"><?php the_author();?><i class="lnr lnr-user"></i></a></li>
                <li><a href="#"><?php the_date();?><i class="lnr lnr-calendar-full"></i></a></li>
                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                <li><a href="#"><?php 

                                            echo get_comments_number();
                                        
                                ?> Comments
                <i class="lnr lnr-bubble"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="blog_post">
            <div class="blog_details">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink(); ?>" class="primary_btn"><span>View More</span></a>
            </div>
        </div>
    </div>
</article>