    <!-- Start Hero Section -->
    <div class="HeroSection">
        <?php get_template_part("template-parts/NavBar") ?>

      
        <!--##############################################-->
        <div class="container">
                <div class="Hero_Project_Dupple">
                    <div class="row ROW_SLEX" style="height: 100vh;align-items: center;width: 100%;">
                        <div class="col-lg-6 image-side">
                            <div class="image_Hero">
                                <img src="<?php the_post_thumbnail_url(  ) ; ?>"
                                    style="position: absolute;bottom:0;right: 0;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="Info_Hero_Project_Dupple">
                                <h2> <?php the_title( ) ; ?>   </h2>
                                <div class="desc">
                                    <?php echo get_the_content(); ?>
                                </div>
                                <a href="#Footer">
                                    <button class="Bookin_Project">
                                        <span> <img src="<?php echo get_template_directory_uri(  ) . "/assets/images/Icons/arrow-right-02-round.png" ?>" alt=""> </span>
                                        <span> احجز استشارة مجانية الان </span>
                                    </button>
                                </a>
                                 <img src="<?php echo get_template_directory_uri(  ) . "/assets/images/Icons/Line 85.png" ?>" class="Lines" alt="">
                                    <div class="Mouse_Animate">
                                        <a href="#Clients_Logo">
                                            <img src="<?php echo get_template_directory_uri(  ) . "/assets/images/Icons/Component 2.png" ?>" alt="">
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- End  Hero Section -->