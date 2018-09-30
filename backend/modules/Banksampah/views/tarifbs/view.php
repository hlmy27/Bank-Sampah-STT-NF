<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TarifBanksampah */

$this->title = 'Tarif : ' .$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tarif Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-banksampah-view">

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
            'kategori_sampah_id',
            'lembaga_id',
            'harga_kilo',
            //'created_at',
            //'updated_ata',
            //'created_by',
            //'updated_by',
        ],
    ]) ?>

</div>
