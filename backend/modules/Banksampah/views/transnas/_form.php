<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\Nasabah;
use backend\modules\md\models\KategoriTransaksi;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TransaksiNasabah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-nasabah-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'nasabah_id')->textInput() ?> -->

<?php

$ar_nasabah=Nasabah::find()->all();
$listData=ArrayHelper::map($ar_nasabah,'id','nama_lengkap');

echo $form->field($model, 'nasabah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <!--<?= $form->field($model, 'banksampah_id')->textInput() ?>-->

<?php

$ar_banksampah=Lembaga::find()->all();
$listData=ArrayHelper::map($ar_banksampah,'kode','nama');

echo $form->field($model, 'banksampah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

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

    <!-- <?= $form->field($model, 'kategori_transaksi_id')->textInput() ?> -->

    <?php

    $ar_kategoritrans=KategoriTransaksi::find()->all();
    $listData=ArrayHelper::map($ar_kategoritrans,'id','nama');

    echo $form->field($model, 'kategori_transaksi_id')->dropDownList(
        $listData,
        ['prompt'=>'Select.....']
        );
    ?>

    <!-- <?= $form->field($model, 'tanggal')->textInput() ?> -->
     <?= $form->field($model, 'tanggal')->widget(
            DatePicker::className(), [
                // inline too, not bad
                 'inline' => false, 
                 // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy'
                ]
        ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
