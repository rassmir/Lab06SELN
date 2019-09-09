$(document).ready(function() {
    if ($('.card-header.card-chart').length != 0) {
        md.initDashboardPageCharts();
    }

    if ($('#websiteViewsChart').length != 0) {
        md.initDocumentationCharts();
    }

    if ($('.datetimepicker').length != 0) {
        md.initFormExtendedDatetimepickers();
    }
    if ($('#fullCalendar').length != 0) {
        md.initFullCalendar();
    }

    if ($('.slider').length != 0) {
        md.initSliders();
    }

    //  Activate the tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Activate Popovers
    $('[data-toggle="popover"]').popover();

    // Vector map
    if ($('#worldMap').length != 0) {
        md.initVectorMap();
    }


});

// FileInput
$('.form-file-simple .inputFileVisible').click(function() {
    $(this).siblings('.inputFileHidden').trigger('click');
});

$('.form-file-simple .inputFileHidden').change(function() {
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    $(this).siblings('.inputFileVisible').val(filename);
});

$('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
    $(this).parent().parent().find('.inputFileHidden').trigger('click');
    $(this).parent().parent().addClass('is-focused');
});

$('.form-file-multiple .inputFileHidden').change(function() {
    var names = '';
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
        if (i < $(this).get(0).files.length - 1) {
            names += $(this).get(0).files.item(i).name + ',';
        } else {
            names += $(this).get(0).files.item(i).name;
        }
    }
    $(this).siblings('.input-group').find('.inputFileVisible').val(names);
});

$('.form-file-multiple .btn').on('focus', function() {
    $(this).parent().siblings().trigger('focus');
});

$('.form-file-multiple .btn').on('focusout', function() {
    $(this).parent().siblings().trigger('focusout');
});

var originalModal = $('#exampleModal').clone();
$(document).on('#exampleModal', 'hidden.bs.modal', function () {
    $('#exampleModal').remove();
    var myClone = originalModal.clone();
    $('body').append(myClone);
});



