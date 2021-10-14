$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result', 'form-order', 'chek.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            //result = $.parseJSON(response);
            $('#result').html(response);
            $('#btn').attr("disabled", true);
            $('.form-select-sm').attr("disabled", true);
        },
        error: function(response) { // Данные не отправлены
            $('#result').html('Ошибка. Данные не отправлены.');
        }
    });
}