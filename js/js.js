var table = $('#table');
var str = "";

$('.btn').on('click', function (e) {
    table.empty();
    $.ajax({
        url: 'js/some.php',         /* Куда отправить запрос */
        method: 'post',             /* Метод запроса (post или get) */
        data: { action: 1 },     /* Данные передаваемые в массиве */
        success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */

            table.append(data);
        }
    });
})
