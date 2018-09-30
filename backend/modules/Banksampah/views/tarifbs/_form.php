<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\KategoriSampah;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TarifBanksampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-banksampah-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'kategori_sampah_id')->textInput() ?>-->

<?php

$ar_katsampah=KategoriSampah::find()->all();
$listData=ArrayHelper::map($ar_katsampah,'id','nama');

echo $form->field($model, 'kategori_sampah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <!--<?= $form->field($model, 'lembaga_id')->textInput() ?>-->

<?php

$ar_lembagaid=Lembaga::find()->all();
$listData=ArrayHelper::map($ar_lembagaid,'kode','nama');

echo $form->field($model, 'lembaga_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

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
