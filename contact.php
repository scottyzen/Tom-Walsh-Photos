<?php /* Template Name: Contact Me */ ?>
<?php get_header(); ?>

<!-- Text -->
<div class="container text-center mt-8 mb-8 md:mt-32 lg:mt-42">
    <h1 class="text-6xl px-12 lg:text-8xl text-white font-serif pb-2 pt-10 text-shadow">Contact Me</h1>
</div>

</header>

<div class="container">
    <main class="leading-tight shadow -mt-32 md:-mt-56">
        <div class="my-color mt-32 pt-8 px-4 md:pt-16 md:px-12 pb-32 flex flex-wrap">

            <div class="w-full text-center">
                <div class="max-w-md text-xl m-auto p-8 mb-8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;
                endif; ?>

                </div>
            </div>

            <div class="max-w-sm mx-auto p-8 my-2 lg:mt-12">
                <img src="<?php echo get_template_directory_uri(); ?>/images/typewriter.svg" alt="">
            </div>
            <div class="max-w-md mx-auto p-8">
                <form class="flex flex-wrap" action="../send.php" method="post">

                    <!-- Name -->
                    <div class="w-full md:w-2/5 my-4 px-4">
                        <label class="text-grey-darkest" for="name">Name</label><br>
                        <input placeholder="Jane Dow" class="w-full my-2 p-3 border rounded" type="text" name="name" id="name">
                    </div>

                    <!-- Email Address -->
                    <div class="w-full md:w-3/5 my-4 px-4">
                        <label class="text-grey-darkest" for="email">Email Address</label><br>
                        <input placeholder="janedow@gmail.com" class="w-full my-2 p-3 border rounded" type="email" name="email" id="email">
                    </div>

                    <!-- Message -->
                    <div class="w-full my-4 px-4">
                        <label class="text-grey-darkest" for="message">Message</label><br>
                        <textarea placeholder="Ask me anything" class="w-full my-2 p-3 border rounded" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="w-full my-4 px-4">
                        <button class="px-6 py-3 rounded bg-orange-light text-orange-darkest shadow hover:bg-orange" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>