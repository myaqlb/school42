<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Главная';
?>

<div class="Header">
    <div class="header">
        
        <div class="title-desc">
            <h1>МБОУ “СОШ” №42</h1>
            <p class="sch-desc">В школе обучаются школьники 1-11 классов. Педагогический коллектив насчитывает 32 творческих педагога. За
                последние 3 года выпускники школы получили 8 аттестатов с отличием. 100% выпускников школы поступают в СПО.
                В школе оборудованы 32 учебных кабинета, спортивный зал, библиотека, столярная и швейная мастерские,
                компьютерный класс. Функционирует устойчивая система воспитательной деятельности, организован досуг
                учащихся: спортивные секции, кружки по интересам, проводятся различные праздники, соревнования.</p>
            <a href="<?php echo yii\helpers\Url::toRoute(['site/about']) ?>">
                <button class="btnn">Подробнее</button>
            </a>
        </div>


        <div class="slider">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/img1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/img2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img5.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </div>
</div>


<div class="Information">
    <h2>Информация для родителей</h2>
    <p class="inf-desc">Специалистами Управления Роспотребнадзора по Курганской области проводятся консультации по организации питания учащихся.<br>
        Режим работы с 8.30 до 17.30 час.<br>
        Телефоны для консультаций:<br>
        Единый консультативный центр – 8 800 555 49 43 (звонок бесплатный)<br>
        Управление Роспотребнадзора по Курганской области – 8 (3522) 46-03-17, 46-66-61<br>
        ФБУЗ «Центр гигиены и эпидемиологии в Курганской области» – 8 (3522) 24-11-59
    </p>
</div>


<div class="Results">
    <h2>Результаты школы</h2>
    <div class="panels">

        <div class="panel">
            <h5 style="text-align: center">5</h5>
            <p class="panel-desc">Призеров Всеросийской<br>
                олимпиады за 3 года</p>
        </div>

        <div class="panel">
            <h5 style="text-align: center">8</h5>
            <p class="panel-desc">Выпускников с аттестатом<br>
                с отличием за 2022 год</p>
        </div>

        <div class="panel">
            <h5 style="text-align: center">4.0</h5>
            <p class="panel-desc">Средний балл на ОГЭ<br>
                в 2022 году</p>
        </div>

        <div class="panel">
            <h5 style="text-align: center">100%</h5>
            <p class="panel-desc">Выпускников<br>
                поступивших в СПО</p>
        </div>

    </div>
</div>


<div class="How">
    <h2>Как попасть к нам в школу</h2>
    <div class="buttons">

        <a href="<?php echo yii\helpers\Url::toRoute(['/site/rules']) ?>">
            <button class="how-btn">
                Прочитать правила приема в школу
            </button>
        </a>

        <a href="https://www.gosuslugi.ru/168010">
            <button class="how-btn">
                Записать ребенка в школу
            </button>
        </a>

    </div>
</div>


<div class="Director">
    <h2>Руководство</h2>
    <div class="director">
        <div class="dir-desc">
            <div class="name">
                <h2 style="font-size: 28px">Никитина Ксения Владимировна</h2>
                <p class="post">Директор школы</p>
            </div>

            <div class="contacts">
                <div class="labels">
                    <p>Номер телефона</p>
                    <p>Электронная почта</p>
                    <p>Часы работы</p>
                </div>
                <div class="contact">
                    <p>+7 (3522)461317</p>
                    <p>schkol42@yandex.ru</p>
                    <p>8:00-16:00</p>
                </div>
            </div>

            <a href="mailto:schkol42@yandex.ru">
                <button class="btnn">
                    Обратиться
                </button>
            </a>
        </div>

        <img src="img/director.png" alt="">
    </div>
</div>



<div class="Application">
    <?php

    /** @var yii\web\View $this */
    /** @var app\models\application $model */



    ?>
    <div class="application-create">

        <h2 style="margin-bottom: 30px;">Остались вопросы?</h2>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>

</div>