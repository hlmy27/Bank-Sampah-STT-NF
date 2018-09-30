<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TransaksiNasabah */

$this->title = 'Transaksi Nasabah : ' .$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Nasabahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-nasabah-view">

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
            'nasabah_id',
            'banksampah_id',
            'nilai',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            'keterangan',
            'kategori_transaksi_id',
            'tanggal',
        ],
    ]) ?>

</div>
