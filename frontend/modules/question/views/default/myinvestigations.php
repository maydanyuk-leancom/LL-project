<?php


use yii\authclient\widgets\AuthChoice;
use yii\helpers\ArrayHelper;
use miloschuman\highcharts\Highcharts;


$this->registerJsFile(Yii::$app->request->baseUrl.'/js/investigation/investigation.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/add_fields.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/ajax/save_questions.js',['position'=>\yii\web\View::POS_END]);


?>

<h2><?php echo 'Созданные опросы' ?></h2>

<a href="new" class="btn btn-success">Создать опрос</a><br><br>

<div class="row">
    <div class="col-md-12">
        <ul class="timeline">

            <?php  foreach ($q as $k =>$v) :      ?>
                <li>
                    <div class="timeline-item">
                    <span class="time">
                        <i class="fa fa-clock-o"></i></span>


                        <?php


                        foreach ($v as $n => $r) {

                            $a[$n] = [$r["answers"], $s[$k][$n]];

                        }


                        if(!empty($s[$k])){

                            echo Highcharts::widget([
                                'options' => [
                                    'title' => ['text' => $v[0]["question"]],
                                    'chart' => [
                                        'type' => 'pie'
                                    ],

                                    'plotOptions' => [
                                        'pie' => [
                                            'allowPointSelect' => true,
                                            'cursor' => 'pointer',
                                        ]
                                    ],

                                    'yAxis' => [
                                        'title' => ['text' => 'Fruit eaten']
                                    ],

                                    'series' => [[
                                        'name' => 'Итого',
                                        'data' =>  $a
                                    ]]

                                ]
                            ]);
                        }else{?>

                            <h4><?=  $v[0]["question"] ?></h4>
                            <h5> В ожидании реультатов <span class="glyphicon glyphicon-globe"></span></h5>

                        <?php }?>


                        <div class="timeline-footer">
                            <a class="btn btn-success btn-sm" href="">Редактировать</a>
                            <a class="btn btn-success btn-sm" href="/site/share?token=<?=$v[0]["token"]?>">Поделиться</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
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

