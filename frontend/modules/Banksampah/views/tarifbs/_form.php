<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TarifBanksampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-banksampah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kategori_sampah_id')->textInput() ?>

    <?= $form->field($model, 'lembaga_id')->textInput() ?>

    <?= $form->field($model, 'harga_kilo')->textInput() ?>
<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_ata')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
