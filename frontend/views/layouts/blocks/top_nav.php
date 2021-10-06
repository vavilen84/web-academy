<?php
use yii\helpers\Html;

?>
<ul class="navigation fl">
    <?php foreach ($this->context->bottomMenuItems as $item): ?>
        <li>
            <?php echo Html::a($item['label'], $item['url']); ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php if($this->context->prevNextButtons): ?>
    <ul class="navigation fr">
        <?php foreach ($this->context->prevNextButtons as $item): ?>
            <li>
                <?php echo Html::a($item['label'], $item['url'], $item['options']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<div class="clear"></div>
