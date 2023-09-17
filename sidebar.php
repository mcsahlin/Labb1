<aside id="secondary" class="<?= is_page('Undersida 2') ? 'col-xs-12 col-md-3 col-md-pull-9' : 'col-xs-12 col-md-3' ?>">
  <ul class="side-menu">
    <?php
    if (is_page() && $post->post_parent) :
      $siblings = get_pages(array(
        'child_of' => $post->post_parent,
        'parent' => $post->post_parent,
        'sort_column' => 'menu_order',
        'sort_order' => 'asc'
      ));
      foreach ($siblings as $sibling) : ?>
        <li>
          <a href=" <?= get_permalink($sibling->ID); ?>"><?= $sibling->post_title; ?></a>
        </li>
      <?php endforeach; ?>
  </ul>

<?php else : ?>
  <div id="sidebar">
    <ul>
      <li>
        <form id="searchform" class="searchform">
          <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" />
            <input type="submit" value="Sök" />
          </div>
        </form>
      </li>
    </ul>
    <ul role="navigation">
      <li class="pagenav">
        <h2>Sidor</h2>
        <ul>
          <li class="page_item current_page_item">
            <a href="">Blogg</a>
          </li>
          <li class="page_item">
            <a href="">Exempelsida</a>
          </li>
          <li class="page_item">
            <a href="">Kontakt</a>
          </li>
          <li class="page_item page_item_has_children">
            <a href="">Om mig</a>
            <ul class="children">
              <li class="page_item">
                <a href="">Intressen</a>
              </li>
              <li class="page_item page_item_has_children">
                <a href="">Portfolio</a>
                <ul class="children">
                  <li class="page_item">
                    <a href="">Projekt 1</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="page_item">
            <a href="">Startsida</a>
          </li>
        </ul>
      </li>
      <li>
        <h2>Arkiv</h2>
        <ul>
          <li>
            <a href="arkiv.html">oktober 2017</a>
          </li>
        </ul>
      </li>
      <li class="categories">
        <h2>Kategorier</h2>
        <ul>
          <li class="cat-item">
            <a href="">Natur</a> (1)
          </li>
          <li class="cat-item">
            <a href="">Okategoriserade</a> (3)
          </li>
        </ul>
      </li>
    </ul>
  </div>
<?php endif; ?>
</aside>