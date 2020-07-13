<?php get_header(); ?>
  <div class="l-wrapper">
    <div class="l-main">
      <div class="l-container is-flex">
        <div class="l-contents">
          <?php if ( is_home() ): ?>
            <h1 class="archive-title">BLOG</h1>
          <?php else: ?>
            <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
          <?php endif; ?>
          <div class="c-post-archive">
            <?php if ( have_posts() ): ?>
              <?php while ( have_posts() ): ?>
                <?php the_post(); ?>
                  <article <?php post_class(); ?>>
                    <div class="hentry-thumbnail">
                      <a href="<?php the_permalink(); ?>">
                        <?php if( has_post_thumbnail() ): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php echo esc_url( get_theme_file_uri( 'images/img-default.png' ) ); ?>" alt="">
                        <?php endif; ?>
                      </a>
                    </div>
                    <div class="hentry-content">
                      <header class="entry-header">
                        <div class="entry-meta">
                          <a href="<?php the_permalink(); ?>">
                            <time class="entry-date published"><?php the_time( 'Y年n月j日' ); ?></time>
                          </a>
                        </div>
                        <h3 class="entry-title">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h3>
                      </header>
                      <div class="entry-content"><?php the_excerpt(); ?></div>
                      <footer class="entry-footer">
                        <span class="cat-tags-links">
                          <span class="cat-links"><?php the_category( '&nbsp;' ); ?></span>
                          <?php the_tags( '<span class="tags-links">', '&nbsp;', '</span>' ); ?>
                        </span>
                      </footer>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php the_posts_pagination(); ?>
            <?php else: ?>
              <p>あてはまる情報はまだありません。</p>
            <?php endif; ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
