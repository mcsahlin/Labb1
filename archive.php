<?php get_header();
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'monthnum' => get_query_var('monthnum'),
  'year' => get_query_var('year'),
  'author' => get_query_var('author'),
  'cat' => get_query_var('cat'),
);
$the_query = new WP_Query($args); ?>
<div id="primary" class="col-xs-12 col-md-9">
  <h1><?= page(); ?></h1>
  <?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
  <?php elseif (!have_posts()) : _e('Inga inlägg än, kom tillbaka snart!', 'textdomain');
  endif; ?>
  <nav class=" navigation pagination">
    <h2 class="screen-reader-text">Inläggsnavigering</h2>
    <a class="prev page-numbers" href="">Föregående</a>
    <span class="page-numbers current">1</span>
    <a class="page-numbers" href="">2</a>
    <a class="next page-numbers" href="">Nästa</a>
  </nav>
</div>
<?php wp_reset_postdata(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>