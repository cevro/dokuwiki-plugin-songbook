/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function () {
    var $ = jQuery;
    $('song text').before($('<button></button>').text('toggle').click(function () {
        var $text = $(this).parent().find('text');
        if ($text.is(':visible')) {
            $text.css({display: 'none'});
        } else {
            $text.css({display: 'block'});
        }


    }));

    $('chord').on('mouseover', function (e) {
        var chord = this.innerHTML;
        
    });
});


