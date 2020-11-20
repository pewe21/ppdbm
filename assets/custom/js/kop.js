$(function () {
    $("#datepicker").datepicker();
    $('#nisn').mask('0000000000');
    $('#wa').mask('0800000000000');
});

function getLokasi() {
    var $op1 = $("#provinsi");

    $.getJSON("provinsi", function (data) {
        $.each(data, function (i, field) {

            $op1.append('<option value="' + field.id + '" data-prov="' + field.name + '">' + field.name + '</option>');

        });

    });

}

getLokasi();

$("#provinsi").on("change", function (e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    var option2 = $('option:selected', this).data('prov');
    $('#txtp').val(option2);
    $('#kota option:gt(0)').remove();
    $('#kecamatan').val('');
    $('#txtb').val('');
    $('#txtc').val('');


    if (option === '') {
        alert('null');
        $("#kota").prop("disabled", true);
        $("#kecamatan").prop("disabled", true);
    } else {
        $("#kota").prop("disabled", false);
        getKota1(option);

    }
});

function getKota1(idpro) {
    var $op = $("#kota");

    $.getJSON("kota/" + idpro, function (data) {
        $.each(data, function (i, field) {


            $op.append('<option value="' + field.id + '" data-kab="' + field.name + '">' + field.name + '</option>');

        });

    });

}
$("#kota").on("change", function (e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    var option2 = $('option:selected', this).data('kab');
    $('#kecamatan').val('');
    $('#txtb').val(option2);

    if (option === '') {
        alert('null');
        $("#kecamatan").prop("disabled", true);
    } else {
        $("#kecamatan").prop("disabled", false);
        getkecamatan1(option);
    }
});


function getkecamatan1(idpro) {
    var $op = $("#kecamatan");

    $.getJSON("kecamatan/" + idpro, function (data) {
        $.each(data, function (i, field) {


            $op.append('<option value="' + field.id + '" data-kec="' + field.name + '">' + field.name + '</option>');

        });

    });
}

$("#kecamatan").on("change", function (e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    var option2 = $('option:selected', this).data('kec');
    $('#txtc').val(option2);

    if (option === '') {
        alert('null');
    }
});