<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\Banksampah\models\TransaksiNasabah;
use backend\modules\md\models\KategoriSampah;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\TransaksiDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'transaksi_nasabah_id')->textInput() ?>-->

<?php

$ar_transnas=TransaksiNasabah::find()->all();
$listData=ArrayHelper::map($transnas,'id');

echo $form->field($model, 'transaksi_nasabah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <!--<?= $form->field($model, 'kategori_sampah_id')->textInput() ?>-->

<?php

$ar_katsampah=KategoriSampah::find()->all();
$listData=ArrayHelper::map($katsampah,'id','nama');

echo $form->field($model, 'kategori_sampah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>
<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
