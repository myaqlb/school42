<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\subjects $model */

$this->title = 'Добавить предмет';
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
