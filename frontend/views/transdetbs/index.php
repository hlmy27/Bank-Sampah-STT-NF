<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\md\models\TransdetailBanksampahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transdetail Banksampahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transdetail-banksampah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transdetail Banksampah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kategori_sampah_id',
            'qty',
            'harga',
            'transaksi_id',
            //'created_at',
            //'updated_at',
            //'created_byl',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
