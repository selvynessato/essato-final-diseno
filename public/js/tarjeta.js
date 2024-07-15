    $(document).ready(function(){
        $('.mix').hover(
            function() {
                $(this).find('.text-port').css({
                    'opacity': '1',
                    'transform': 'translateX(0) translateY(0)'
                });
                $(this).find('.sub-text').css({
                    'opacity': '1',
                    'transform': 'translateX(0) translateY(0)'
                });
            }, 
            function() {
                $(this).find('.text-port').css({
                    'opacity': '0.08',
                    'transform': 'translateX(0) translateY(20px)'
                });
                $(this).find('.sub-text').css({
                    'opacity': '0',
                    'transform': 'translateX(0) translateY(20px)'
                });
            }
        );
    });