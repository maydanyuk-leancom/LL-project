
$(".done").click(function(e) {

    var questions = [];
    var answers = [];
    var answers_id =[];

    $("input.question").each(function () {
        questions.push($(this).val());
    });

    $("input.answers").each(function () {
        answers.push($(this).val());
        answers_id.push($(this).attr('data-id'));
    });

    $.ajax({

        url: '/question/default/savequestions',
        type: 'POST',
        data: {
            questions: questions,
            answers: answers,
            answers_id:answers_id
        },
        dataType: 'json',
        success: function (response) {
            console.log('question_save:');
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
});