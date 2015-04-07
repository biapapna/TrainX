<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you. <Br> <Br>
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
         <div class="col-lg-4">
            <b>TrainX-ph</b></br>
            <b>Contact Person:</b> Gener Paolo Sagun</br>
            <b>Contact #:</b> 09202428023</br>
            <b>Email Address:</b> trainx-ph@gmail.com</br>
            <b>Address:</b> s-23 tenement bldg, Taguig City</br>
            </br>    
            <b>LRT</b></br>
            <b>Contact #:</b> +63 (2) 853-0041 to 60, </br>+63 (2) 647-3479 to 91</br>
            <b>Email Address:</b> mis_icc@lrta.gov.ph</br>
            </br>    
            <b>MRT</b></br>
            <b>Contact Person:</b> Gener Paolo Sagun</br>
            <b>Contact #:</b> (02) 9295347-57 local 4405</br>
            <b>Email Address:</b> feedback@dotcmrt3.gov.ph</br>
        </div>
    </div>

</div>
