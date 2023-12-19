<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\raspisanie $model */

$this->title = 'Добавить расписание';
$this->params['breadcrumbs'][] = ['label' => 'Raspisanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raspisanie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
