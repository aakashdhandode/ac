$(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").addClass("active");
    });

    $("#sidebarCollapseX").on("click", function () {
        $("#sidebar").removeClass("active");
    });

    $("#sidebarCollapse").on("click", function () {
        if ($("#sidebar").hasClass("active")) {
            $(".overlay").addClass("visible");
            console.log("it's working!");
        }
    });

    $("#sidebarCollapseX").on("click", function () {
        $(".overlay").removeClass("visible");
    });
});

//select city pop up form

setTimeout(function () {
    $('#selectCity').modal();
}, 1000);



// multistep  wizard

    // ------------step-wizard-------------
    $(document).ready(function () {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function () {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
// end multi steps wizard





