<?php

use trntv\filekit\widget\Upload;
use yii\widgets\ActiveForm;

$this->registerCssFile('/css/surv.css');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/add_fields.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/ajax/save_questions.js',['position'=>\yii\web\View::POS_END]);
?>
<script>
    $(document).ready(function() {
        document.getElementById("title").innerHTML = localStorage.getItem("title");
        $('li').on('click',function () {
            $('#myModal').modal('show');
        })
    });

</script>
<style>
    .upload-kit{clear: both;display: inline-block;}
</style>


    <div class="body-content">

        <div  class="col-md-1">
            <div class="form-group" align="left">
            <a href="#step1" data-toggle="tab">    <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-log-in"></span></button></a>

            </div>

            <div class="form-group" align="left">
                <a href="#step2" data-toggle="tab">  <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-file"></span></button></a>

            </div>

            <div class="form-group" align="left">
                <button type="button" class="btn btn-secondary btn-lg"  ><span class="glyphicon glyphicon-plus-sign"></span></button>

            </div>

            <div class="form-group" align="left">
                <button type="button" class="btn btn-secondary btn-lg"  ><span class="glyphicon glyphicon-log-out"></span></button>

            </div>


        </div>





<div class="tab-content" >
    <div class="active tab-pane" id="step1">
        <div  class="row text-center  col-md-12 container-fluid " >
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->field($model->getModel('profile'), 'picture')->widget(
                Upload::class,
                [
                    'url' => ['question-image-upload'],

                ]
            )?>
            <?php ActiveForm::end(); ?>
            <h3 id="title"></h3>
            <br>
            <p><h4><div contenteditable="true"> Здравствуйте? </div></h4></p>
            <p><h4><div contenteditable="true">потратьте, пожалуйста. несколько минут своего времени на заполнение следующей анкеты. </div></h4></p>
            <div class="form-group" align="center">
                <br>
                <button type="button" class="btn btn-primary btn-lg"  ><div contenteditable="true">НАЧАТЬ ОПРОС СЕЙЧАС</div></button>
            </div>
            </div>
        </div>


    <div id="step2" class="tab-pane fade">

    <div class="row text-center col-md-12 ">


        <h1><a href="#step3" data-toggle="tab" ><span class="glyphicon glyphicon-plus-sign lg"></span></a></h1>

        <body style="" class="helvetica cyrillic">


        <div class="question-bubble-container" data-index="0" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2" style="visibility: visible; height: 264px;"><div class="question-bubble" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0" style="visibility: visible; height: 264px; opacity: 1;"><div class="question-bubble-border" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0">
                    <div class="question-bubble-in" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0">
                        <div class="elements-list" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0">
                            <ul data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0">
                                <li class="inElement element-sc" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one" >
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one.1">Одиночный выбор</a>
                                </li>
                                <li class="inElement element-mc" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-more">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-more.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-more.1">Множественный выбор</a>
                                </li>
                                <li class="inElement element-txt" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text.1">Текстовый ответ</a>
                                </li>
                                <li class="inElement element-sc-img" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one-pictures">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one-pictures.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-multiple-choice-one-pictures.1">Выбор изображения</a>
                                </li>
                                <li class="inElement element-star" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-rating">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-rating.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-rating.1">Звездный рейтинг</a>
                                </li>
                                <li class="inElement element-diff" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-semantic">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-semantic.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-semantic.1">Семантический дифференциал</a>
                                </li>
                                <li class="inElement element-nps" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-net-promoter">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-net-promoter.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-net-promoter.1">Net Promoter Score</a>
                                </li><li class="inElement element-rating" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-divide">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-divide.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-divide.1">Распределительная шкала</a>
                                </li>
                                <li class="inElement element-order" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-importance">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-importance.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-importance.1">Ранжирование</a>
                                </li>
                                <li class="inElement element-matrix-sc" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-one">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-one.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-one.1">Одновариантная матрица</a>
                                </li>
                                <li class="inElement element-matrix-mc" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-more">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-more.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-matrix-select-more.1">Многовариантная матрица</a>
                                </li>
                                <li class="inElement element-text" data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text-block">
                                    <i data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text-block.0"></i>
                                    <a data-reactid=".0.1.1.1.0.$5882053=21-0-0.0.$page-0-0.0.0.0.$addbarEmpty.2.0.0.0.0.0.$list-text-block.1">Добавить текст</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    <div id="step3" class="tab-pane fade col-md-12 ">




    </div>


    </div>

        <div id="myModal" class="modal fade new_modal" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="height: auto" role="form">

                    <div class="media-container-column">
                        <div class="modal-body text-center">

                            <input class="form-control question" id="mainTitle" data-id="1" style="height: 47px;" placeholder="Напишите свой вопрос здесь...">

                            <h5 class="mbr-section-subtitle mbr-light mbr-white mbr-fonts-style display-5">
                                Варианты ответа
                            </h5>

                            <div class="single-choice">

                            <ul class="sortable ui-sortable">
                                <li>
                                    <a class="move icon-move"></a>
                                    <div class="textareaInputContainer textareaOnly">
                                        <textarea autocomplete="off" maxlength="500" class="input answers"  data-id = "1" name="prof0" type="text" placeholder="Ответ" rows="1" style="height: 34px;"></textarea>
                                    </div>
<!--                                    <div class="remove"><i></i></div>-->
                                </li>

                                <li>
                                    <a class="move icon-move"></a>
                                    <div class="textareaInputContainer textareaOnly">
                                        <textarea autocomplete="off" maxlength="500" class="input answers"  data-id = "1" name="prof1" type="text" placeholder="Ответ" rows="1" style="height: 34px;"></textarea>
                                    </div>
<!--                                    <div class="remove"><i></i></div>-->
                                </li>

                            </ul>
                            </div>

                            <div class="add">
                                <a class="add-default add-primary add-more"><span>Добавить ответ</span></a>
                                <a class="add-default add-default-text"><span >Добавить ответ - "Другой"</span></a>
                            </div>

                        </div>

                    </div>

                    <div class="footer">
                        <div class="submitArea">
                            <a class="btn btn-success done">Создать опрос</a>
                        </div>
                    </div>

                </div>



            </div>

        </div>


