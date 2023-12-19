<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio', ['template' => '{input}'])->textInput(['placeholder' => 'ФИО', 'class' => 'ii']) ?>

    <?= $form->field($model, 'email', ['template' => '{input}'])->textInput(['placeholder' => 'E-mail', 'class' => 'ii']) ?>

    <?= $form->field($model, 'message', ['template' => '{input}'])->textInput(['placeholder' => 'Сообщение', 'class' => 'ii']) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btnn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
