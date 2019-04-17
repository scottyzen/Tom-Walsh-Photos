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
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile;
        endif; ?>

            <div class="max-w-lg m-auto">
                <form class="flex flex-wrap" action="../send.php" method="post">

                    <!-- Name -->
                    <div class="w-full md:w-2/5 my-4 px-4">
                        <label for="name">Name</label><br>
                        <input class="w-full my-2 p-3 border rounded" type="text" name="name" id="name">
                    </div>

                    <!-- Email Address -->
                    <div class="w-full md:w-3/5 my-4 px-4">
                        <label for="email">Email Address</label><br>
                        <input class="w-full my-2 p-3 border rounded" type="email" name="email" id="email">
                    </div>

                    <!-- Message -->
                    <div class="w-full my-4 px-4">
                        <label for="message">Message</label><br>
                        <textarea class="w-full my-2 p-3 border rounded" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="w-full my-4 px-4">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>