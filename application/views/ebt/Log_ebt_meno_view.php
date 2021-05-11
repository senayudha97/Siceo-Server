<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ebt_meno/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ebt_meno/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-danger rounded-0"><span class="fas fa-fw fa-file-pdf"></span>PDF</button>
                                &nbsp;
                                <button type="submit" name="excel" class="btn btn-success rounded-0"><span class="fas fa-fw fa-file-excel"></span>Excel</button>
                            </div>
                            <!-- <div class="col-sm-6">
                <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>">
              </div> -->
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12 ext1">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="tg-c3ow">No</th>
                        <th class="tg-c3ow">Tanggal Input</th>
                        <th class="tg-c3ow">Jam</th>
                        <th class="tg-c3ow">Tekanan Penstok</th>
                        <th class="tg-c3ow">Gen Speed</th>
                        <td class="tg-c3ow">Voltage Generator</td>
                        <td class="tg-c3ow">Arus Generator</td>
                        <td class="tg-c3ow">Beban</td>
                        <td class="tg-c3ow">Cos Phi</td>
                        <td class="tg-c3ow">Freq</td>
                        <td class="tg-c3ow">Excitation</td>
                        <td class="tg-c3ow">KWh Produksi</td>
                        <td class="tg-c3ow">KWh PS</td>
                        <td class="tg-c3ow">Temperature</td>
                        <th class="tg-c3ow">Level Air</th>
                        <td class="tg-c3ow">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td><?= $value['tekanan_penstok']; ?></td>
                            <td><?= $value['gen_speed']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm voltage_generator" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#voltage_generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm arus_generator" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#arus_generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['beban']; ?></td>
                            <td><?= $value['cos_phi']; ?></td>
                            <td><?= $value['freq']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm excitation" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#excitation"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kwh_produksi" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#kwh_produksi"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kwh_ps" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#kwh_ps"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm temperature" data-id="<?= $value['pk_log_tengah_jaman']; ?>" data-toggle="modal" data-target="#temperature"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['level_air']; ?></td>
                            <td>
                                <a href="<?= base_url('log_ebt_meno/edit/') . $value['pk_log_tengah_jaman']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ebt_meno/delete/') . $value['pk_log_tengah_jaman']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Modal voltage generator-->
<div class="modal fade" id="voltage_generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voltage Generator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="voltage_generator_rs" class="col-sm-2 col-form-label">RS</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="voltage_generator_rs" name="voltage_generator_rs">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="voltage_generator_st" class="col-sm-2 col-form-label">ST</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="voltage_generator_st" name="voltage_generator_st">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="voltage_generator_rt" class="col-sm-2 col-form-label">ST</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="voltage_generator_rt" name="voltage_generator_rt">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Arus Generator -->
<div class="modal fade" id="arus_generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Arus Generator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="arus_generator_r" class="col-sm-2 col-form-label">R</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="arus_generator_r" name="arus_generator_r">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="arus_generator_s" class="col-sm-2 col-form-label">S</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="arus_generator_s" name="arus_generator_s">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="arus_generator_t" class="col-sm-2 col-form-label">T</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="arus_generator_t" name="arus_generator_t">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Excitation -->
<div class="modal fade" id="excitation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excitation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-2 col-form-label">Volt</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="excitation_volt" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-2 col-form-label">Arus</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="excitation_arus" name="masbagik">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal KWh Produksi -->
<div class="modal fade" id="kwh_produksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KWh Produksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-3 col-form-label">EXP. Analog</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="exp_analog" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-3 col-form-label">EXP. EDMI</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="exp_edmi" name="masbagik">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal KWh ps -->
<div class="modal fade" id="kwh_ps" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KWh PS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-2 col-form-label">Export</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="export" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-2 col-form-label">Import</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="import" name="masbagik">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Temperature -->
<div class="modal fade" id="temperature" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Temperature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-3 col-form-label">Bearing 1</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temperature_bearing_1" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-3 col-form-label">Bearing 2</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temperature_bearing_2" name="masbagik">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sikur" class="col-sm-3 col-form-label">Bearing 3</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temperature_bearing_3" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-3 col-form-label">Bearing 4</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temperature_bearing_4" name="masbagik">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollX": true
        });

        $('.voltage_generator').on('click', function() {
            $('#voltage_generator_rs, #voltage_generator_st, #voltage_generator_rt').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#voltage_generator_rs').val(hasil.voltage_generator_rs);
                    $('#voltage_generator_st').val(hasil.voltage_generator_st);
                    $('#voltage_generator_rt').val(hasil.voltage_generator_rt);
                }
            });
        });

        $('.arus_generator').on('click', function() {
            $('#arus_generator_r, #arus_generator_s, #arus_generator_t').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#arus_generator_r').val(hasil.arus_generator_r);
                    $('#arus_generator_s').val(hasil.arus_generator_s);
                    $('#arus_generator_t').val(hasil.arus_generator_t);
                }
            });
        });

        $('.excitation').on('click', function() {
            $('#excitation_volt, #excitation_arus').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#excitation_volt').val(hasil.excitation_volt);
                    $('#excitation_arus').val(hasil.excitation_arus);
                }
            });
        });

        $('.kwh_produksi').on('click', function() {
            $('#exp_analog, #exp_edmi').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#exp_analog').val(hasil.exp_analog);
                    $('#exp_edmi').val(hasil.exp_edmi);
                }
            });
        });

        $('.kwh_ps').on('click', function() {
            $('#export, #import').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#export').val(hasil.export);
                    $('#import').val(hasil.import);
                }
            });
        });

        $('.temperature').on('click', function() {
            $('#temperature_bearing_1, #temperature_bearing_2, #temperature_bearing_3, #temperature_bearing_4').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('log_ebt_meno/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#temperature_bearing_1').val(hasil.temperature_bearing_1);
                    $('#temperature_bearing_2').val(hasil.temperature_bearing_2);
                    $('#temperature_bearing_3').val(hasil.temperature_bearing_3);
                    $('#temperature_bearing_4').val(hasil.temperature_bearing_4);
                }
            });
        });

    });
</script>