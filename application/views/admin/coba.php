<div onload="startTime()" class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group row">
                <button class="btn btn-primary" id="notif">Kirim Notifikasi</button>
                <script>
                    $(document).ready(function() {
                        $('#notif').click(function() {
                            event.preventDefault();
                            $.ajax({
                                url: "<?= base_url('coba/trigger'); ?>",
                                method: 'GET',
                                datatype: 'json',
                            });
                        });
                    });
                </script>
            </div>

            <br><br>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Date Picker</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control easydatepicker" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Time Picker</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control easytimepicker" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Datetime Picker</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control easydatetimepicker" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">GetTime</label>
                <div class="col-sm-10">
                    <input type="text" id="mytime" class="form-control getTime" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Get TIme And Date</label>
                <div class="col-sm-10">
                    <input type="text" id="mytime" class="form-control getDatetime" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Suhu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control suhu" placeholder="">
                </div>
            </div>



            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10">
                    <?php form_waktu("input[waktu]"); ?>
                </div>
            </div>


            <div class="form-group row mt-5">
                <label for="inputPassword" class="col-sm-2 col-form-label">Coba Report</label>
                <div class="col-sm-10">
                    <a href="<?= base_url('coba/report/2'); ?>" target="_blank" class="btn btn-danger"><span class="fas fa-fw fa-file-pdf"></span>&nbsp;Print PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<script>
    $(document).ready(function() {


        $('#btncoba').click(function name() {
            event.preventDefault();
            const value = $('#coba').val();

            $.ajax({
                url: "<?= base_url('coba/ajax'); ?>",
                type: 'get',
                data: {
                    data: value
                },
                success: function(param) {
                    // $('#coba2').val(param);
                    var hasil = JSON.parse(param); //merubah format json ke object JS
                    console.log(hasil);

                    $('#coba2').val(hasil.email);
                }
            });
        });

    });
</script>