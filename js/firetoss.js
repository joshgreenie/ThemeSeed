////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////
// you can change the settings in \firetoss_seed\js\jquery.meanmenu.js

function removeMq() {
    var body = $('body');
    body.removeClass (function (index, className) {
        return (className.match (/(^|\s)mq-\S+/g) || []).join(' ');
    });
}

function checkMq() {
    var body = $('body');
    var queryLgDesktop = Modernizr.mq('(min-width: 1500px)');
    var queryDesktop = Modernizr.mq('(max-width: 1500px) and (min-width: 1200px)');
    var querySmDesktop = Modernizr.mq('(max-width: 1200px) and (min-width: 980px)');
    var queryTablet = Modernizr.mq('(max-width: 980px) and (min-width: 768px)');
    var querySmTablet = Modernizr.mq('(max-width: 768px) and (min-width: 500px)');
    var queryPhone = Modernizr.mq('(max-width: 500px)');

    removeMq();

    if (queryLgDesktop) {
        const addedClass  = 'mq-large-desktop';
        body.addClass(addedClass);
    } else if (queryDesktop) {
        const addedClass  = 'mq-desktop';
        body.addClass(addedClass);
    } else if (querySmDesktop) {
        const addedClass  = 'mq-small-desktop';
        body.addClass(addedClass);
    } else if (queryTablet) {
        const addedClass  = 'mq-tablet';
        body.addClass(addedClass);
    } else if (querySmTablet) {
        const addedClass  = 'mq-small-tablet';
        body.addClass(addedClass);
    } else if (queryPhone) {
        const addedClass  = 'mq-phone';
        body.addClass(addedClass);
    } else {
        const addedClass  = 'mq-undefined';
        body.addClass(addedClass);
    }
}


(function ($) {
    $(document).ready(function () {


////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////
        $('header nav').meanmenu();


        checkMq();

        $(window).on('resize', function(){
            checkMq();
        });

});
})(jQuery);




