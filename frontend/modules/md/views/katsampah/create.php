<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\KategoriSampah */

$this->title = 'Create Kategori Sampah';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-sampah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
