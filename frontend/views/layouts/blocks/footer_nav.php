<?php
use yii\helpers\Html;

?>
<ul class="navigation">
    <?php foreach ($this->context->bottomMenuItems as $item): ?>
        <li>
            <?php echo Html::a($item['label'], $item['url']); ?>
        </li>
    <?php endforeach; ?>
</ul>

