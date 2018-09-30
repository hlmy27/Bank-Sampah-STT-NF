<?php

use yii\helpers\Html;
use backend\modules\md\models\Kategori;
use backend\modules\md\models\Nasabah;
use backend\modules\md\models\NasabahBanksampah;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\Lembaga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembaga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodepos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahan_id')->textInput(['maxlength' => true]) ?>
<?php
/*
    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>
*/
?>
    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'user_id')->textInput() ?> -->
    <?php

    $ar_nasabah=Nasabah::find()->all();
    $listData=ArrayHelper::map($ar_nasabah,'user_id','nama_lengkap');

    echo $form->field($model, 'user_id')->dropDownList(
        $listData,
        ['prompt'=>'Select.....']
        );
    ?>

    <!-- <?= $form->field($model, 'kategori_id')->textInput() ?> -->
    <?php

    $ar_kategori=Kategori::find()->all();
    $listData=ArrayHelper::map($ar_kategori,'id','nama');

    echo $form->field($model, 'kategori_id')->dropDownList(
        $listData,
        ['prompt'=>'Select.....']
        );
    ?>
<?php
/*
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
*/
?>
    <!-- <?= $form->field($model, 'pengepul_id')->textInput() ?> -->
    <?php

    $ar_pengepul=NasabahBanksampah::find()->all();
    $listData=ArrayHelper::map($ar_pengepul,'nasabah_id','banksampah_id');

    echo $form->field($model, 'pengepul_id')->dropDownList(
        $listData,
        ['prompt'=>'Select.....']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
