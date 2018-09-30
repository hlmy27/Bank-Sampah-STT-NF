<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\Nasabah;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\NasabahBanksampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nasabah-banksampah-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'nasabah_id')->textInput() ?>-->

<?php

$ar_nasabah=Nasabah::find()->all();
$listData=ArrayHelper::map($ar_nasabah,'id','nama_lengkap');

echo $form->field($model, 'nasabah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

   <!-- <?= $form->field($model, 'banksampah_id')->textInput() ?> -->

<?php

$ar_lembaga=Lembaga::find()->all();
$listData=ArrayHelper::map($ar_lembaga,'kode','nama');

echo $form->field($model, 'banksampah_id')->dropDownList(
    $listData,
    ['prompt'=>'Select.....']
    );
?>

    <?= $form->field($model, 'status')->textInput() ?>
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
