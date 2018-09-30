<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\TransdetailBanksampah */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transdetail Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transdetail-banksampah-view">

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
            'id',
            'kategori_sampah_id',
            'qty',
            'harga',
            'transaksi_id',
            'created_at',
            'updated_at',
            'created_byl',
            'updated_by',
        ],
    ]) ?>

</div>
