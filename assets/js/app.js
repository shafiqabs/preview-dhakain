var App = function () {

    // IE mode
    var isIE9 = false;


    function handleIEFixes() {
        //fix html5 placeholder attribute for ie7 & ie8
        if (isIE9 < 9) { // ie7&ie8
            jQuery('input[placeholder], textarea[placeholder]').each(function () {
                var input = jQuery(this);

                jQuery(input).val(input.attr('placeholder'));

                jQuery(input).focus(function () {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                jQuery(input).blur(function () {
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    }

    function flexiSlider(){

        jQuery('.flexslider').flexslider({
            animation: "fade",
            start: function(slider){
                jQuery('body').removeClass('loading');
            }
        });

    }

    function handleBootstrap() {

        jQuery('.carousel').carousel({
            interval: 15000,
            pause: 'hover'
        });



        jQuery('.greatDeals').innerfade({
            speed: 'slow',
            timeout: 4000,
            type: 'sequence',
            containerheight: '100px'
        });

        jQuery('.tooltips').tooltip();
        jQuery('.popovers').popover();
    }

    function inputModify(){

        jQuery("input").rlChecked();
        jQuery('select').CustomSelect({visRows:5, modifier: 'mod'});
        jQuery('#demo-select_2').CustomSelect({visRows:10, search:true, modifier: 'mod'});
        jQuery('.calender').datetimepicker({
            timepicker:false,
            format:'d/m/Y',
            formatDate:'d/m/Y'

        });

    }

    function accordionSlider(){

        $('.intro ul li').filter(':nth-child(n+4)').addClass('hide');

        $('.intro ul li').on('click', function() {
            if ( !$(this).hasClass('selected')) {
                $('.intro ul li').removeClass('selected');
                $(this)
                    .addClass('selected')
                    .next()
                    .slideDown(200)
                    .siblings('.intro ul li ul')
                    .slideUp(200);
            }
        });

    }


    return {


        init: function () {
            flexiSlider();
            handleBootstrap();
            handleIEFixes();
            handleBootstrap();
            inputModify();
            accordionSlider();
           },

        initBxSlider: function () {

            $('.bxslider').show();
            $('.bxslider').bxSlider({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 222,
                slideMargin: 10
            });

            $('.bxslider1').show();
            $('.bxslider1').bxSlider({
                minSlides: 6,
                maxSlides: 6,
                slideWidth: 100,
                slideHeight: 100,
                slideMargin: 2
            });
        }

    };
}();

jQuery(document).ready(function() {
    App.init();
    App.initBxSlider();

});
