<?php
$size = $block->size()->or('lead');
$class = $block->class();
$id = $block->id();
$textAlign = $block->text_align()->or('left');
?>
<div
  class="headword <?= $size; ?> <?= $class; ?>"
  <?= Html::attr(['id' => $id], null, ' ') ?>
  style="text-align: <?= $textAlign; ?>;"
>
  <?= $block->text()->kirbytextinline(); ?>
</div>
