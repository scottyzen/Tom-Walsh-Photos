<?php /* Template Name: Album */ ?>
<?php get_header(); ?>

<!-- Text -->
<div class="container text-center mt-12 mb-8 md:mt-32 lg:mt-42">
    <h1 class="text-6xl lg:text-8xl text-white font-serif pb-2 pt-10 text-shadow"><?php
                                                                                    $url  = $_SERVER["REQUEST_URI"];
                                                                                    $words = explode("/", $url);
                                                                                    $word = ucfirst($words[3]);
                                                                                    echo preg_replace("/[\-_]/", " ", $word);
                                                                                    ?></h1>
</div>

</header>

<div class="container">
    <main class="leading-tight shadow -mt-32 md:-mt-56">
        <div class="my-color mt-32 pt-8 px-4 md:pt-16 md:px-12 pb-32 flex flex-wrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile;
        endif; ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>