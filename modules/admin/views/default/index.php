<?php
$this->title = 'Панель администратора';

?>

<h1 style="margin-bottom: 40px;">Панель администратора</h1>

<a href="<?php echo yii\helpers\Url::toRoute(['/teachers/index/']) ?>">
    <button class="btnn">
        Учителя
    </button>
</a>

<a href="<?php echo yii\helpers\Url::toRoute(['/raspisanie/index']) ?>">
    <button class="btnn">
        Расписание
    </button>
</a>

<a href="<?php echo yii\helpers\Url::toRoute(['/application/']) ?>">
    <button class="btnn">
        Вопросы
    </button>
</a>

<a href="<?php echo yii\helpers\Url::toRoute(['/subjects/index/']) ?>">
    <button class="btnn">
        Предметы
    </button>
</a>

