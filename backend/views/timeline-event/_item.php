<?php
/**
 * @var $model common\models\TimelineEvent
 */
?>
<div class="timeline-item">
    <span class="time">
        <i class="fa fa-clock-o"></i>
        <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    </span>
    <h3 class="timeline-header">
        <?php echo 'У вас новое событие' ?>
    </h3>

    <div class="timeline-body">
        <dl>
            <dt><?php echo 'Приложение' ?>:</dt>
            <dd><?php echo $model->application ?></dd>

            <dt><?php echo 'Категория' ?>:</dt>
            <dd><?php echo $model->category ?></dd>

            <dt><?php echo 'Событие' ?>:</dt>
            <dd><?php echo $model->event ?></dd>

            <dt><?php echo 'Дата' ?>:</dt>
            <dd><?php echo Yii::$app->formatter->asDatetime($model->created_at) ?></dd>
        </dl>
    </div>
</div>