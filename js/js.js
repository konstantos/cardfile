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
            modal();
        }
    });
})

// ---------- Modal  ----------



function modal() {

    function windowHeight() {
        return parseFloat(window.innerHeight) || parseFloat($(window).height());
    }

    let arcticmodal_settings = {
        overlay: {
            css: { opacity: 0.3 }
        },
        beforeOpen(data, modal) {
            let modalParent = $(modal).parent();
            let maxHg = windowHeight() - modalParent.padding("top") - modalParent.padding("bottom");
            $(modal).css("max-height", maxHg);

            const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + "px";
            const lockPadding = document.querySelectorAll(".lock-padding");
            lockPadding.forEach((el) => el.style.paddingRight = lockPaddingValue);
        },
        afterOpen() {
            document.querySelector(".arcticmodal-container .intopModal").style.transform = "translateX(0)";
        },
        beforeClose(data, modal) {
            document.querySelector(".arcticmodal-container .intopModal").style.transform = "translateX(-105vw)";
        },
        afterClose() {
            const lockPadding = document.querySelectorAll(".lock-padding");
            lockPadding.forEach((el) => el.style.paddingRight = 0);
            $(".intopModal__content input").removeClass("input-error");
        }
    };

    window.alert = function (content) {
        $(".intopModal-alert .modal__inner").html(content).parents(".intopModal-alert").arcticmodal(arcticmodal_settings);
    }

    $(window).resize(function () {
        arcticmodal_settings.beforeOpen(null, ".intopModal:visible");
    });

    $("[data-modal]").on("click", function (event) {

        event.preventDefault();
        console.log('click');

        let $modal = $(".intopModal-" + $(this).data("modal"));
        if ($modal.length > 0) {
            if ($(".page__body").hasClass("arcticmodal-wrap-active")) {
                $((".arcticmodal-container .intopModal")).arcticmodal('close');
                setTimeout(() => {
                    $modal.arcticmodal(arcticmodal_settings);
                }, 100);
            } else {
                $modal.arcticmodal(arcticmodal_settings);
            }
        }
    });
};

