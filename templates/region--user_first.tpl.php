<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php $text_head = omega_theme_get_setting('text_head') ? omega_theme_get_setting('text_head') : 'q pasa'; ?>
    <?php print $content; ?>
    <?php print $text_head; ?>
  </div>
</div>