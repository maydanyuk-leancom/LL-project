<?php

/* @var $this yii\web\View */

$this->title = 'Опрос';
?>


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

                        <div class="navigation">
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>


                            <ul class="nav" >
                                <li class="active"><a href="#poll1" data-toggle="tab">&bull;</a></li>
                                <li><a href="#poll2" data-toggle="tab">&bull;</a></li>
                                <li><a href="#poll3" data-toggle="tab">&bull;</a></li>
                            </ul>
                        </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="poll1">
                                    <h1>Кому на руси жить хорошо?</h1>
                                    <div class="col-sm-4 col-md-4">
                                        <button type="submit" class="btn btn-default">Властям</button>

                                        <div class="progress progress-bar-vertical">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
                                                <div class="progress-text">
                                                    20%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <button type="submit" class="btn btn-default">Дуракам</button>

                                        <div class="progress progress-bar-vertical">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
                                            </div>
                                            <div class="progress-text">
                                                20%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <button type="submit" class="btn btn-default">Мне</button>

                                        <div class="progress progress-bar-vertical">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="height: 65%">
                                            </div>
                                            <div class="progress-text">
                                                60%
                                            </div>
                                        </div>
                                    </div>
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





