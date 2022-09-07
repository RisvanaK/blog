$(document).ready(function() {
    $('.filter-items').click(function() {
        const value = $(this).attr('data-filter');
        if (value == 'all') {
            $('.post-box').show('1000');
        } else {
            $('.post-box').not('.' + value).hide('1000');
            $('.post-box').filter('.' + value).show('1000');
        }

    });

    $('.fliter-items').click(function() {
        $(this).addClass("active-filter").sibling().removeClass('active-filter');
    });
});

//header background change on scroll
let header = document.querySelector('header')
window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});

// login button 
// var form = document.getElementsByClassName("form");
// var button = document.getElementsByClassName("login");
// button.onclick = function() {
//     if (form.addClass == "open") {
//         form.className == "";
//     } else {
//         form.addClass = "open";
//     }
// };