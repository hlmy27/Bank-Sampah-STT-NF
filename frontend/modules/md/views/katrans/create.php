<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\KategoriTransaksi */

$this->title = 'Create Kategori Transaksi';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-transaksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
