<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\md\models\NasabahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nasabah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nasabah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nasabah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nomor',
            'user_id',
            'nama_lengkap',
            'hp',
            //'alamat',
            //'rt',
            //'rw',
            //'kelurahan_id',
            //'created_by',
            //'updated_by',
            //'created_at',
            //'updated_at',
            //'saldo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
