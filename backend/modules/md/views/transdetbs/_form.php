<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\md\models\KategoriSampah;
use backend\modules\md\models\TransaksiBanksampah;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\TransdetailBanksampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transdetail-banksampah-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'kategori_sampah_id')->textInput() ?>-->

<?php

$ar_katsam=KategoriSampah::find()->all();
$listData=ArrayHelper::map($ar_katsam,'id','nama');

echo $form->field($model, 'kategori_sampah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <!--<?= $form->field($model, 'transaksi_id')->textInput() ?>-->

<?php

$ar_trans=TransaksiBanksampah::find()->all();
$listData=ArrayHelper::map($ar_trans,'id');

echo $form->field($model, 'transaksi_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_byl')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
