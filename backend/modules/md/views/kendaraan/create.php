<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\md\models\Kendaraan */

$this->title = 'Create Kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
