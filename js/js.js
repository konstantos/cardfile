
var req;
$.ajax({
    url: 'sql.php',         /* Куда отправить запрос */
    method: 'post',             /* Метод запроса (post или get) */
    data: { text: 'Дай мне' },     /* Данные передаваемые в массиве */
    success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
        req = data;
        console.log(req)
    }
});