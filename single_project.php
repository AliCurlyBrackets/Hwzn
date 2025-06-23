 <!-- Start Hero Section -->
 <div class="HeroSectionSingle">
        <?php get_template_part("template-parts/NavBar") ?>

        <div class="Hero_Single">
                <div class="Hero_Single_Content">

                     <div class="Image_Hero_Single">
                         <img src="<?php the_post_thumbnail_url(  ) ; ?>" alt="">
                    </div>  

                    <div class="Info_Hero_Single">
                        <h2 class="Title_Hero_Section"  style="display:block;text-align:right;width:100%;font-family: var(--Hwzn_Bold);">
                            <?php the_title( ) ; ?> 
                        </h2>
                        <div class="Info_Hero_Section mb-3" style="text-align:right;font-family: var(--Hwzn_Light);">
                            <?php echo get_field("desc_app_pro") ; ?>
                        </div>
                         <a href="#Footer">
                            <button class="Bookin" style="margin-left:auto;">
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
    <!-- End  Hero Section -->