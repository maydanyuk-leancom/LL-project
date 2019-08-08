<?php
/**
 * @var \yii\data\ArrayDataProvider $dataProvider
 */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Кеш';

$this->params['breadcrumbs'][] = $this->title;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'name',
        'class',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{flush-cache}',
            'buttons' => [
                'flush-cache' => function ($url, $model) {
                    return \yii\helpers\Html::a('<i class="fa fa-refresh"></i>', $url, [
                        'title' => 'Сбросить',
                        'data-confirm' => 'Вы уверены, что хотите сбросить этот кеш?',
                    ]);
                },
            ],
        ],
    ],
]); ?>

<div class="row">
    <div class="col-xs-6">
        <h4><?php echo 'Удалить значение по ключу из кеша' ?></h4>
        <?php \yii\bootstrap\ActiveForm::begin([
            'action' => \yii\helpers\Url::to('flush-cache-key'),
            'method' => 'get',
            'layout' => 'inline',
        ]) ?>
        <?php echo Html::dropDownList(
            'id', null, \yii\helpers\ArrayHelper::map($dataProvider->allModels, 'name', 'name'),
            ['class' => 'form-control', 'prompt' => 'Выберите кеш'])
        ?>
        <?php echo Html::input('string', 'key', null, ['class' => 'form-control', 'placeholder' => 'Ключ']) ?>
        <?php echo Html::submitButton('Сбросить', ['class' => 'btn btn-danger']) ?>
        <?php \yii\bootstrap\ActiveForm::end() ?>
    </div>
    <div class="col-xs-6">
        <h4><?php echo 'Сбросить тег' ?></h4>
        <?php \yii\bootstrap\ActiveForm::begin([
            'action' => \yii\helpers\Url::to('flush-cache-tag'),
            'method' => 'get',
            'layout' => 'inline',
        ]) ?>
        <?php echo Html::dropDownList(
            'id', null, \yii\helpers\ArrayHelper::map($dataProvider->allModels, 'name', 'name'),
            ['class' => 'form-control', 'prompt' => 'Выберите кеш']) ?>
        <?php echo Html::input('string', 'tag', null, ['class' => 'form-control', 'placeholder' => 'Тег']) ?>
        <?php echo Html::submitButton('Сбросить', ['class' => 'btn btn-danger']) ?>
        <?php \yii\bootstrap\ActiveForm::end() ?>
    </div>
</div>
