<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\rbac\models\RbacAuthItemChild */

$this->title = 'Create Rbac Auth Item Child';
$this->params['breadcrumbs'][] = ['label' => 'Rbac Auth Item Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rbac-auth-item-child-create">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
