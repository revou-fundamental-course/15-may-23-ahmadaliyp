$(document).ready(function () {
    $('#keliling-persegi').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-persegi').show();
                $('#result-keliling-persegi').hide();
            },
            success: function (data) {
                $('#loading-keliling-persegi').hide();
                $('#result-keliling-persegi').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-persegi').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-persegi').show();
                $('#result-luas-persegi').hide();
            },
            success: function (data) {
                $('#loading-luas-persegi').hide();
                $('#result-luas-persegi').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#luas-persegipanjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-luas-persegipanjang').show();
                $('#result-luas-persegipanjang').hide();
            },
            success: function (data) {
                $('#loading-luas-persegipanjang').hide();
                $('#result-luas-persegipanjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})

$(document).ready(function () {
    $('#keliling-persegipanjang').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#loading-keliling-persegipanjang').show();
                $('#result-keliling-persegipanjang').hide();
            },
            success: function (data) {
                $('#loading-keliling-persegipanjang').hide();
                $('#result-keliling-persegipanjang').fadeIn('slow').html(data);
            }
        });
        return false;
    });
})