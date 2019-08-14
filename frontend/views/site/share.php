<?php

use common\models\User;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->registerCssFile('/css/custom.css');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/save_to_local.js',['position'=>\yii\web\View::POS_END])

//$this->title = $model->getPublicIdentity();
//$this->params['breadcrumbs'][] = ['label' => 'Опрос', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

</div>

<div class="site-index">


    <div class="body-content col-lg-12">


        <div class="row">
            <div class="col-sm-12 col-md-12 block-voting">
                <div class="thumbnail">
                    <div class="caption text-center">

                        <ul class="pager">
                            <li class="left question"><a href="#">?</a></li>
                            <li class="left mail"><a href="#">@</a></li>
                            <li class="right dollar"><a href="#">$</a></li>
                        </ul>

<!--                        <div class="navigation">-->
<!--                            <div class="progress">-->
<!--                                <div class="progress-bar" style="width: 100%;"></div>-->
<!--                            </div>-->
<!---->
<!---->
<!--                            <ul class="nav" >-->
<!--                                <li class="active"><a href="#poll1" data-toggle="tab">&bull;</a></li>-->
<!--                                <li><a href="#poll2" data-toggle="tab">&bull;</a></li>-->
<!--                                <li><a href="#poll3" data-toggle="tab">&bull;</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="poll1">
                                <h1><?= $questions->question?></h1>
                                <br><br>
                                <?php foreach ($answer as $a){

                                   if(Yii::$app->user->isGuest){
                                       $var = 'data-toggle="modal" data-target="#myModal"';
                                   }
                                   else{
                                       $var = 'href="saveanswer?question='.$questions->token.'&id='.$a["id"].'"';
                                   }?>


                                    <div class="col-sm-4 col-md-4">
                                        <a class="btn btn-primary display-4 answer" <?=$var?>>
                                            <?=$a["answers"]?>
                                        </a>

                                    </div>


                                <?php } ?>

                            </div>

                            <div class="tab-pane fade" id="poll2">
                                <h1>Решите математическое уровнение 8:2(2+2)=?</h1>
                                <div class="col-sm-4 col-md-4">
                                    <button type="submit" class="btn btn-default">16</button>

                                    <div class="progress progress-bar-vertical">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
                                            <div class="progress-text">
                                                20%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <button type="submit" class="btn btn-default">1</button>

                                    <div class="progress progress-bar-vertical">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
                                        </div>
                                        <div class="progress-text">
                                            20%
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <button type="submit" class="btn btn-default">Другое</button>

                                    <div class="progress progress-bar-vertical">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="height: 65%">
                                        </div>
                                        <div class="progress-text">
                                            60%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="poll3"><h1>Нету</h1></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>



</div>

<div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="height: auto">

            <div class="modal-body text-center">
                <p>Чтобы твой ответ был учтен, зарегистрируйся через</p>

                <div class="form-group">
                    <?php $authAuthChoice = yii\authclient\widgets\AuthChoice::begin([
                        'baseAuthUrl' => ['/user/sign-in/oauth']
                    ]); ?>
                    <ul class="list-unstyle list-inline">
                        <?php foreach ($authAuthChoice->getClients() as $client): ?>
                            <li><?= $authAuthChoice->clientLink($client) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php yii\authclient\widgets\AuthChoice::end(); ?>
                </div>

<!--                <a href="/user/sign-in/signup">Или через почту</a>-->
<!--                <a href="saveanswer?question=--><?//=$questions->token?><!--"></a>-->

<!---->
<!--                <h5>Куда отправить результат?</h5>-->
<!--                <br>-->
<!--                <input type="email"  class="form-control" placeholder="email@gogle.com">-->
<!--                <br>-->
<!---->
<!--                <h5>Оплата</h5>-->
<!---->
<!--                <a href="https://mobirise.co" class="btn btn-primary display-4">-->
<!--                    Visa-->
<!--                </a>-->
<!--                <a href="https://mobirise.co" class="btn btn-primary display-4">-->
<!--                    Mastercard-->
<!--                </a>-->
<!--                <br>-->


            </div>



        </div>

    </div>
</div>