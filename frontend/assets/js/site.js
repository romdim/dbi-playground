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
        $('#tile'+id).css('border-width', '2px');
    }
}

$('#w0').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w1').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w2').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w3').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w4').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w5').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w6').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w7').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w8').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w9').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w10').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w11').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w12').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w13').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w14').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w15').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w16').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w17').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w18').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w19').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w20').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w21').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w22').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w23').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w24').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w25').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w26').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w27').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w28').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w29').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w30').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w31').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w32').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w33').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w34').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w35').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w36').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});

$('#w37').change(function() {
    var resultID = $(this).parent().parent().parent().attr('id');
    var id = resultID.split('result')[1];

    if ($(this).val() != "-1") {
        $('#tile'+id).css('border-color', 'green');
        $('#tile'+id).css('border-width', '2px');
    }
    else {
        $('#tile'+id).css('border-color', 'white');
        $('#tile'+id).css('border-width', '1px');
    }
});