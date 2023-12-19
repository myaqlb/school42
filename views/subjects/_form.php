<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\subjects $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="subjects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name', ['template' => '{input}'])->textInput(array('placeholder' => 'Название', 'class' => 'ii')) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btnn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
