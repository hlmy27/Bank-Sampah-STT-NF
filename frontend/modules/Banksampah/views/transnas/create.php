<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TransaksiNasabah */

$this->title = 'Create Transaksi Nasabah';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Nasabahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-nasabah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
