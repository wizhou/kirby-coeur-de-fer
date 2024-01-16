<?php
$level = $block->level()->or('h2');
$textAlign = $block->text_align()->or('left');
$textTransform = $block->text_transform()->or('unset');
?>
<<?= $level; ?>
    class="headings headings-<?= $block->margins(); ?>"
    style="text-align: <?= $textAlign; ?>; text-transform: <?= $textTransform; ?>"
>
    <?= $block->text(); ?>
</<?= $level; ?>>
