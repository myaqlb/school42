<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\raspisanie $model */

$this->title = 'Update Raspisanie: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Raspisanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raspisanie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
