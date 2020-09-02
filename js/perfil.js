$(document).ready(function() {


    $('.conting').hide();
    $('.contsol').hide();
    $('.conthis').hide();
    $('.contped').hide();
    $('.contpro').hide();


    $('.ing').on('click', function() {
        $('.conting').slideToggle();
        $('.contsol').hide();
        $('.conthis').hide();
        $('.contped').hide();
        $('.contpro').hide();
    });

    $('.sol').on('click', function() {
        $('.contsol').slideToggle();
        $('.conting').hide();
        $('.conthis').hide();
        $('.contped').hide();
        $('.contpro').hide();
    });

    $('.his').on('click', function() {
        $('.conthis').slideToggle();
        $('.conting').hide();
        $('.contsol').hide();
        $('.contped').hide();
        $('.contpro').hide();
    });

    $('.ped').on('click', function() {
        $('.contped').slideToggle();
        $('.conting').hide();
        $('.contsol').hide();
        $('.conthis').hide();
        $('.contpro').hide();
    });

    $('.pro').on('click', function() {
        $('.contpro').slideToggle();
        $('.conting').hide();
        $('.contsol').hide();
        $('.conthis').hide();
        $('.contped').hide();
    });



});