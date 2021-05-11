<!-- Footer -->
<footer id="footer" class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Design By <a href="#" class="text-primary">Sena Yudha</a></span>
        </div>
    </div>
</footer>
<!-- Flexbox container for aligning the toasts -->


<!-- <style>
    #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 2.5rem;
        /* Footer height */
    }
</style> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<button id="sidebarToggleTop" class="scroll-to-top rounded d-md-none rounded-circle mr-5">
    <i class="fa fa-bars"></i>
</button>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan tombol berwarna biru untuk konfirmasi logout</div>
            <div class="modal-footer">
                <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary " href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Init data suhu -->
<?php
$lpmgbc = $this->db->get_where('suhu', ['pk' => 'lpmgbc'])->row_array();
$lpmtm = $this->db->get_where('suhu', ['pk' => 'lpmtm'])->row_array();
$lpmtk = $this->db->get_where('suhu', ['pk' => 'lpmtk'])->row_array();

$master_suhu = json_encode($this->db->get('suhu')->result_array());
?>

<script>
    var masterSuhu = <?= $master_suhu; ?>;

    // Initial Load All Suhu
    $.each(masterSuhu, function(key, val) {
        // console.log(val.pk + ':' + val.hijau2 + ':' + val.kuning1 + ':' + val.kuning2);

        $('.' + val.pk).on('keyup', function() {
            var hijau = parseInt(val.hijau2);
            var kuning1 = parseInt(val.kuning1);
            var kuning2 = parseInt(val.kuning2);

            // console.log(val.pk + ':' + $(this).val() + '=' + hijau);

            if ($(this).val() <= hijau) {
                $(this).css("background-color", "#1cc88a");
                $(this).css("color", "white");
            } else if ($(this).val() >= kuning1 && $(this).val() <= kuning2) {
                $(this).css("background-color", "#f6c23e");
                $(this).css("color", "white");
            } else if ($(this).val() >= kuning2) {
                $(this).css("background-color", "#e74a3b");
                $(this).css("color", "white");
            } else if ($(this).val() == 100) {
                $(this).css("background-color", "#858796");
                $(this).css("color", "white");
            }
        });

    });
</script>



<!-- Init JS -->
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    $('.easydatepicker').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'd-m-Y',
        weeks: false
    });
    $('.easydatepicker').ready(function() {
        $(".easydatepicker").attr("placeholder", "Klik untuk input tanggal");
        $('.easydatepicker').attr('readonly', true);
    });

    $('.easytimepicker').datetimepicker({
        timepicker: true,
        datepicker: false,
        format: 'H:i',
        hours12: false,
        step: 5
    });

    $('.easytimepicker').ready(function() {
        $(".easytimepicker").attr("placeholder", "Klik untuk input waktu");
        $('.easytimepicker').attr('readonly', true);
    });

    $('.easydatetimepicker').datetimepicker({
        timepicker: true,
        datepicker: true,
        format: 'd-m-Y H:i',
        hours12: false,
    });
    $('.easydatetimepicker').ready(function() {
        $(".easydatetimepicker").attr("placeholder", "Klik untuk input waktu dan tanggal");
        $('.easydatetimepicker').attr('readonly', true);
    });

    //Untuk Menampilkan Format waktu saja gunakan class "getTime"
    setInterval(
        function DisplayTime() {
            var CurrentDate = new Date();
            var hours = CurrentDate.getHours();
            var minutes = CurrentDate.getMinutes();
            var seconds = CurrentDate.getSeconds();


            if (hours === 0) hours = 12;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            var currentTime = hours + ":" + minutes + ":" + seconds + " ";
            $('.getTime').val(currentTime);
        }, 1000);

    //Untuk Menampilkan Format tanggal waktu gunakan class "getDatetime"
    setInterval(
        function DisplayTime() {
            const o_date = new Intl.DateTimeFormat;
            const f_date = (m_ca, m_it) => Object({
                ...m_ca,
                [m_it.type]: m_it.value
            });
            const m_date = o_date.formatToParts().reduce(f_date, {});

            var CurrentDate2 = new Date();
            var hours = CurrentDate2.getHours();
            var minutes = CurrentDate2.getMinutes();
            var seconds = CurrentDate2.getSeconds();


            if (hours === 0) hours = 12;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            var currentTime = hours + ":" + minutes + ":" + seconds + " ";
            $('.getDatetime').val(m_date.day + '-' + m_date.month + '-' + m_date.year + ' ' + currentTime);
        }, 1000);

    // set background suhu 
    // $('.lpmgbc').on('keyup', function() {
    //     var hijau = <?= $lpmgbc['hijau2']; ?>;
    //     var kuning1 = <?= $lpmgbc['kuning1']; ?>;
    //     var kuning2 = <?= $lpmgbc['kuning2']; ?>;
    //     var merah = <?= $lpmgbc['merah1']; ?>;


    //     if ($(this).val() <= hijau) {
    //         $(this).css("background-color", "#1cc88a");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning1 && $(this).val() <= kuning2) {
    //         $(this).css("background-color", "#f6c23e");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning2) {
    //         $(this).css("background-color", "#e74a3b");
    //         $(this).css("color", "white");
    //     } else {
    //         $(this).css("background-color", "#858796");
    //         $(this).css("color", "white");
    //     }
    // });
    // $('.lpmtm').on('keyup', function() {
    //     var hijau = <?= $lpmtm['hijau2']; ?>;
    //     var kuning1 = <?= $lpmtm['kuning1']; ?>;
    //     var kuning2 = <?= $lpmtm['kuning2']; ?>;
    //     var merah = <?= $lpmtm['merah1']; ?>;


    //     if ($(this).val() <= hijau) {
    //         $(this).css("background-color", "#1cc88a");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning1 && $(this).val() <= kuning2) {
    //         $(this).css("background-color", "#f6c23e");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning2) {
    //         $(this).css("background-color", "#e74a3b");
    //         $(this).css("color", "white");
    //     } else {
    //         $(this).css("background-color", "#858796");
    //         $(this).css("color", "white");
    //     }
    // });
    // $('.lpmtk').on('keyup', function() {
    //     var hijau = <?= $lpmtk['hijau2']; ?>;
    //     var kuning1 = <?= $lpmtk['kuning1']; ?>;
    //     var kuning2 = <?= $lpmtk['kuning2']; ?>;
    //     var merah = <?= $lpmtk['merah1']; ?>;


    //     if ($(this).val() <= hijau) {
    //         $(this).css("background-color", "#1cc88a");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning1 && $(this).val() <= kuning2) {
    //         $(this).css("background-color", "#f6c23e");
    //         $(this).css("color", "white");
    //     } else if ($(this).val() >= kuning2) {
    //         $(this).css("background-color", "#e74a3b");
    //         $(this).css("color", "white");
    //     } else {
    //         $(this).css("background-color", "#858796");
    //         $(this).css("color", "white");
    //     }
    // });

    $('#hidden_field').hide();
</script>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script> -->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>

<!-- Data Tables -->
<!-- <script type="text/javascript" src="<?= base_url('vendor/datatables/datatables.min.js'); ?>"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>


<!-- Datetime Picker -->
<script src="<?= base_url('assets/vendor/datetimepicker/jquery.datetimepicker.full.js'); ?>"></script>



</body>
<script>

</script>

</html>