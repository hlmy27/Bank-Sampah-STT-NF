<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\JadwalAngkut */

$this->title = 'Jadwal Angkut : ' .$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Angkuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-angkut-view">

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
            'hari',
            'jam',
            'kode',
            'asal_id',
            'tujuan_id',
            'nopol_kendaraan',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
        ],
    ]) ?>

</div>
