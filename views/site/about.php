<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О школе';
?>
<div class="About">
    <h2>О школе</h2>
    <p style="margin-top: 30px;">Сегодня школа №42 - это более пятидесяти классов, в которых обучается более 750-ти
        человек.
        Сегодня школа – это стабильный и опытный педагогический коллектив, практически половина которого – учителя
        высшей и первой квалификационных категорий. Это люди с активной жизненной позицией, увлеченные своим делом,
        патриоты, на личном примере мотивирующие ребят к саморазвитию.
        В школе работают классы и группы с кадетским воспитательным компонентом. Наши кадеты не раз отстаивали честь
        города и региона на соревнованиях самого различного уровня. В 2021 году, например, мы заняли третье место на
        Всероссийском слете кадетских корпусов и классов, проходившем во Владивостоке; первое место в дисциплине
        «Огневой рубеж» финала Всероссийской детско-юношеской игры «Зарница» (г. Москва).
        Через систему дополнительного образования кандидаты в кадеты занимаются по дополнительной общеразвивающей
        программе «Эстетическое образование» (4 года обучения), в рамках которой изучают предметы: «Хор», «Танец»,
        «Музыкальная грамота и слушание музыки». В среднем звене (5-7 классы) обязательными для кадет являются занятия
        по строевой подготовке, основам этикета. Желающие посещают секции общей физической подготовки и туризма,
        волейбола, тхеквондо и карате. Старшие кадеты, помимо строевой подготовки, изучают основы начальной военной
        подготовки, истории армии. По желанию занимаются в секции «Юный спасатель», секции волейбола, а также бальными
        танцами.
        В октябре 2018 года наша школа стала полноправным членом Ассоциации кадетских образовательных организаций,
        классов и клубов Свердловской области. Сотрудничество с соседями позволяет обмениваться опытом по
        учебно-воспитательной, профориентационной работе, внеурочной деятельности. Школьная библиотека пополняется
        методической литературой по кадетскому образованию и патриотическому воспитанию школьников, что, несомненно,
        является хорошим подспорьем в работе.
        Осенью 2021 года мы присоединились к Всероссийскому детско-юношескому военно-патриотическому общественному
        движению «Юнармия».
        «Бороться и искать, найти и не сдаваться!» - таков девиз Саньки Григорьева - главного героя романа Валентина
        Каверина «Два капитана», таков девиз школы №42 города Кургана.
        Сдаваться не в наших правилах. Мы идем к покорению новых вершин! </p>
</div>

<div class="Teachers">
    <h2>Педагогический состав</h2>

    <div class="teachers">
        <?php foreach ($teachers as $teacher): ?>


            <div class="card" style="width: 18rem; border-radius: 20px">
                <img src="img/<?php echo $teacher->image; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $teacher->surname; ?>
                        <?php echo $teacher->name; ?>
                        <?php echo $teacher->patronymic; ?>
                    </h4>
                    <p class="card-text"><?php echo $teacher->subject_name; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<div class="Program">
    <h2>Программа развития</h2>
    <ul class="program">
        <li class="program-li">Начальное общее образование(нормативный срок освоения 4 года)</li>
        <li class="program-li">Основное общее образование(нормативный срок освоения 5 лет)</li>
        <li class="program-li">Среднее общее образование(нормативный срок освоения 2 года)</li>
    </ul>
</div>


<div class="Photo">
    <h2 style="margin-bottom: 30px;">Фотографии школы</h2>

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