<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="Contacts">
        <div class="socials">
            <ul class="social-links">
                <li class="s-link"><a href="https://vk.com/kurgan42school">Вконтакте</a></li>
                <li class="s-link"><a
                            href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwj50caA3oqDAxVBPhAIHavCAK0QFnoECAsQAQ&url=https%3A%2F%2Fwww.instagram.com%2Fexplore%2Flocations%2F405909487%2F42%2F&usg=AOvVaw3pJ7MTY1GV16imio0yDldq&opi=89978449">Instagram</a>
                </li>
                <li class="s-link"><a href="https://www.youtube.com/@user-jq1sf9rj1j">YouTube</a></li>
                <li class="s-link"><a href="https://www.tiktok.com/@_school42_">TikTok</a></li>
            </ul>

            <a style="text-decoration: none; color: #1e1e1e" href="tel:+7(3522)461317">
                <p class="s-res">+7 (3522) 46 13 17</p>
            </a>
            <a style="text-decoration: none; color: #1e1e1e" href="mailto:schkol42@yandex.ru">
                <p class="s-res">schkol42@yandex.ru</p>
            </a>
        </div>

        <div style="border-radius: 20px position:relative;overflow:hidden;"><a
                    href="https://yandex.ru/maps/org/shkola_42/1083378050/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Школа № 42</a><a
                    href="https://yandex.ru/maps/53/kurgan/category/school/184106240/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:14px;">Общеобразовательная школа в
                Кургане</a>
            <iframe src="https://yandex.ru/map-widget/v1/?ll=65.340720%2C55.433123&mode=search&oid=1083378050&ol=biz&z=17.87"
                    width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>

    </div>
</div>
