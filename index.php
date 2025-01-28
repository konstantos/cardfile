<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1">
    <title>Cardfile</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/common.css">

</head>

<body>
    <div class="body__wrapper">
        <div class="body__content">
            <header class="header">
                <div class="container header__container">
                    <h1 class="header__title">Card File</h1>
                </div>
            </header>
            <main class="main">
                <div class="php">

                </div>
                <div class="container">
                    <button class="btn" type="submit">download table</button>
                    <div class="content content__table">
                        <div class="table table__person" id="table">
                            <!-- <div class="table__thead">
                                <div class="table__td">Name</div>
                                <div class="table__td">Birthday</div>
                                <div class="table__td">Job</div>
                            </div>
                            <div class="table__body" id="table-body">
                                <div class="table__tr">
                                    <div class="table__td">Jhon Smith</div>
                                    <div class="table__td">New York</div>
                                    <div class="table__td">01.02.1996</div>
                                </div>
                                <div class="table__tr">
                                    <div class="table__td">Jhon Smith</div>
                                    <div class="table__td">New York</div>
                                    <div class="table__td">01.02.1996</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer class="footer">
            <div class="container footer__container">
                <h3 class="footer__text">Card File. This is an educational project by Konstantin Basalyuk. ©2025</h3>
            </div>
        </footer>
    </div>

    <div class="intopModal__wrap">
        <div class="thanks-modal">
            <div class="thanks-modal__wrap">
                <h3 class="title title__section thanks-modal__title">Заявка успешно отправлена!</h3>
                <p class="thanks-modal__text">Спасибо за заявку, мы свяжемся с вами в близжайшее время</p>
                <button class="btn btn-default btn__blue-white-blue thanks-modal-btn arcticmodal-close"
                    type="button">Закрыть</button>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/jquery.arcticmodal.min.js"></script>
    <script src="js/js.js"></script>
</body>

</html>