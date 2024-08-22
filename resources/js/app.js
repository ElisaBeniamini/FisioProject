import './bootstrap';
import 'bootstrap';

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.style.transform = 'scale(1.05)';
    });

    card.addEventListener('mouseout', () => {
        card.style.transform = 'scale(1)';
    });
});




//    "use strict";
//
//    // Spinner
//    var spinner = function () {
//        setTimeout(function () {
//            if ($('#spinner').length > 0) {
//                $('#spinner').removeClass('show');
//            }
//        }, 1);
//    };
//    spinner(0);
//});