<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\TransaksiDetail */

$this->title = 'Update Transaksi Detail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
