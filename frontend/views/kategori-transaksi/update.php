<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\KategoriTransaksi */

$this->title = 'Update Kategori Transaksi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
