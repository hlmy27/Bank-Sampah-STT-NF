<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\Banksampah\models\TransaksiNasabahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Nasabah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-nasabah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaksi Nasabah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nasabah_id',
            'banksampah_id',
            'nilai',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'keterangan',
            //'kategori_transaksi_id',
            //'tanggal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
