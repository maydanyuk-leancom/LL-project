<?php

use common\models\User;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

//$this->title = $model->getPublicIdentity();
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <p>
        <?php echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <h2>Вопрос: <?= $questions->question?> </h2>
    <h3>Поделиться: <?= Yii::$app->urlManager->createAbsoluteUrl(['/question/default/share', 'token' => $questions->token]);?> </h3>
    <h2>Ответы: </h2>
    <?php

    $i=0;

    foreach ($answer as $a){
        $i++;
        echo "<h4>".$i.". ".$a["answers"]."</h4>";

     }?>

</div>
