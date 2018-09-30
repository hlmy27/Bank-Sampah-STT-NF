<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NasabahBanksampah */

$this->title = 'Update Nasabah Banksampah: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Nasabah Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nasabah-banksampah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
