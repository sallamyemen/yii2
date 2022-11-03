<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?= Html::a('Главная', '/yii2/web/' )?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Coordinat', ['post/index'] )?>
                </li>
                <!-- <li class="nav-item">
                    <?//= Html::a('Статья', ['post/show'] )?>
                </li>
                <li class="nav-item">
                    <?//= Html::a('Test', ['post/test'] )?>
                </li> -->
            </ul>
            <?= $content ?>
        </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>