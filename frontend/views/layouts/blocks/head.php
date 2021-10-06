<?php
use yii\helpers\Html;
?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="/js/script.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $this->context->description; ?>">
<?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
<?php $this->head() ?>