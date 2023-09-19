<?php get_header(); ?>

<?php if (have_posts()) : ?>
<div id="primary" class="col-xs-12 col-md-9">
  <h1><?= page(); ?></h1>
  <?php while (have_posts()) : the_post(); ?>
  <article>
    <img src="<?= get_the_post_thumbnail_url(); ?>" />
    <h2 class="title">
      <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
    </h2>
    <ul class="meta">
      <li>
        <i class="fa fa-calendar"></i>
        <?= get_the_date(); ?>
      </li>
      <li>
        <i class="fa fa-user"></i>
        <?= get_the_author_posts_link(); ?>
      </li>
      <li>
        <i class=" fa fa-tag"></i>
        <?= the_category(", "); ?>
      </li>
    </ul>
    <p><?= the_excerpt(); ?></p>
  </article>
  <?php endwhile; ?>
  <nav class=" navigation pagination">
    <h2 class="screen-reader-text">Inläggsnavigering</h2>
    <a class="prev page-numbers" href="">Föregående</a>
    <span class="page-numbers current">1</span>
    <a class="page-numbers" href="">2</a>
    <a class="next page-numbers" href="">Nästa</a>
  </nav>
</div>
<?php else : ?>
<em>
  <?php _e('Din sökning på "') ?><strong><?= get_search_query() ?></strong><?php _e('" gav inga resultat, men prova något annat :)', 'textdomain'); ?>
</em>
<?php endif; ?>
<?php get_footer(); ?>