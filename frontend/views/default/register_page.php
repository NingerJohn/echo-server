<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\user\UserRegisterForm */
/* @var $form ActiveForm */
?>


<div class="default-register_page">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'email_code') ?>
        <?= $form->field($model, 'pwd')->passwordInput() ?>
        <?= $form->field($model, 'cfm_pwd')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- default-register_page -->
