<div class="comments-area">
                        

                        <?php 

                        if(have_comments()){
                            echo '<h4>'.get_comments_number().' Comments</h4>';
                        }else{
                            echo '<h3>No Comments!</h3>';
                        }

                        ?>

                        <div class="comment-list">

                            <?php wp_list_comments();?>

                            <!-- <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div> -->
                        </div>	                                             				
                    </div>

                    <div class="comment-form">


                            <?php 
                                if(comments_open()){
                                    comment_form(
                                        array(
                                            'class_div' => 'form-group form-inline',
                                            'class_container' => '',
                                            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                                            'title_reply_after' => '</h3>',
                                            'class_submit' => 'primary-btn primary_btn',
                                        )
                                    );
                                }
                            ?>

<!-- 
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>										
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn primary_btn"><span>Post Comment</span></a>	
                        </form> -->
                    </div>