<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="primary" class="col-xs-12 col-md-9">
  <article>
    <img src="<?= get_the_post_thumbnail_url(); ?>" />
    <h1 class="title"><?= the_title(); ?></h1>
    <ul class="meta">
      <li>
        <i class="fa fa-calendar"></i>
        <?= get_the_date(); ?>
      </li>
      <li>
        <i class="fa fa-user"></i>
        <?= the_author_posts_link(); ?>
      </li>
      <li>
        <i class="fa fa-tag"></i>
        <?= the_category(', '); ?>
      </li>
    </ul>
    <p><?= the_content(); ?></p>
  </article>
</div>
<?php endwhile;
endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>