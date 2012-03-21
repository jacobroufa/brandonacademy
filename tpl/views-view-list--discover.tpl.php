<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div id="discoverList-nav"></div>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<ul id="discoverList">
  <?php foreach ($rows as $id => $row): ?>
    <li class="<?php print $classes_array[$id]; ?>">
      <hr>
      <?php print $row; ?>
    </li>
  <?php endforeach; ?>
</ul>
