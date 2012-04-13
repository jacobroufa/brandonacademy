<li id="node-<?php print $node->nid; ?> node-recent-tutorials" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php hide($content); ?>

    <?php print render($content['field_image']); ?>
    <div class="overlay">
      <span class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span><br/>
      <span class="by"> by </span><br/>
      <span class="artist"><?php print render($content['field_artist_name']); ?></span>
    </div>
  </div>
</li>
