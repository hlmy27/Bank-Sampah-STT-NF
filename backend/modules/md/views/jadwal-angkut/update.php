<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\JadwalAngkut */

$this->title = 'Update Jadwal Angkut: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Angkuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-angkut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
