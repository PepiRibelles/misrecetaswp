<?php get_header(); ?>


<main class="grid bg-b">

<?php
    $args = array (
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'post_type' => 'post',
        //'paged' => $paged,
    );

    $the_query = new WP_Query($args);
?>

    <?php if ($the_query->have_posts() ); ?>


            <section class="col-desk-9 col-tab-8 col-mob-12 sep-block">
                <div class="grid">

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="col-desk-6 col-tab-6 mb-5">

                        <h2 class="hdr2 mb-5"><b><a href="<?php the_permalink();?>"><?php the_title();?> </a></b></h2>
                        <a href="<?php the_permalink();?>"><img class="img-med"  src="<?php echo get_the_post_thumbnail_url(false,'medium_large');?>"></a>
                        
                    </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>



                   
                </div>
            </section>

    <?php endif; ?>   


            <aside class="col-desk-2 col-tab-4 col-mob-12">


                <div class="bg-light pad-1 rounded mb-6">
        
                    <div class="grid">

                    <?php /*$categories = ['entrante', 'principal', 'postre']; ?>
                <?php foreach ($categories as $cat): ?>



                    <?php
                    $args = array(
                        'posts_per_page' => 1,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'category_name' => $cat
                        //'paged' => $paged
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>


                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        
                        <h2 class="hdr3"> Menú del día</h2>
                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Entrante</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/vichyssoise-de-esparragos-blancos.jpg">
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                <?php endforeach;*/ ?>

                <?php $menu_del_dia = get_field ('menu_del_dia', get_page_by_path('menu-del-dia')-> ID); ?>
                <?php if ($menu_del_dia): ?>
                    <?php foreach ($menu_del_dia as $post): setup_postdata($post); ?>



                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Principal</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/espaguetis-de-calabacin.jpg">
                        </div>

                        <?php endforeach; ?>
                <?php endif; ?> 


                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Postre</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/tiramisu-express.jpg">
                        </div>
                    </div>
                </div>
            </aside>
        

        
</main>

<?php get_footer(); ?>



