<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TransaksiBanksampah */

$this->title = 'Transaksi Bank Sampah : ' .$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-banksampah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'banksampah_id',
            'tanggal',
            'keterangan',
            'nilai',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            'kendaraan_id',
            'pengepul_id',
            'status',
            'kategori_transaksi_id',
        ],
    ]) ?>

</div>
