<?php get_header(); ?>

    <!-- Text -->
    <div class="text-center ">
        <h1 class="text-6xl md:text-8xl text-white font-serif pb-2 pt-10 text-shadow">
            Get in Touch
        </h1>
    </div>
    <!-- Scroll down icon -->
    <div class="text-center mb-24" data-aos="zoom-in-up">
        <svg width="24px" height="100%" viewBox="0 0 247 390" version="1.1" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
            <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:transparent;stroke-width:20px;"/>
            <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:transparent;stroke-width:20px;"/>
        </svg>
    </div>

</header>

<div class="container">
<main class="leading-tight shadow -mt-56">
    <div class="my-color mt-32 md:pt-16 md:px-20 pb-32 flex flex-wrap">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <form class="w-full max-w-md mx-auto my-20 p-8 md:p-0">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input class="appearance-none block w-full text-grey-darker rounded py-3 px-4 leading-tight outline-none bg-white border border-grey" id="grid-first-name" type="text" placeholder="Jane">
                </div>
                <div class="w-full md:w-2/3 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Email
                </label>
                <input class="appearance-none block w-full text-grey-darker rounded py-3 px-4 leading-tight outline-none bg-white border border-grey" id="grid-last-name" type="text" placeholder="Doe">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-message">
                    Message
                </label>
                <textarea name="messgae" id="grid-messgae" cols="30" rows="10" class="appearance-none block w-full text-grey-darker rounded py-3 px-4 leading-tight outline-none bg-white border border-grey"></textarea>
                </div>
            </div>
        </form>
    </div>
</main>
</div>
<?php get_footer(); ?>