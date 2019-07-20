//Добавление инпута по кнопке +

    var next = 1;
    $(".add-more").click(function(e){

        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="form-control input " id="field' + next + '" name="field' + next + '" type="text">';
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
        $(".question").clone().appendTo("div.added_question");
        $(".ask:last").html('Удалить вопрос').addClass('remove_ask');
    });

    $(".remove_ask").click(function(e) {
        $(this).closest('.question').remove();
    });

$(".answer").click(function(e) {

    $('#myModal').modal('show');
});

// $(function () {
//     var all_classes = "";
//     var timer = undefined;
//     $.each($('li', '.social-class'), function (index, element) {
//         all_classes += " btn-" + $(element).data("code");
//     });
//     $('li', '.social-class').mouseenter(function () {
//         var icon_name = $(this).data("code");
//         if ($(this).data("icon")) {
//             icon_name = $(this).data("icon");
//         }
//         var icon = "<i class='fa fa-" + icon_name + "'></i>";
//         $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
//         $('.btn-social-icon', '.social-sizes').html(icon);
//         $('.btn', '.social-sizes').removeClass(all_classes);
//         $('.btn', '.social-sizes').addClass("btn-" + $(this).data('code'));
//     });
//     $($('li', '.social-class')[Math.floor($('li', '.social-class').length * Math.random())]).mouseenter();
// });

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}

