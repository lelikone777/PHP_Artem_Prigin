<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>

<?php $this->beginPage()  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">

<!--        <ul class="nav justify-content-center">-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link">--><?//= Html::a('Главная', '../web') ?><!--</a>            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">--><?//= Html::a('Статьи', ['post/index']) ?><!--</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">--><?//= Html::a('статья', ['post/show']) ?><!--</a>-->
<!--            </li>-->
<!--        </ul>-->

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link"><?= Html::a('Главная', '../web') ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?= Html::a('Статьи', ['post/index']) ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?= Html::a('статья', ['post/show']) ?></a>
            </li>
        </ul>



<!--        <ul class="nav nav-pills">-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link active">--><?//= Html::a('Главная', '../web') ?><!--</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">--><?//= Html::a('Статьи', ['post/index']) ?><!--</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">--><?//= Html::a('статья', ['post/show']) ?><!--</a>-->
<!--            </li>-->
<!--        </ul>-->

        <?php  if ( isset($this->blocks['block1']) ): ?>
        <?php echo $this->blocks['block1'] ?>
        <?php  endif; ?>

        <?= $content ?>

    </div>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
