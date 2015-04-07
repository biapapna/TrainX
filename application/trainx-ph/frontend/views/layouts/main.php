<?php
use yii\helpers\Html;
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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" type="image/ico" href="images/icon.ico"> 
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

      <div class="wrap">        
        <div class="navbar-modify navbar-margin-bottom">
            <?php include('navbar.php'); ?>
        </div>
        <div class="container container-white">
                            <!--<?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                            <?= Alert::widget() ?>-->
            
                    <?= $content ?>
            </div>
    </div>


    <?php include('footer.php'); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
