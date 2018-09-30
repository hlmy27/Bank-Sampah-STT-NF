<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\Lembaga */

$this->title = 'Update Lembaga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lembagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lembaga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
