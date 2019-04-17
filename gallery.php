<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>

<!-- Text -->
<div class="container text-center mt-8 mb-8 md:mt-32 lg:mt-42">
    <h1 class="text-6xl px-12 lg:text-8xl text-white font-serif pb-2 pt-10 text-shadow">Photo Gallery</h1>
</div>

</header>

<div class="container">
    <main class="leading-tight shadow -mt-32">
        <div class="my-color p-8 mt-32 md:pt-20 md:px-20 pb-32 flex flex-wrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile;
        endif; ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>