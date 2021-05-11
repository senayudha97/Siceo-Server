<style>
    .dot {
        height: 15px;
        width: 15px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }
</style>
<h2 class="pl-2">Setup Background Class Suhu</h2>
<?= $this->session->flashdata('message'); ?>
<p class="pl-2">Catatan : Pastikan tidak ada jarak kosong antara warna satu dengan lainnya.</p>
<div class="row">
    <div class="col-sm-5 pl-4">
        <select class="form-control" id="temperature">
            <option value="" selected>-- Pilih --</option>
            <?php foreach ($suhu as $row) : ?>
                <option value="<?= $row['pk']; ?>"><?= $row['group']; ?> - <?= $row['suhu']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div onload="startTime()" class="container-fluid mt-3 mb-5">
    <div class="row">
        <div class="col-lg-8">
            <hr>
            <h4 id="judul">Gas Buang Cylinder</h4>
            <form action="<?= base_url('Admin_pm/edit'); ?>" class="pl-3" method="POST">
                <input type="hidden" name="pk" id="pk" value="lpmgbc">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Background <span class="dot bg-success"></span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputan" readonly name="input[hijau2]" value="<?= $lpmgbc['hijau2']; ?>" id="hijau2" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Background <span class="dot bg-warning"></span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputan" readonly name="input[kuning1]" value="<?= $lpmgbc['kuning1']; ?>" id="kuning1" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Background <span class="dot bg-danger"></span></label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control inputan" readonly name="input[merah1]" value="<?= $lpmgbc['merah1']; ?>" id="merah1" placeholder=""> -->
                        <input type="text" class="form-control inputan" readonly name="input[kuning2]" value="<?= $lpmgbc['kuning2']; ?>" id="kuning2" placeholder="">
                    </div>
                    <!-- <div class="col-sm-5">
                            <input type="text" class="form-control" readonly value="<?= $suhu['merah2']; ?>" id="coba6" placeholder="">
                        </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                            <input type="submit" class="btn btn-primary btn-sm" style="margin: auto;" value="Simpan">
                            <button id="edit" class="btn btn-warning btn-sm">Edit</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>

    <script>
        $(document).ready(function() {
            $('#edit').click(function() {
                event.preventDefault();
                $(".inputan").attr('readonly', false);
            });

            $('#temperature').change(function() {
                var temperature = $(this).val();
                $.ajax({
                    url: "<?= base_url('Admin_pm/ajax'); ?>",
                    data: {
                        groupSuhu: temperature
                    },
                    method: 'GET',
                    datatype: 'json',
                    success: function(param) {
                        var data = JSON.parse(param);

                        console.log(data);
                        $('#pk').val(data.pk);
                        $('#hijau2').val(data.hijau2);
                        $('#kuning1').val(data.kuning1);
                        $('#kuning2').val(data.kuning2);
                        $('#merah1').val(data.merah2);
                        $('#judul').html(data.suhu);
                    }
                });
            });
        });
    </script>