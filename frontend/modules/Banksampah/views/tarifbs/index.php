<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\Banksampah\models\TarifBanksampahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarif Banksampah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-banksampah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarif Banksampah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kategori_sampah_id',
            'lembaga_id',
            'harga_kilo',
            //'created_at',
            //'updated_ata',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
