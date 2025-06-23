<!-- Start Portofolio Filter -->
<div class="Portofolio_Filter">
    <div class="container">
        <h2 class="title_slider_Section">  اعمالنا السابقة </h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col_filter">

                <!-- فلترة التصنيفات -->
                <ul class="filters text-center">
                    <li class="active" data-filter="*">
                        <a href="#!"><i class="fas fa-star-of-life"></i> الكل</a>
                    </li>

                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'portofolio_cat',
                        'hide_empty' => true,
                    ));

                    foreach ($terms as $term) {
                        echo '<li data-filter=".' . esc_attr($term->slug) . '">
                                <a href="#!">' . esc_html($term->name) . '</a>
                              </li>';
                    }
                    ?>
                </ul>

                <div class="projectss projects">

                    <?php
                    $projects = new WP_Query(array(
                        'post_type' => 'portofolio', 
                        'posts_per_page' => -1
                    ));

                    if ($projects->have_posts()) :
                        while ($projects->have_posts()) : $projects->the_post();
                            $post_id = get_the_ID();
                            $terms = get_the_terms($post_id, 'portofolio_cat');
                            $class_list = '';

                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    $class_list .= ' ' . $term->slug;
                                }
                            }
                    ?>

                        <div class="item<?php echo esc_attr($class_list); ?> wow animate__animated animate__bounceInRight" data-wow-delay="0.5s">
                            <div class="card_portofolio">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title mb-3 text-center"><?php the_title(); ?></h5>
                                    <a href="<?php the_permalink(); ?>">
                                        <button>
                                            <img src="assets/images/Services/arrow-right-02-round.png" alt="">
                                            المزيد
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!--  End Portofolio Filter  -->