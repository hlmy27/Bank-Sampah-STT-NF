<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuKategori = [
        '<li class="divider"></li>',
        ['label' => 'Kategori', 'url' => ['/md/kategori/index']],
        '<li class="divider"></li>',
        ['label' => 'Kategori Sampah', 'url' => ['/md/katsampah/index']],
        '<li class="divider"></li>',
        ['label' => 'Kategori Transaksi', 'url' => ['/md/katrans/index']],
        '<li class="divider"></li>',
        
    ];

    $menuBanksampah = [
        '<li class="divider"></li>',  
        ['label' => 'Nasabah', 'url' => ['/md/nasabah/index']],
        '<li class="divider"></li>',
        ['label' => 'Lembaga', 'url' => ['/md/lembaga/index']],
        '<li class="divider"></li>',
        ['label' => 'Nasabah Bank Sampah', 'url' => ['/md/nasabahbs/index']],
        '<li class="divider"></li>',
    ];

    $menuTransaksi = [
        '<li class="divider"></li>',
        ['label' => 'Transaksi Nasabah', 'url' => ['/banksampah/transnas/index']],
        '<li class="divider"></li>',
        ['label' => 'Transaksi Detail', 'url' => ['/md/transdetail/index']],
        '<li class="divider"></li>',
        ['label' => 'Tarif Bank Sampah', 'url' => ['/banksampah/tarifbs/index']],
        '<li class="divider"></li>',
        ['label' => 'Transaksi Bank Sampah', 'url' => ['/banksampah/transbs/index']],
        '<li class="divider"></li>',
        ['label' => 'Transaksi Detail Bank Sampah', 'url' => ['/md/transdetbs/index']],
        '<li class="divider"></li>',
    ];

    $menuOrder = [
        '<li class="divider"></li>',
        ['label' => 'Kendaraan', 'url' => ['/md/kendaraan/index']],
        '<li class="divider"></li>',
        ['label' => 'Jadwal Angkut', 'url' => ['/md/jadwal-angkut/index']],
        '<li class="divider"></li>',
    ];

    if (Yii::$app->user->isGuest) {
        $menuAkun =[
            '<li class="divider"></li>',
            ['label' => 'Signup', 'url' => ['/user/registration/register']],
            '<li class="divider"></li>',
            ['label' => 'Login', 'url' => ['/user/security/login']],
            '<li class="divider"></li>',
            ['label' => 'About', 'url' => ['/site/about']],
            '<li class="divider"></li>',
            ['label' => 'Contact', 'url' => ['/site/contact']],
            '<li class="divider"></li>',
        ];
    } else {
        $menuAkun = [
            '<li class="divider"></li>',
            ['label' => 'About', 'url' => ['/site/about']],
            '<li class="divider"></li>',
            ['label' => 'Contact', 'url' => ['/site/contact']],
            '<li class="divider"></li>',
        ]; 
        $menuAkun [] = '<li>'
            . Html::beginForm(['/user/security/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
        [
            'label' => 'Kategori',
            'items' => $menuKategori,
        ],
        [
            'label' => 'Bank Sampah',
            'items' => $menuBanksampah,
        ],
        [
            'label' => 'Transaksi',
            'items' => $menuTransaksi,
        ],
        [
            'label' => 'Order',
            'items' => $menuOrder,
        ],
        [
            'label' => 'Akun',
            'items' => $menuAkun,
        ],
    ],
        'options' => ['class' => 'navbar-nav navbar-right'],
        //'items' => $menuItems,
]);
NavBar::end();
?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
