<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <?php echo $this->renderFile(dirname(__FILE__) . '/blocks/head.php'); ?>
</head>
<body>
<?php echo $this->renderFile(dirname(__FILE__) . '/blocks/google_analytics.php'); ?>
<?php echo $this->renderFile(dirname(__FILE__) . '/blocks/yandex_metrica.php'); ?>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="header">
        <div class="header-holder">
            <?php echo $this->renderFile(dirname(__FILE__) . '/blocks/top_nav.php'); ?>
        </div>
    </div>
    <div class="container">
        <div class="header-title">
            <h1>
                <?php echo $this->title; ?>
            </h1>
        </div>
        <?php echo $content ?>
    </div>
</div>
<footer class="footer">
    <div class="footer-holder">
        <?php echo $this->renderFile(dirname(__FILE__) . '/blocks/footer_nav.php'); ?>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
