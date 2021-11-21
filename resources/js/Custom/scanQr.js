var cam;

$(document).ready(function () {
    $('.selectCam').hide();
    $('.submitManual').hide();
    $('.formInput').hide();
    $('.switchToScan').hide();
});

$('.inputManual').click(function () {
    $('.inputManual').hide();
    $('#reader').hide();
    $('.qrcode-code').hide();
    $('.scanStop').hide();
    $('.scanStart').hide();
    $('.formInput').show();
    $('.switchToScan').show();
    $('.submitManual').show();
    if (cam.length > 0) {
        if (cam.length > 1) {
            $('.selectCam').hide();
        }
        scanner.start(cam[0]);
        $(this).hide();
    } else {
        alert('No cameras found.');
    };
});
$('.switchToScan').click(function () {
    $('.qrcode-code').show();
    $('.scanStart').show();
    $('.formInput').hide();
    $('.switchToScan').hide();
    $('.submitManual').hide();
    $('.inputManual').show();
    $(this).hide();
});

$('.submitManual').click(function () {
    var $code = $('#code').val();
    if ($code === '') {
        alert('The code was empty');
        return false;
    }

    $(this).html('<i class="fas fa-spinner fa-pulse"></i>');
    $.ajax({
        type: "POST",
        url: scriptUrl + "/scratch/validation",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            code: $code
        },
        dataType: "JSON",
        success: function (e) {
            if (e.success) {
                location.href = e.url;
            } else {
                alert(e.message);
                $('.submitManual').html('Submit');
            }
        }
    });
});

let scanner = new Instascan.Scanner({ video: document.getElementById('reader') });
scanner.addListener('scan', function (content) {
    window.location.href = content;
    // alert(content);
});

Instascan.Camera.getCameras().then(function (cameras) {
    cam = cameras;
}).catch(function (e) {
    console.error(e);
});

$("body").on("change", ".selectCam", function () {
    var $val = $(this).val();
    scanner.start(cam[$val]);
});

$('.scanStop').click(function () {
    scanner.stop();
    $('#reader').hide();
    $('.qrcode-code').show();
    $('.scanStart').show();
    $(this).hide();
})

$('.scanStart').click(function () {
    $('#reader').show();
    $('.qrcode-code').hide();
    if (cam.length > 0) {
        if (cam.length > 1) {

            $('.selectCam').show();
            $('.selectCam option').remove();
            var $camSelector = $('.selectCam');
            $.each(cam, function (index, value) {
                console.log(index);
                var $data = '<option value="' + index + '">' + value.name + '</option>'
                $camSelector.append($data);
            });
            $camSelector.append('<option value="1">Kedua</option>');
        }
        scanner.start(cam[0]);
        $(this).hide();
        $('.scanStop').show();
    } else {
        alert('No cameras found.');
    };
});
