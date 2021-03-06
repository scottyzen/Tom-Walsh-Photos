<?php /* Template Name: About me */ ?>
<?php get_header(); ?>

    <!-- Text -->
    <div class="container text-center md:text-left mt-16 md:mt-32 lg:mt-42">
        <h1 class="text-5xl sm:text-6xl md:text-7xl text-grey-lightest font-serif pt-10 text-shadow">Tom Walsh</h1>
        <p class="text-3xl px-4 mt-2 sm:text-3xl md:px-0 md:pr-12  text-grey-lighter text-shadow-orange inline-block border-t-2 pt-2 border-orange">Photography</p>
    </div>

</header>

<div class="container">

<main class="leading-tight shadow">
    <div class="flex flex-wrap justify-between" >
        
        <!-- About text -->
        <div class="w-full lg:w-1/2 p-8 md:px-16 my-4 md:my-12 mb-20">
             <div class="text-4xl md:text-5xl font-serif text-grey-darkest">
                    <?php single_post_title(); ?>
                </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>

        <!-- Picture of Photographer -->
        <div class="w-full md:1/2 lg:w-9/20 md:-mt-12">
            <img style="border-radius: 3px; transform: scale(1.10); transform-origin: center;" src="<?php echo get_template_directory_uri(); ?>/images/polo.png">
        </div>

    </div>

    <!-- Featured Gallery -->
    <div class="mt-12 md:pt-12 md:px-12 pb-12 flex flex-wrap text-center"  data-aos="fade-up">
        <div class="text-4xl font-serif  text-center w-full my-2">
            <span class="border-b-2 border-orange">Featured Photos</span>
        </div>
        <p class="max-w-sm m-auto mb-8 ">All photos are available for print. </p>
        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '97' ); } ?>
        <div class="text-center w-full my-12">
            <p class="text-lg px-8">Like what you see? Check out my <a href="<?php echo get_site_url() ?>/gallery"
            class="font-medium pb-1 text-orange border-b-2 border-orange">Full Gallery</a> for more.
            </p>
        </div>
    </div>

</main>
</div>

<!-- Inastagram -->
<div class="container">
    <div class="instafeed shadow-md"></div>
</div>

    
<?php get_footer(); ?>