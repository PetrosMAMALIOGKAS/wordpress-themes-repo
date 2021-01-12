<?php get_header(); ?>

      <main>
          <div class="container">

                  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                     <article class="post">
                          <h3 class="post-title">
                              <?php the_title(); ?>
                          </h3>

                          <div class="meta">
                              Created by <?php the_author(); ?> on <?php the_date(); ?>
                          </div>
                          <?php the_content(); ?>

                      </article>

                  <?php endwhile; endif; ?>

          </div>
      </main>

<?php get_footer(); ?>
