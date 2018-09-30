<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\JadwalAngkut */

$this->title = 'Create Jadwal Angkut';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Angkuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-angkut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
