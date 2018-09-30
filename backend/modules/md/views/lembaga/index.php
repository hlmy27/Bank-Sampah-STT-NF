<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\md\models\LembagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lembaga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lembaga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kode',
            'nama',
            'pemilik',
            'alamat',
            //'rt',
            //'rw',
            //'kodepos',
            //'kelurahan_id',
            //'latitude',
            //'longitude',
            //'telpon',
            //'user_id',
            //'kategori_id',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'pengepul_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
