<?php
namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\Url;
use yii\helpers\Html;

class Base extends Component
{
    public function getBottomMenuItems()
    {
        return array_merge(
            $this->getTechnologiesMenuItems(),
            $this->getAuthMenuItems()
        );
    }

    public function getAuthMenuItems()
    {
        $menuItems = [];
        $menuItems[] = ['label' => 'Главная', 'url' => ['/']];
        $menuItems[] = ['label' => 'Обратная связь', 'url' => ['/site/contact']];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
        } else {
            $menuItems[] = ['label' => 'Выйти', 'url' => ['/site/logout']];
        }

        return $menuItems;
    }

    public function getTechnologiesMenuItems()
    {
        $menuItems = [
            ['label' => 'PHP', 'url' => Url::to(['task/list'])],
        ];

        return $menuItems;
    }
}
