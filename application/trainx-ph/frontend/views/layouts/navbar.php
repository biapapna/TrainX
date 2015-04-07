<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<?php
    NavBar::begin([
        'brandLabel' => 'TrainX',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Sign Up', 'url' => ['/site/signup']],
        ];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Trains', 'items' => [
                ['label' => 'LRT1', 'url' => ['/site/lrt1']],
                ['label' => 'LRT2', 'url' => ['/site/lrt2']],
                ['label' => 'MRT', 'url' => ['/site/mrt']],
            ]],
            ['label' => 'Information', 'items' => [
                ['label' => 'Price', 'url' => ['/site/price']],
                ['label' => 'Suspect', 'url' => ['/site/suspect']],
                ['label' => 'Suggestion', 'url' => ['/site/suggestion']],
            ]],
        ];
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right menu-modify'],
        'items' => $menuItems,
    ]);
    NavBar::end();
?>