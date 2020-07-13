<?php get_header(); ?>
  <div class="l-wrapper">
      <div class="l-main">
          <div class="c-front-visual">
              <div class="c-front-visual__text">HELLO WORLD.</div>
          </div>
          <div class="l-container is-sm">
          <?php if ( have_posts() ): ?>
              <?php while ( have_posts() ): ?>
              <?php the_post(); ?>
              <div class="c-front-text">
                  <?php the_content(); ?>
              </div>
              <?php endwhile; ?>
          <?php endif; ?>
          </div>
      </div>
  </div>
<?php get_footer(); ?>
