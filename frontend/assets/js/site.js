//map clicks
//data.strokeColor = '666666';
$('.map').maphilight(['strokeColor: 666666']);

var data = {};
data.alwaysOn = true;
data.strokeColor = '14A4D9';//'ff0000';
$('area.active').data('maphilight', data).trigger('alwaysOn.maphilight');

for (i = 0; i < 38; i++) {
    var selector = $('#w'+i);
    if (selector.val() != "-1") {
        var resultID = selector.parent().parent().parent().attr('id');
        var id = resultID.split('result')[1];
        $('#tile'+id).css('border-color', 'green');
    }

    selector.change(function() {
        var resultID = selector.parent().parent().parent().attr('id');
        var id = resultID.split('result')[1];

        if (selector.val() != "-1") {
            $('#tile'+id).css('border-color', 'green');
        }
        else {
            $('#tile'+id).css('border-color', 'white');
        }
    });
}

$('#w0').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w1').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w2').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w3').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w4').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w5').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w6').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w7').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w8').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w9').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w10').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w11').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w12').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w13').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w14').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w15').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w16').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w17').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w18').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w19').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w20').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w21').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w22').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w23').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w24').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w25').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w26').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w27').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w28').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w29').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w30').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w31').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w32').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w33').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w34').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w35').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w36').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});

$('#w37').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
    }
});