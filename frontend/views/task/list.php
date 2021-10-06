<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'PHP Задачи';
?>
<div class="task-list">
    <?php foreach($levels as $level): ?>
        <h2>Уровень <?php echo $level['title']; ?></h2>
        <?php foreach($level['items'] as $k => $task): ?>
            <div class="task <?php echo $task['checked'] ? 'checked' : ''; ?>">
                <a href="<?php echo Url::to('/task/' . $task['url']); ?>">
                    <?php echo $task['title']; ?>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
