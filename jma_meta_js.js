jQuery(document).ready(function($) {

    function caption_height() {
        $caption = $('.nivo-caption');
        if (($('.copyright').css('margin-bottom') == '7px')) {
            var maxHeight = 0;
            $caption.each(function() {
                maxHeight = $(this).outerHeight() > maxHeight ? $(this).outerHeight() : maxHeight;
            });
            $caption.css('height', (maxHeight + 20) + 'px');
        } else {
            $caption.css('height', '');
        }
    }

    function handleCanvas(canvas) {
        //do stuff here
        caption_height();
    }

    // set up the mutation metaObserver
    var metaObserver = new MutationObserver(function(mutations, me) {
        // `mutations` is an array of mutations that occurred
        // `me` is the MutationObserver instance
        var canvas = $('.nivo-caption').length;
        if (canvas) {
            handleCanvas(canvas);
            me.disconnect(); // stop observing
            return;
        }
    });

    // start observing
    metaObserver.observe(document, {
        childList: true,
        subtree: true
    });

    $(window).resize(function() {
        caption_height();
    });
});