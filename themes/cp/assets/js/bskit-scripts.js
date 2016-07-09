/* -------- Header 3 Nav -------- */
function transitionTo($link) {
    var $href = $link.attr('href');
    var $anchor = $('#'+$href).offset();
    $('body').animate({ scrollTop: $anchor.top });
    return false;
}

$(window).load(function () {
    $('.nav-slide-btn').click(function () {
        $('.pull').slideToggle();
    });

    $('ul.top-nav').find('a').click(function(){
        transitionTo($(this));
        return false;
    });

    $('#more-features').click(function() {
        transitionTo($(this));
        return false;
    });
});

document.querySelector("#nav-toggle").addEventListener("click", function () {
    this.classList.toggle("active");
});
