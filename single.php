<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <?php while(have_posts()) : the_post(); ?>
          <article>
            <img src="<?= get_the_post_thumbnail_url(); ?>" />
            <h2 class="title">
              <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
            </h2>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?= get_the_date(); ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <a href="forfattare.html"><?= the_author(); ?></a>
              </li>
              <li>
                <i class="fa fa-tag"></i> <a href="kategori.html"><?= the_category(); ?></a>
              </li>
            </ul>
            <p><?= the_content(); ?></p>
          </article>
          <?php endwhile; ?>

          <?php if ( get_next_post_link() || get_previous_post_link() ) : ?>
          <nav class="navigation pagination">
            <h2 class="screen-reader-text">Inläggsnavigering</h2>
            <div class="nav-links">
              <?php previous_post_link( '<div class="nav-previous">%link</div>', 'Föregående' ); ?>
              <?php next_post_link( '<div class="nav-next">%link</div>', 'Nästa' ); ?>
            </div>
          </nav>
          <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>