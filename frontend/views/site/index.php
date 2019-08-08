<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;

$this->registerCssFile('/css/carousel.css');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/sliders/slider.function.js',['position'=>\yii\web\View::POS_HEAD]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/sliders/gallery1.js',['position'=>\yii\web\View::POS_END]);

?>
<div class="site-index">

    <?php echo \common\widgets\DbCarousel::widget([
        'key' => 'index',
        'assetManager' => Yii::$app->getAssetManager(),
        'options' => [
            'class' => 'slide', // enables slide effect
        ],
    ]) ?>

    <div class="row text-center" id="bstext">
        <div class="tab-content">
            <div id="step1" class="active tab-pane">
                <div class="block_step1 col-lg-3 col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Исследование</h3>
                        <p>Процесс выработки новых науч. знаний, один из видов познават. деятельности.
                            И характеризуется объективностью, воспроизводимостью, доказательностью, точностью.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="block_step1 col-lg-3 col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Фидбэк</h3>
                        <p>Анкета, мини-опросник после проведения различных образовательных мероприятий.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="block_step1 col-lg-3 col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>А/В-тестировани</h3>
                        <p> Метод маркетингового исследования, суть которого заключается в том, что контрольная группа
                            элементов сравнивается с набором тестовых групп, в которых один или несколько показателей
                            были изменены, для того, чтобы выяснить, какие из изменений улучшают целевой показатель.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="block_step1 col-lg-3 col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Тесты</h3>
                        <p> Способ изучения глубинных процессов деятельности системы,
                            посредством помещения системы в разные ситуации и отслеживание
                            доступных наблюдению изменений в ней.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
            </div>
            <div id="step2" class="tab-pane fade">
                <div class="block_step2 col-lg-4 col-md-4 col-md-offset-2">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Анонимный</h3>
                        <p> Ответы не видны после прохождения.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="block_step2 col-lg-4 col-md-4 col-md-offset-right-2">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Открытый</h3>
                        <p> Ответы видны после прохождения.</p>
                        <p class="block_btn"><a class="btn btn-default center-block" href="#step2" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!---->
<!--    <div class="jumbotron">-->
<!--               --><?php //echo common\widgets\DbMenu::widget([
//            'key'=>'frontend-index',
//            'options'=>[
//                'tag'=>'p'
//            ]
//        ]) ?>
<!---->
<!--    </div>-->

    <div class="body-content col-lg-12">



        <h2 class="text-center"><a href="">#Новые</a> / <a href="">#Популярные</a> опросы</h2>

        <div class="wrap slide-block">

            <div id="gallery" class="gallery gallery1">
                <div class="slider">
                    <div class="stage">
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <div class="nav-ctrl">
                        <span class="prev" data-shift="prev">&larr; Назад</span>
                        <span class="next" data-shift="next">Вперед &rarr;</span>
                    </div>
                    <ul class="dots-ctrl"></ul>
                </div>
            </div>
        </div>

        <h2 class="text-center"><a href="">#Новые</a> / <a href="">#Популярные</a> рейтинги</h2>

        <div class="wrap slide-block">

            <div id="gallery_2" class="gallery gallery1">
                <div class="slider text-center">
                    <div class="stage">
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <div class="nav-ctrl">
                        <span class="prev" data-shift="prev">&larr; Назад</span>
                        <span class="next" data-shift="next">Вперед &rarr;</span>
                    </div>
                    <ul class="dots-ctrl"></ul>
                </div>
            </div>
        </div>

        <h2 class="text-center"><a href="">#Новое</a> / <a href="">#Популярное</a> блоги</h2>

        <div class="row text-center main-blog">
            <div class="col-lg-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn btn-default" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn btn-default" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>
            <p><a class="btn btn-default new_btn" href="#"><span class="glyphicon glyphicon-chevron-down"></span> Показать еще</a></p>
        </div>

    </div>

</div>
