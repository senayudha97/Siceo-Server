    var masterSuhu = <?= $master_suhu; ?>;

    // Initial Load All Suhu
    $.each(masterSuhu, function(key, val) {
        // console.log(val.pk + ':' + val.suhu + ':' + val.group + ':' + val.distrik);

        $('.' + val.pk).on('keydown', function() {
            var hijau = val.hijau2;
            var kuning1 = val.kuning1;
            var kuning2 = val.kuning2;

            console.log(val.pk + ':' + $(this).val() + '=' + hijau);

            if ($(this).val() <= hijau) {
                console.log('Bg Hijau');
                $(this).css("background-color", "#1cc88a");
                $(this).css("color", "white");
            } else {
                console.log('Bg Grey');
                $(this).css("background-color", "#858796");
                $(this).css("color", "white");
            }

            if ($(this).val() <= hijau) {
                console.log('Hijau');
                $(this).css("background-color", "#1cc88a");
                $(this).css("color", "white");
            } else if ($(this).val() >= kuning1 && $(this).val() <= kuning2) {
                console.log('Kuning');
                $(this).css("background-color", "#f6c23e");
                $(this).css("color", "white");
            } else if ($(this).val() >= kuning2) {
                console.log('Merah');
                $(this).css("background-color", "#e74a3b");
                $(this).css("color", "white");
            } else {
                $(this).css("background-color", "#858796");
                $(this).css("color", "white");
            }
        });

    });
