<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TarifBanksampahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-banksampah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kategori_sampah_id') ?>

    <?= $form->field($model, 'lembaga_id') ?>

    <?= $form->field($model, 'harga_kilo') ?>

    <?= // $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_ata') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
