
(function () {
    $("div.lazy").lazyload({
        effect: "fadeIn"
    });
    $("img.lazy").lazyload({
        effect: "fadeIn"
    });
    $("#smMenu").slideUp(10);
    $("#secondMenuTrigger").click(function () {
        $("#smMenu").slideToggle();
    });
})();