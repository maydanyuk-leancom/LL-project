//Добавление инпута по кнопке +

    var next = 1;
    $(".add-more").click(function add(e){


        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="form-control answers" data-id = "'+ $(this).closest('.media-container-column').find('.question').attr('data-id')+'" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class=" btn-warning remove-me form-control" >-</button>';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function(e){
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length-1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });


    $(".ask").click(function(e) {

        $('.question:last').attr('data-id');


        var next = parseInt($('.question:last').attr('data-id')) +1;

        var html ='<div class="container">\n' +
            '<div class="row main justify-content-center ">\n' +
            '<div class="media-container-column  title col-12 col-lg-7 col-md-6">' +
            '<h2 class="mbr-bold mbr-white pb-3 mbr-fonts-style display-2 quest">Введите вопрос</h2>' +
            '<input class="form-control question" data-id = "'+next+'" placeholder="Брюнетки или блондинки?">' +
            '<h3 class="mbr-section-subtitle mbr-light mbr-white mbr-fonts-style display-5">Варианты ответа</h3>'+
            '<div role="form" class="form-inline" style="max-width: 500px" >' +
            '<input type="hidden" name="count" value="1" />' +
            '<input autocomplete="off" class="form-control answers" data-id = "'+next+'"  type="text" placeholder="Type something"/>' +
            '<input autocomplete="off" class="form-control answers" data-id = "'+next+'" id="field1" id="field' + next + '" name="field' + next + '" name="prof1" type="text" placeholder="Type something" data-items="8"/>' +
            '<button id="b1" class=" add-more form-control  btn-success" type="button" >+</button>' +
            '</div>' +
            '</div>' +
            '<div class="media-container-column  col-12 col-lg-3 col-md-4">' +
            '<div class="mbr-section-btn align-right py-4">' +
            '<a class="btn btn-secondary display-4 remove_ask " onclick="  $(this).closest(\'.container\').remove();">Удалить вопрос</a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        $(html).fadeIn('slow').insertBefore("div.added_question");

    });

    // function add(){
    //
    //
    //     var addto = "#field" + next;
    //     var addRemove = "#field" + (next);
    //     next = next + 1;
    //     var newIn = '<input autocomplete="off" class="form-control answers" data-id = "'+ $(this).closest('.media-container-column').find('.question').attr('data-id')+'" id="field' + next + '" name="field' + next + '" type="text">';
    //     var newInput = $(newIn);
    //     var removeBtn = '<button id="remove' + (next - 1) + '" class=" btn-warning remove-me form-control" >-</button>';
    //     var removeButton = $(removeBtn);
    //     console.log(addto);
    //     $(addto).after($(this).closest('.answers'));
    //     $(addRemove).after(removeButton);
    //     $("#field" + next).attr('data-source',$(addto).attr('data-source'));
    //     $("#count").val(next);
    //
    //     $('.remove-me').click(function(e){
    //         e.preventDefault();
    //         var fieldNum = this.id.charAt(this.id.length-1);
    //         var fieldID = "#field" + fieldNum;
    //         $(this).remove();
    //         $(fieldID).remove();
    //     });
    // }


// $(".answer").click(function(e) {
//
//     $('#myModal').modal('show');
// });


