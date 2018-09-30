<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\JadwalAngkut */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-angkut-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal_id')->textInput() ?>

    <?= $form->field($model, 'tujuan_id')->textInput() ?>

    <?= $form->field($model, 'nopol_kendaraan')->textInput(['maxlength' => true]) ?>
<?php /*
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
