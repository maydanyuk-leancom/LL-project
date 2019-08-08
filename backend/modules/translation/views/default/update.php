<?php

/**
 * @var $this      yii\web\View
 * @var $model     \common\base\MultiModel
 * @var $languages array
 */

$this->title = Yii::t('backend', 'Редактирование {modelClass}: ', [
        'modelClass' => 'I18n Source Message',
    ]) . ' ' . $model->getModel('source')->message;

$this->params['breadcrumbs'][] = ['label' => 'Тексты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getModel('source')->message, 'url' => ['update', 'id' => $model->getModel('source')->id]];
$this->params['breadcrumbs'][] = 'Редактировать';

?>

<?php echo $this->render('_form', [
    'model' => $model,
    'languages' => $languages,
]) ?>


