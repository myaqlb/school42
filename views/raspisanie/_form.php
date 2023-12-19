<?php

use app\models\Teachers;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\raspisanie $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="raspisanie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_name', ['template' => '{input}'])->textInput(array('placeholder' => 'Предмет', 'class' => 'ii')) ?>

    <?= $form->field($model, 'day', ['template' => '{input}'])->textInput(array('placeholder' => 'День недели', 'class' => 'ii')) ?>

    <?= $form->field($model, 'time', ['template' => '{input}'])->textInput(array('placeholder' => 'Время', 'class' => 'ii')) ?>

    <?= $form->field($model, 'teacher_id', ['template' => '{input}'])->dropdownList(Teachers::find()->select(['name', 'surname', 'id'])->indexBy('id')->column(),array('placeholder' => 'ID учителя', 'class' => 'ii'));?>


    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btnn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
