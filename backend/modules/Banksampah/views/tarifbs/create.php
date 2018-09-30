<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\Banksampah\models\TarifBanksampah */

$this->title = 'Create Tarif Banksampah';
$this->params['breadcrumbs'][] = ['label' => 'Tarif Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-banksampah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
