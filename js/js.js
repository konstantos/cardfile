
var req;
$.ajax({
    url: 'js/sql.php',         /* Куда отправить запрос */
    method: 'post',             /* Метод запроса (post или get) */
    data: { action: 1, text: 'Дай мне' },     /* Данные передаваемые в массиве */
    success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
        console.log(data);
        $('.php').append(data);
    }
});