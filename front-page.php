<?php $hero = get_field('hero'); ?>
<?php get_header(); ?>
<div class="col-xs-12">
  <div class="hero">
    <img src="<?=$hero['hero_img'];?>" />
    <div class="text">
      <h1><?=$hero['title'];?></h1>
      <p><?=$hero['text'];?></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>