<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TransaksiBanksampah */

$this->title = 'Update Transaksi Banksampah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-banksampah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
