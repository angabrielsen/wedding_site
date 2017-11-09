<?php if($page->hasVisibleChildren()): ?>
  <div class="container">
    <nav role="navigation">
      <ul class="menu cf">
        <?php foreach($page->children()->visible() as $p): ?>
        <li>
          <a href="#<?php echo $p->title()->html()->escape() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>
  </div>
<?php endif ?>