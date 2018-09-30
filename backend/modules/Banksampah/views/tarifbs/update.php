<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TarifBanksampah */

$this->title = 'Update Tarif Banksampah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tarif Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarif-banksampah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
