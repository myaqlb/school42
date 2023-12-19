<?php

use app\models\raspisanie;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RaspisanieSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Расписание';

?>
<div class="raspisanie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="margin: 30px 0 30px 0;">
        <?= Html::a('Добавить расписание', ['create'], ['class' => 'btn btnn']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'subject_name',
            'day',
            'time',
            'teacher_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, raspisanie $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
