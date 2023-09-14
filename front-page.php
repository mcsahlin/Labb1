<?php $hero = get_field('hero'); ?>
<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero">
            <img src="<?php echo $hero['hero_img']; ?>" />
            <div class="text">
              <h1><?php echo $hero['title']; ?></h1>
              <p><?php echo $hero['text']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>