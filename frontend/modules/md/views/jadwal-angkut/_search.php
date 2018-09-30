<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\JadwalAngkutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-angkut-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hari') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'asal_id') ?>

    <?php // echo $form->field($model, 'tujuan_id') ?>

    <?php // echo $form->field($model, 'nopol_kendaraan') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
