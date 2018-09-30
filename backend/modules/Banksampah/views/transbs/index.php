<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\Banksampah\models\TransaksiBanksampahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Banksampah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-banksampah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaksi Banksampah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'banksampah_id',
            'tanggal',
            'keterangan',
            'nilai',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'kendaraan_id',
            //'pengepul_id',
            //'status',
            //'kategori_transaksi_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
