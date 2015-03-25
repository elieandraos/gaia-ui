var app = function() {

    var init = function() {

        tooltips();
        toggleMenuLeft();
        menu();
        togglePanel();
        closePanel();
        datepickers();
        slugify();
    };

    var tooltips = function() {
        $('#toggle-left').tooltip();
    };

    var togglePanel = function() {
        $('.actions > .fa-chevron-down').click(function() {
            $(this).parent().parent().next().slideToggle('fast');
            $(this).toggleClass('fa-chevron-down fa-chevron-up');
        });
    };

    var toggleMenuLeft = function() {
        $('#toggle-left').bind('click', function(e) {
            if (!$('.sidebarRight').hasClass('.sidebar-toggle-right')) {
                $('.sidebarRight').removeClass('sidebar-toggle-right');
                $('.main-content-wrapper').removeClass('main-content-toggle-right');
            }
            $('.sidebar').toggleClass('sidebar-toggle');
            $('.main-content-wrapper').toggleClass('main-content-toggle-left');
            e.stopPropagation();
        });
    };

    var closePanel = function() {
        $('.actions > .fa-times').click(function() {
            $(this).parent().parent().parent().fadeOut();
        });

    }

    var menu = function() {
        $("#leftside-navigation .sub-menu > a").click(function(e) {
            $("#leftside-navigation ul ul").slideUp();
            if (!$(this).next().is(":visible")) {
                $(this).next().slideDown();
            }
              e.stopPropagation();
        });
    };
    

    var datepickers = function(){
        $('.input-group.date').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            autoclose: true,
            todayHighlight: true,
        });
    };

    var slugify = function()
    {
        $('.txt-slug').slugify('.slug-target');
    }
    //End functions


    //return functions
    return {
        init: init
    };
}();

//Load global functions
$(document).ready(function() {
    app.init();

});
