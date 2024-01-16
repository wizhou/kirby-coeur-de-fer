<?php
$size = $block->size()->or('lead');
$class = $block->class();
$id = $block->id();
$textAlign = $block->text_align()->or('left');
$textTransform = $block->text_transform()->or('unset');
?>
<div
  class="headword <?= $size; ?> <?= $class; ?>"
  <?= Html::attr(['id' => $id], null, ' ') ?>
  style="text-align: <?= $textAlign; ?>; text-transform: <?= $textTransform; ?>"
>
  <?= $block->text()->kirbytextinline(); ?>
</div>
