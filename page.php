<?php get_header();
$us1 = is_page('Undersida');
$us2 = is_page('Undersida 2');
$us3 = is_page('Undersida 3');
$us4 = is_page('Undersida 4');
$contact = is_page('Kontakt');
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <?php if ($us1 || $us2 || $us3 || $us4) : ?>
          <?php if ($us2) : get_sidebar();
          endif; ?>
          <div id="primary" class="<?= ($us1 || $us2) ? 'col-xs-12 col-md-9' : ($us3 ? 'col-xs-12' : 'col-xs-12 col-sm-8 col-md-6') ?>">
            <h1><?= the_title(); ?></h1>
            <p><?= the_content(); ?></p>
            <?php if ($us4) : ?>
              <img src="<?= get_the_post_thumbnail_url(); ?>" />
            <?php endif; ?>
          </div>
        <?php if ($us1) : get_sidebar();
          endif;
        endif ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>