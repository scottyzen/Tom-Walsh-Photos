<footer class="text-grey-light">
    <div class="container">
        <div class="flex flex-wrap justify-between py-32">

            <div class="w-full mt-16 md:flex-1">

                <div class="title inline-block pr-12">Do you have a question? Get in touch.</div>
                <br><a href="" class="text-grey-light pt-2 text-base inline-block">tomwalshphotos@gmail.com</a>
                <br><a href="" class="text-grey-light pt-1 text-base inline-block">089 247 2194</a>
                <div class="pt-1">
                    <a class="-ml-1" href="https://www.instagram.com/tomwalshphotos/" target=”_blank”>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 32 32" style=" fill:#ccc;">
                            <g>
                                <path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z "></path>
                            </g>
                        </svg>
                    </a>
                    <a class="-ml-1" href="https://www.facebook.com/tomwalshphotos.ie" target=”_blank”>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 32 32" style=" fill:#ccc;">
                            <g>
                                <path d="M 7 5 C 5.90625 5 5 5.90625 5 7 L 5 25 C 5 26.09375 5.90625 27 7 27 L 25 27 C 26.09375 27 27 26.09375 27 25 L 27 7 C 27 5.90625 26.09375 5 25 5 Z M 7 7 L 25 7 L 25 25 L 19.8125 25 L 19.8125 18.25 L 22.40625 18.25 L 22.78125 15.25 L 19.8125 15.25 L 19.8125 13.3125 C 19.8125 12.4375 20.027344 11.84375 21.28125 11.84375 L 22.90625 11.84375 L 22.90625 9.125 C 22.628906 9.089844 21.667969 9.03125 20.5625 9.03125 C 18.257813 9.03125 16.6875 10.417969 16.6875 13 L 16.6875 15.25 L 14.0625 15.25 L 14.0625 18.25 L 16.6875 18.25 L 16.6875 25 L 7 25 Z "></path>
                            </g>
                        </svg>
                    </a>
                </div>

            </div>

            <!-- Pages -->
            <div class="w-1/2 mt-16 md:w-auto md:ml-16">
                <div class="title inline-block pr-12">Pages</div>
                <ul>

                    <?php
                    $pages = get_pages();
                    foreach ($pages as $page) {
                        ?>
                        <li>
                            <a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a>
                        </li>

                    <?php  } ?>

                </ul>

            </div>

            <!-- ALBUMS -->
            <div class="w-1/2 mt-16 md:w-auto md:ml-16">
                <div class="title inline-block pr-12">Albums</div>
                <ul>
                    <li><a href="../photos/autumn-colours/">Autumn colours</a></li>
                    <li><a href="../photos/barrow-valley">Barrow Valley</a></li>
                    <li><a href="../photos/china">China</a></li>
                    <li><a href="../photos/flowers">Flowers</a></li>
                    <li><a href="../photos/ireland">Ireland</a></li>
                    <li><a href="../photos/weddings">Weddings</a></li>
                    <li><a href="../photos/winter-theme">Winter Theme</a></li>
                </ul>
            </div>

            <!-- POSTS -->
            <!-- <div class="w-full mt-16 lg:w-auto lg:ml-16">
                            <div class="title inline-block pr-12">Posts</div>
                            <?php
                            // wp-query to get all published posts without pagination
                            $allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
                            
                            <?php if ($allPostsWPQuery->have_posts()) : ?>
                            
                                    <ul>
                                        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
                                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                        <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                        <p><?php _e('There no posts to display.'); ?></p>
                            <?php endif; ?>
                        </div> -->

        </div>
    </div>
</footer>
<div class="text-grey-light" style="background: #292b36;">
    <div class="container text-sm py-4 flex justify-between">
        <div>
            &copy; <?php echo esc_html(date_i18n(__('Y'))); ?> Tom Walsh
        </div>
        <div>Designed by <a href="http://scottyzen.com" class="text-orange" target="_blank">Scott Kennedy</a></div>
    </div>
</div>
</div>
<?php
wp_enqueue_script('my-script', get_template_directory_uri() . '/js/main.js', array(), true);
wp_footer();
?>

</body>

</html>