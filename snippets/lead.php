<div
  class="headword <?= $block->size()->or('lead'); ?> <?= $block->class(); ?>"
  <?php if ($block->id()) echo 'id="' . $block->id() . '"'; ?>
>
  <?= $block->text()->kirbytextinline(); ?>
</div>
