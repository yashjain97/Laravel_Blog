(function($) {

    'use strict';

    $(document).ready(function() {
        // Initializes search overlay plugin.
        // Replace onSearchSubmit() and onKeyEnter() with
        // your logic to perform a search and display results
        $(".list-view-wrapper").scrollbar();

    });


    $('.panel-collapse label').on('click', function(e){
        e.stopPropagation();
    })

    // auto init for parallax sets window as scrollElement.
    // set .page-container as scrollElement for horizontal layouts.
    $('.jumbotron').parallax({
      scrollElement: '.page-container'
    })

    $('.page-container').on('scroll', function() {
        $('.jumbotron').parallax('animate');
    });

    $('#btnStickUpSizeToggler').click(function() {
        var modalElem = $('#myModal');
        if (size == "mini") {
            $('#modalStickUpSmall').modal('show')
        } else {
            $('#myModal').modal('show')
            if (size == "default") {
                modalElem.children('.modal-dialog').removeClass('modal-lg');
            } else if (size == "full") {
                modalElem.children('.modal-dialog').addClass('modal-lg');
            }
        }
    });

})(window.jQuery);
