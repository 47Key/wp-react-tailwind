<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4 bg-white dark:bg-gray-900">

  <!-- react root -->
  <div id="render-react-example-here"></div>
  <!-- react root -->

  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <section class="bg-white dark:bg-gray-900">
          <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
              <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white"><?php the_title(); ?></h2>
              <p class="mb-4 font-light"><?php the_content(); ?></p>
              <a href="<?php the_permalink(); ?>" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                Learn more
                <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </a>
            </div>
          </div>
        </section>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();