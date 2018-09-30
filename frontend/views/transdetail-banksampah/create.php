<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TransdetailBanksampah */

$this->title = 'Create Transdetail Banksampah';
$this->params['breadcrumbs'][] = ['label' => 'Transdetail Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transdetail-banksampah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
