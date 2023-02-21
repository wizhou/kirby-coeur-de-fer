<?php $level = $block->level()->or('h2'); ?>

<<?= $level; ?> class="headings headings-<?= $block->margins(); ?>">
    <?= $block->text(); ?>
  </<?= $level; ?>>
