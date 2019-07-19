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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title; ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">

            <ul class="nav nav-pills">
                <li class="active">
                    <?= Html::a('Главная', '/web/') ?>
                </li>
                <li>
                    <?= Html::a('Статьи', ['post/index']) ?>
                </li>
                <li>
                    <?= Html::a('Статья', ['post/show']) ?>
                </li>
            </ul>

            <?php if(isset($this->blocks['block1'])): ?>
                <?php echo $this->blocks['block1'];  ?>
            <?php endif; ?>

            <?= $content ?>

        </div>
    </div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>