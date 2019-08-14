<?php

$this->registerCssFile('/css/surv.css');
?>

<div id="menu1">
    <div class="in">
        <h1>Каким способом Вы хотите создать опрос?</h1>
        <ul>
            <li data-menuanchor="template"  style="top: 0px; opacity: 1;" onclick="$('.blank').show('slow')">
                <a href="#" style="height: 158px;" >
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <h2 style="height: 26px;">Шаблон опроса</h2>
                    <p><em>Выберите из более чем 100 шаблонов.</em></p>
                </a>
            </li>
            <li data-menuanchor="blank"  style="top: 0px; opacity: 1;" onclick="$('.blank').show('slow')">
                <a href="#" style="height: 158px;" >
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <h2 style="height: 26px;">Новый опрос</h2>
                    <p><em>Создайте новый опрос с нуля со своими вопросами.</em></p>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="wrap section blank fp-section fp-table" align="center" data-anchod="blank" data-anchor="blank"  style="display: none">
    <div class="fp-tableCell" >
        <div class="in">

            <h3>Дайте своему опросу название</h3><br>
            <div class="create">
                <div class="surveys">
                    <p class="title"><input type="text"  id="title" class="form-control" style="max-width: 70%" placeholder="Название опроса..." onkeyup="if($(this).val()){$('.continue').show('slow')}else{$('.continue').hide()}"></p>
                </div>
                <div class="continue" style="display: none">
                   <a href="step1" class="btn btn-primary" onclick="localStorage.setItem('title',$('#title').val());">Продолжить &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-forward" aria-hidden="true"  ></i></a>
                </div>
            </div>
        </div>
    </div>
</div>





