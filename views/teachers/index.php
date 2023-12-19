<?php

use app\models\teachers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TeachersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Учителя';
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="margin: 30px 0 30px 0;">
        <?= Html::a('Добавить учителя', ['create'], ['class' => 'btn btnn']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'patronymic',
            'image',
            //'user_id',
            //'subject_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, teachers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
