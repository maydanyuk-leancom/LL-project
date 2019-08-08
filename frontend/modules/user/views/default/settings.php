<?php

use trntv\filekit\widget\Upload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\base\MultiModel */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12">
        <div class="col-md-2">

    <?php echo $form->field($model->getModel('profile'), 'picture')->widget(
        Upload::class,
        [
            'url' => ['avatar-upload']
        ]
    )?>
        </div>
        <div class="col-md-3 ">
            <h2><?php echo 'Настройки профиля' ?></h2>

    <?php echo $form->field($model->getModel('profile'), 'firstname')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'middlename')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'lastname')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'locale')->dropDownlist(Yii::$app->params['availableLocales']) ?>

    <?php echo $form->field($model->getModel('profile'), 'gender')->dropDownlist([
        \common\models\UserProfile::GENDER_FEMALE => 'Женский',
        \common\models\UserProfile::GENDER_MALE => 'Мужской'
    ], ['prompt' => '']) ?>


        </div>


        <div class="col-md-3 ">

    <h2><?php echo 'Настройки аккаунта' ?></h2>

    <?php echo $form->field($model->getModel('account'), 'username') ?>

    <?php echo $form->field($model->getModel('account'), 'email') ?>

    <?php echo $form->field($model->getModel('account'), 'password')->passwordInput() ?>

    <?php echo $form->field($model->getModel('account'), 'password_confirm')->passwordInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
    </div>



    <?php ActiveForm::end(); ?>
        </div>



    </div>



</div>
