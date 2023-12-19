<?php

use app\models\Subjects;
use app\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\teachers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name', ['template' => '{input}'])->textInput(array('placeholder' => 'Имя', 'class' => 'ii')) ?>

    <?= $form->field($model, 'surname', ['template' => '{input}'])->textInput(array('placeholder' => 'Фамилия', 'class' => 'ii')) ?>

    <?= $form->field($model, 'patronymic', ['template' => '{input}'])->textInput(array('placeholder' => 'Отчество', 'class' => 'ii')) ?>

    <?= $form->field($model, 'image', ['template' => '{input}'])->textInput(array('placeholder' => 'Фотография', 'class' => 'ii')) ?>

    <?= $form->field($model, 'user_id', ['template' => '{input}'])->dropdownList(User::find()->select(['username', 'id'])->indexBy('id')->column(),array('placeholder' => 'ID учителя', 'class' => 'ii'));?>

    <?= $form->field($model, 'subject_id', ['template' => '{input}'])->dropdownList(Subjects::find()->select(['name', 'id'])->indexBy('id')->column(),array('placeholder' => 'ID учителя', 'class' => 'ii'));?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btnn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
