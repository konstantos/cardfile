
var table = $('#table');
// var str = ` <div class="table__thead">
//                 <div class="table__td">Name</div>
//                 <div class="table__td">Birthday</div>
//                 <div class="table__td">Job</div>
//             </div>
//             <div class="table__body" id="table-body">
//                 <div class="table__tr">
//                     <div class="table__td">Jhon Smith</div>
//                     <div class="table__td">New York</div>
//                     <div class="table__td">01.02.1996</div>
//                 </div>
//                 <div class="table__tr">
//                     <div class="table__td">Jhon Smith</div>
//                     <div class="table__td">New York</div>
//                     <div class="table__td">01.02.1996</div>
//                 </div>
//             </div>`;
var str = "";

var req;
$.ajax({
    url: 'js/some.php',         /* Куда отправить запрос */
    method: 'post',             /* Метод запроса (post или get) */
    data: { action: 1 },     /* Данные передаваемые в массиве */
    success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */

        table.append(data);
        // $('.php').append(data);
    }
});