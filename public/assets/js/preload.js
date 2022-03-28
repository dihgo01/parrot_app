$(window).on('beforeunload', function () {

    $('#preloader').show();

});

$(window).ready(function () {

    $('#preloader').show();
    setTimeout(function () { $('#preloader').hide(); }, 3000);

});
