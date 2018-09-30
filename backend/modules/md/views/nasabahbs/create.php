<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\NasabahBanksampah */

$this->title = 'Create Nasabah Banksampah';
$this->params['breadcrumbs'][] = ['label' => 'Nasabah Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nasabah-banksampah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
