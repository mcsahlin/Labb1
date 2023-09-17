<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary"
          class="<?= is_page('Undersida') ? 'col-xs-12 col-md-9' : (is_page('Undersida 2') ? 'col-xs-12 col-md-9 col-md-push-3' : (is_page('Undersida 3') ? 'col-xs-12' : 'col-xs-12 col-sm-8 col-md-6')); ?>">
          <h1><?= the_title(); ?></h1>
          <p><?= the_content(); ?></p>
        </div>
        <?php if (is_page('Undersida 4')) : ?>
        <div class='col-xs-12 col-sm-4 col-md-6'>
          <img src='<?= get_the_post_thumbnail_url(); ?>' />
        </div><?php endif; ?>
        <?php if (is_page('Undersida') || is_page('Undersida 2')) : get_sidebar();
        endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>