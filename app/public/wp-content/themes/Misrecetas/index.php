<?php get_header(); ?>


<main class="grid bg-b">
            <section class="col-desk-9 col-tab-8 col-mob-12 sep-block">

                <div class="grid">


                    <div class="col-desk-6 col-tab-6 mb-5">

                        <h2 class="hdr2 mb-5"><b><a href="<?php the_permalink();?>"><?php the_title();?> </a></b></h2>
                        <a href="<?php the_permalink();?>"><img class="img-med"  src="<?php echo get_the_post_thumbnail_url(false,'medium_large');?>"></a>
                        
                    </div>


                    <div class="col-desk-6 col-tab-6 mb-5">
                        <h2 class="hdr2 mb-5"><b>Tiramisú express</b></h2>
                        <img class="img-med" src="<?php echo get_the_post_thumbnail_url(false,'medium_large');?>">
                    </div>
                    <div class="col-desk-6 col-tab-6 mb-5">
                        <h2 class="hdr2 mb-5"><b>Espaguettis de calabacín</b></h2>
                        <img class="img-med" src="<?php echo get_the_post_thumbnail_url(false,'medium_large');?>">
                    </div>
                    <div class="col-desk-6 col-tab-6 mb-5">
                        <h2 class="hdr2 mb-5"><b></b>Vichyssoise de espárragos</b></h2>
                        <img class="img-med" src="<?php echo get_the_post_thumbnail_url(false,'medium_large');?>">
                    </div>
                </div>
            </section>
            <aside class="col-desk-2 col-tab-4 col-mob-12">


                <div class="bg-light pad-1 rounded mb-6">
        
                    <div class="grid">
        
                        <h2 class="hdr3"> Menú del día</h2>
                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Entrante</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/vichyssoise-de-esparragos-blancos.jpg">
                        </div>
                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Principal</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/espaguetis-de-calabacin.jpg">
                        </div>
                        <div clas="col-mob-4 mb1">
                            <p class="fnt-base mb-3">Postre</p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/tiramisu-express.jpg">
                        </div>
                    </div>
                </div>
            </aside>
        

        
</main>

<?php get_footer(); ?>



