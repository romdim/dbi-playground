<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Favicons  -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::getAlias('@web') ?>/assets/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= Yii::getAlias('@web') ?>/assets/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::getAlias('@web') ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= Yii::getAlias('@web') ?>/assets/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::getAlias('@web') ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= Yii::getAlias('@web') ?>/assets/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= Yii::getAlias('@web') ?>/assets/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Html::img(Yii::getAlias('@web') . '/assets/logo.png', ['class' => 'img img-responsive']),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Part1', 'url' => ['/parts/view', 'id' => 1]],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
