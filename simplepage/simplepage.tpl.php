<?php

/**
 * @file
 * Sablonfájl a Simplepage modulhoz.
 *
 * Változók:
 * simplepage_text_preprocess: Preprocess függvényben állítgatott szöveg
 * simplepage_hook: module_invoke_all() függvénnyel állítgatott szöveg
 */

?>


<?php if ($simplepage_text_preprocess): ?>
  <p>theme preprocess:
    <strong><?php print $simplepage_text_preprocess ?></strong>
  </p>
<?php endif; ?>

<?php if ($simplepage_text_hook): ?>
  <p>module_invoke_all():
    <strong><?php print $simplepage_text_hook ?></strong>
  </p>
<?php endif; ?>
