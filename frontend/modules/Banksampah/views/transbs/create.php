<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\Banksampah\models\TransaksiBanksampah */

$this->title = 'Create Transaksi Banksampah';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-banksampah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
