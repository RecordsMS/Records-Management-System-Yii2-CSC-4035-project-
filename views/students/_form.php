<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->dropDownList([ 'M' => 'M', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Date_of_birth')->textInput() ?>

    <?= $form->field($model, 'Phone_Number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'School')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year_of_study')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
