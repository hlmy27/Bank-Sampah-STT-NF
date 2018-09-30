<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\KategoriSampah */

$this->title = 'Update Kategori Sampah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-sampah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
