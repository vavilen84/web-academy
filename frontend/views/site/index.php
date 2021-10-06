<?php

/* @var $this yii\web\View */

$this->title = 'Web Academy';
?>
<div class="site-index">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <span class="success email-success">
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </span>
    <?php endif; ?>
    <div class="fl w30p">
        <div class="home-page-image">
            <img alt="" src="/images/logo.jpg">
        </div>
    </div>
    <div class="fr w65p">
        <p>
            <strong>Web Academy</strong> - это интерактивные уроки PHP на русском языке. Со временем будут добавлены другие технологии.
            В каждой задаче нужно писать код - точнее повторить тот, который написан.
            Скопипастить его не выйдет, прийдется писать руками и писать много.
            На данный момент функционирует в тестовом режиме. Выложены первые уроки.
            Свои отзывы и пожелания можно оставить <a href="/site/contact">вот тут</a>.
        </p>
        <p>
        </p>
            <div>
                <strong>Если повторяем код, то и думать самому не надо?</strong>
            </div>
            Уроки расчитаны на начинающих, у которых отсутствует какой либо опыт. Код в задачах намерено подбирается наиболее
            схожий с реальными "боевыми" задачами. Тоесть по сути рессурс предоставляет свою трактовку к подходу разработки
            и новичку предлагается ознакомится с таким подходом. Думать безусловно нужно, и гуглить тоже нужно.<br>
        </p>
        <div>
            <strong>Как проходить задачи?</strong>
        </div>
        Вначале каждой задачи теория. Нужно повторять код который располагается после вот такой разделительной линии: Пример<br>
        <div class="well">
            <div class="separator"></div>
            <pre>
<code class="php">
/*
    Это многострочный комментарий
*/
// Это однострочный
echo "Hello World!";
</code>
</pre>
        </div>
        Комментарии в PHP это то, что игнорируется интерпретатором. Тоесть если проще сказать - присутствует в нашем
        сценарии, но не влияет на него. Их писать не надо - они предназначены для пояснения материала.
        Соответственно ожидаемый код для проверки нужно будет написать: <strong>echo "Hello World!";</strong><br>
        Код требует полного соответствия для положительного результата. Незалогиненому пользователю доступны
        все теже уроки, что и залогиненому. Разница лишь в том, что для залогиненого пользователя будут сохранены успешно
        пройденные задачи, чтобы в будущем легко можно было понять - что стоит проходить, а что нет. Уроки будут пополнятся.
        На данный момент это PHP. Удачи в прохождении!
        </p>
    </div>
    <div class="clear"></div>
    <div class="jumbotron">
        <p><a class="btn btn-lg btn-success" href="/task/list">Начать !!!</a></p>
    </div>
</div>
