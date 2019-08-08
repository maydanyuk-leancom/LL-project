<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\rbac\models\RbacAuthItem */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Rbac Auth Item',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Rbac Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="rbac-auth-item-update">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
