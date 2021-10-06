<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Привет, <?php echo $user->username ?>

Нажмите на ссылку для сброса пароля:

<?php echo $resetLink ?>
