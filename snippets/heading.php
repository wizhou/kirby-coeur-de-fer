<?php
$level = $block->level()->or('h2');
$textAlign = $block->text_align()->or('left');
?>
<<?= $level; ?>
    class="headings headings-<?= $block->margins(); ?>"
    style="text-align: <?= $textAlign; ?>;"
>
    <?= $block->text(); ?>
</<?= $level; ?>>
