<?php


use yii\authclient\widgets\AuthChoice;
use yii\helpers\ArrayHelper;

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/investigation/investigation.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/add_fields.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/ajax/save_questions.js',['position'=>\yii\web\View::POS_END]);
?>

<h2><?php echo 'Созданные опросы' ?></h2>

<a data-toggle="modal" data-target="#myModal" class="btn btn-success">Создать опрос</a><br><br>


<div class="row">
    <div class="col-md-12">
        <ul class="timeline">

            <?php  foreach ($q as $v) :?>
            <li>
                <div class="timeline-item">
                    <span class="time">
                        <i class="fa fa-clock-o"></i></span>

                    <h3 class="timeline-header">
                        <?=$v[0]->question?>
                    </h3>

                    <div class="timeline-body">
                        <?php foreach ($v[0]["answers"] as  $r) : ?>
                            <?= $r->answers ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    70%
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="timeline-footer">
                        <a class="btn btn-success btn-sm" href="">Редактировать</a>
                        <a class="btn btn-success btn-sm" href="/site/share?token=<?=$v[0]->token?>">Поделиться</a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>




<div class="added_question"></div>



<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="height: auto">
            <div class="media-container-column">
              <div class="modal-body text-center">
                <h2 class="mbr-bold mbr-white pb-3 mbr-fonts-style display-2 ">
                    Введите вопрос
                </h2>

                <input class="form-control question" data-id="1" placeholder="Брюнетки или блондинки?">

                <h3 class="mbr-section-subtitle mbr-light mbr-white mbr-fonts-style display-5">
                    Варианты ответа
                </h3>

                <div role="form" class="form-inline" style="max-width: 500px" >
                    <input type="hidden" name="count" value="1" />
                    <input autocomplete="off" class="form-control answers"  data-id = "1" type="text" placeholder="Type something" />
                    <input autocomplete="off" class="form-control answers"  data-id = "1" id="field1" name="prof1" type="text" placeholder="Type something" />
                    <button id="b1" class=" add-more form-control  btn-success" type="button">+</button>
                </div>
              </div>

            <!--                <div class="media-container-column  col-12 col-lg-3 col-md-4">-->
            <!--                    <div class="mbr-section-btn align-right py-4">-->
            <!--                        <a id="btn" class="btn btn-primary display-4 ask" >-->
            <!--                            Добавить вопрос-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                </div>-->

            </div>
            <div class="added_question"></div>



            <div class="form-group" align="center">
                <a href="/question/default/myinvestigations?create" class="btn btn-success done "  >Создать опрос</a>
            </div>
            <br>


        </div>



        </div>

    </div>
</div>


<!--<div class="form-group">-->
<!--    --><?php //$authAuthChoice = yii\authclient\widgets\AuthChoice::begin([
//        'baseAuthUrl' => ['oauth']
//    ]); ?>
<!--    <ul class="list-unstyle list-inline">-->
<!--        --><?php //foreach ($authAuthChoice->getClients() as $client): ?>
<!--            <li>--><?//= $authAuthChoice->clientLink($client) ?><!--</li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<!--    --><?php //yii\authclient\widgets\AuthChoice::end(); ?>
<!--</div>-->
<!---->
<!--<a href="/user/sign-in/signup">Или через почту</a>-->
<?php
//$series = [
//    [
//        'name' => 'Entity 1',
//        'data' => [
//            ['2018-10-04', 4.66],
//            ['2018-10-05', 5.0],
//        ],
//    ],
//    [
//        'name' => 'Entity 2',
//        'data' => [
//            ['2018-10-04', 3.88],
//            ['2018-10-05', 3.77],
//        ],
//    ],
//    [
//        'name' => 'Entity 3',
//        'data' => [
//            ['2018-10-04', 4.40],
//            ['2018-10-05', 5.0],
//        ],
//    ],
//    [
//        'name' => 'Entity 4',
//        'data' => [
//            ['2018-10-04', 4.5],
//            ['2018-10-05', 4.18],
//        ],
//    ],
//];
//
//echo \onmotion\apexcharts\ApexchartsWidget::widget([
//
//    'type' => 'bar', // default area
//    'height' => '400', // default 350
//    'width' => '500', // default 100%
//    'chartOptions' => [
//        'chart' => [
//            'toolbar' => [
//                'show' => true,
//                'autoSelected' => 'zoom'
//            ],
//        ],
//        'xaxis' => [
//            'type' => 'datetime',
//            // 'categories' => $categories,
//        ],
//        'plotOptions' => [
//            'bar' => [
//                'horizontal' => false,
//                'endingShape' => 'rounded'
//            ],
//        ],
//        'dataLabels' => [
//            'enabled' => false
//        ],
//        'stroke' => [
//            'show' => true,
//            'colors' => ['transparent']
//        ],
//        'legend' => [
//            'verticalAlign' => 'bottom',
//            'horizontalAlign' => 'left',
//        ],
//    ],
//    'series' => $series
//]);
?>

