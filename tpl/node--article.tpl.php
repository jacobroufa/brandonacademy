<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>


<!--  <?php if ($display_submitted || $user_picture): ?>
    <footer class="author">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </footer>
  <?php endif; ?> -->

  <div class="above-content">
    <?php if ($title): ?>
      <header><div class="header-inner">
        <?php print render($title_prefix); ?>
        <span<?php print $title_attributes; ?>><?php print render($title); ?></span>
        <br />
        <?php print theme('image_style', array( 'path' => render($content['field_artist_name']['#items'][0]['taxonomy_term']->field_artist_image['und'][0]['uri']), 'style_name' => 'artist_image')); ?> <span class="artist-name"><?php print render($content['field_artist_name'][0]['#markup']); ?></span>
        <?php print render($title_suffix); ?>
      </div></header>
    <?php endif; ?>
  </div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_featured']);
      hide($content['field_instrument']);
      hide($content['field_artist']);
      hide($content['body']);
      hide($content['field_artist_name']);
      hide($content['field_song_title']);
      hide($content['field_social']);
      print render($content);
    ?>
  </div>

  <div class="below-content">
    <?php if ($content['body']): ?>
      <?php print render($content['body']); ?>
    <?php endif; ?>
  </div>

  <?php print render($content['field_social']); ?>

  <?php if ($links = render($content['links'])): ?>
    <footer class="link-wrapper">
      <?php print $links; ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article>
