<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TransaksiNasabah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-nasabah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nasabah_id')->textInput() ?>

    <?= $form->field($model, 'banksampah_id')->textInput() ?>

    <?= $form->field($model, 'nilai')->textInput() ?>
<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/
?>
    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_transaksi_id')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
