<?php get_header(); ?>

      <main>
          <div class="container">

                  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                     <article class="post">
                          <h3 class="post-title">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </h3>

                          <div class="meta">
                              Created by <?php the_author(); ?> on <?php the_date(); ?>
                          </div>
                          <?php the_content(); ?>

                          <a href="<?php the_permalink(); ?>" class="button button-read-more">
                              Read more..
                          </a>
                      </article>

                  <?php endwhile; endif; ?>

          </div>
      </main>

<?php get_footer(); ?>
