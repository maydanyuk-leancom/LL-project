<?php

/* @var $this yii\web\View */

$this->title = 'Редактирование канала';
?>


<div class="site-index">

    <div class="body-content">



            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center img_ch">
                        <img src="https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg" width="100%" alt="avatar">
                        <h6>Загрузить другую обложку...</h6>

                        <input type="file" class="form-control">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info_ch">


                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">Название:</label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">Рубрика: </label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <div class="ui-select">
                                    <select id="user_time_zone" class="form-control">
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                        <option value="#">Название рубрики</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">О канале:</label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <h3>Контакты</h3>
                        <hr>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">Телефон:</label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">E-mail:</label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="web@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label">Факс:</label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>

                        <h3>Соц. сети</h3>
                        <hr>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label"><img src="/img/soc_ico/f.png"></label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="укажите ссылку">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label"><img src="/img/soc_ico/od.png"></label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="укажите ссылку">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label"><img src="/img/soc_ico/tw.png"></label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="укажите ссылку">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label"><img src="/img/soc_ico/vk.png"></label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="укажите ссылку">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-md-2 col-sm-2 control-label"><img src="/img/soc_ico/y.png"></label>
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <input class="form-control" type="text" value="укажите ссылку">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="button" class="btn new_btn" value="Сохранить изменения">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Отмена">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <hr>



    </div>



</div>
