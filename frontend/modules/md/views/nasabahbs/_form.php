<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\NasabahBanksampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nasabah-banksampah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nasabah_id')->textInput() ?>

    <?= $form->field($model, 'banksampah_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>
<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/ ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
