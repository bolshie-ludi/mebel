<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <article>
  <header>
  <h3><a href=""><?php print $field->label_html; ?> </a></h3>
    <span><?php print $field->content; ?> </span>
  </header>
  </article>
<?php endforeach; ?>