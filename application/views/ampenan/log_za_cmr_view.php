<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_za_cmr/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_za_cmr/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                                <button type="submit" class="btn btn-danger "><span class="fas fa-fw fa-file-pdf"></span>PDF</button>
                                &nbsp;
                                <button type="submit" name="excel" class="btn btn-success "><span class="fas fa-fw fa-file-excel"></span>Excel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead class="textTable">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Input</th>
                        <th>Waktu</th>
                        <th>User Input</th>
                        <th>Tekanan</th>
                        <th>Temperatur</th>
                        <th>Putaran Turbo (RPM) x 100</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td><?= $value['name']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tekanan" data-id="<?= $value['pk_za_cmr']; ?>" data-toggle="modal" data-target="#tekanan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm temperatur" data-id="<?= $value['pk_za_cmr']; ?>" data-toggle="modal" data-target="#temperatur"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm putaran_turbo" data-id="<?= $value['pk_za_cmr']; ?>" data-toggle="modal" data-target="#putaran_turbo"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_ampenan_za_cmr/edit/') . $value['pk_za_cmr']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_za_cmr/delete/') . $value['pk_za_cmr']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<div id="modal_hider">

    <!-- modal Tekanan-->
    <div class="modal fade" id="tekanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tekanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="udara_start" class="col-sm-4 col-form-label">Udara Start</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_start" name="input[udara_start]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pendingin_mesin" class="col-sm-4 col-form-label">Air Pendingin Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pendingin_mesin" name="input[air_pendingin_mesin]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pendingin_injector" class="col-sm-4 col-form-label">Air Pendingin Injector</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pendingin_injector" name="input[air_pendingin_injector]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="raw_water" class="col-sm-4 col-form-label">Raw Water</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="raw_water" name="input[raw_water]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minyak_pelumas" class="col-sm-4 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="minyak_pelumas" name="input[minyak_pelumas]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahan_bakar" class="col-sm-4 col-form-label">Bahan Bakar</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bahan_bakar" name="input[bahan_bakar]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="udara_masuk" class="col-sm-4 col-form-label">Udara Masuk</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_masuk" name="input[udara_masuk]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Temperatur-->
    <div class="modal fade" id="temperatur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Temperatur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card">
                        <div class="card-header">
                            Gas Buang
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder Sisi A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_1" name="input[gas_buang_keluar_silinder_sisi_a_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_2" name="input[gas_buang_keluar_silinder_sisi_a_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_3" name="input[gas_buang_keluar_silinder_sisi_a_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_4" name="input[gas_buang_keluar_silinder_sisi_a_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_5" name="input[gas_buang_keluar_silinder_sisi_a_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_6" name="input[gas_buang_keluar_silinder_sisi_a_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder sisi B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_1" name="input[gas_buang_keluar_silinder_sisi_b_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_2" name="input[gas_buang_keluar_silinder_sisi_b_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_3" name="input[gas_buang_keluar_silinder_sisi_b_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_4" name="input[gas_buang_keluar_silinder_sisi_b_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_5" name="input[gas_buang_keluar_silinder_sisi_b_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_6" name="input[gas_buang_keluar_silinder_sisi_b_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Turbo A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="turbo_a_masuk" name="input[turbo_a_masuk]">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="turbo_a_keluar" name="input[turbo_a_keluar]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Turbo B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="turbo_b_masuk" name="input[turbo_b_masuk]">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="turbo_b_keluar" name="input[turbo_b_keluar]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_air_pendingin_mesin" name="input[temperatur_air_pendingin_mesin]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Air Pendingin Injector</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_air_pendingin_injector" name="input[temperatur_air_pendingin_injector]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_minyak_pelumas" name="input[temperatur_minyak_pelumas]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_bahan_bakar" name="input[temperatur_bahan_bakar]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Raw Water</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_raw_water" name="input[temperatur_raw_water]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Udara Masuk</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="temperatur_udara_masuk" name="input[temperatur_udara_masuk]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Bearing Generator</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bearing_generator1" name="input[bearing_generator1]">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bearing_generator2" name="input[bearing_generator2]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Thrust Bearing</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="thrust_bearing" name="input[thrust_bearing]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Main Bearing</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing1" name="input[main_bearing1]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing2" name="input[main_bearing2]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing3" name="input[main_bearing3]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing4" name="input[main_bearing4]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing5" name="input[main_bearing5]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing6" name="input[main_bearing6]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="main_bearing7" name="input[main_bearing7]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stator</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator1" name="input[stator1]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator2" name="input[stator2]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator3" name="input[stator3]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator4" name="input[stator4]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator5" name="input[stator5]">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="stator6" name="input[stator6]">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal putaran turbo -->
    <div class="modal fade" id="putaran_turbo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Putaran Turbo (RPM) x 100</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="putaran_turbo_a" class="col-sm-2 col-form-label">A</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="putaran_turbo_a" name="input[putaran_turbo_a]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="putaran_turbo_b" class="col-sm-2 col-form-label">B</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="putaran_turbo_b" name="input[putaran_turbo_b]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "scrollX": true
            });

            $('.tekanan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_za_cmr/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#udara_start').val(hasil.udara_start);
                        $('#air_pendingin_mesin').val(hasil.air_pendingin_mesin);
                        $('#air_pendingin_injector').val(hasil.air_pendingin_injector);
                        $('#raw_water').val(hasil.raw_water);
                        $('#minyak_pelumas').val(hasil.minyak_pelumas);
                        $('#bahan_bakar').val(hasil.bahan_bakar);
                        $('#udara_masuk').val(hasil.udara_masuk);
                    }
                });
            });

            $('.temperatur').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_za_cmr/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#gas_buang_keluar_silinder_sisi_a_1').val(hasil.gas_buang_keluar_silinder_sisi_a_1);
                        $('#gas_buang_keluar_silinder_sisi_a_2').val(hasil.gas_buang_keluar_silinder_sisi_a_2);
                        $('#gas_buang_keluar_silinder_sisi_a_3').val(hasil.gas_buang_keluar_silinder_sisi_a_3);
                        $('#gas_buang_keluar_silinder_sisi_a_4').val(hasil.gas_buang_keluar_silinder_sisi_a_4);
                        $('#gas_buang_keluar_silinder_sisi_a_5').val(hasil.gas_buang_keluar_silinder_sisi_a_5);
                        $('#gas_buang_keluar_silinder_sisi_a_6').val(hasil.gas_buang_keluar_silinder_sisi_a_6);
                        $('#gas_buang_keluar_silinder_sisi_b_1').val(hasil.gas_buang_keluar_silinder_sisi_b_1);
                        $('#gas_buang_keluar_silinder_sisi_b_2').val(hasil.gas_buang_keluar_silinder_sisi_b_2);
                        $('#gas_buang_keluar_silinder_sisi_b_3').val(hasil.gas_buang_keluar_silinder_sisi_b_3);
                        $('#gas_buang_keluar_silinder_sisi_b_4').val(hasil.gas_buang_keluar_silinder_sisi_b_4);
                        $('#gas_buang_keluar_silinder_sisi_b_5').val(hasil.gas_buang_keluar_silinder_sisi_b_5);
                        $('#gas_buang_keluar_silinder_sisi_b_6').val(hasil.gas_buang_keluar_silinder_sisi_b_6);
                        $('#turbo_a_masuk').val(hasil.turbo_a_masuk);
                        $('#turbo_a_keluar').val(hasil.turbo_a_keluar);
                        $('#turbo_b_masuk').val(hasil.turbo_b_masuk);
                        $('#turbo_b_keluar').val(hasil.turbo_b_keluar);
                        $('#temperatur_air_pendingin_mesin').val(hasil.temperatur_air_pendingin_mesin);
                        $('#temperatur_air_pendingin_injector').val(hasil.temperatur_air_pendingin_injector);
                        $('#temperatur_minyak_pelumas').val(hasil.temperatur_minyak_pelumas);
                        $('#temperatur_bahan_bakar').val(hasil.temperatur_bahan_bakar);
                        $('#temperatur_raw_water').val(hasil.temperatur_raw_water);
                        $('#temperatur_udara_masuk').val(hasil.temperatur_udara_masuk);
                        $('#bearing_generator1').val(hasil.bearing_generator1);
                        $('#bearing_generator2').val(hasil.bearing_generator2);
                        $('#thrust_bearing').val(hasil.thrust_bearing);
                        $('#main_bearing1').val(hasil.main_bearing1);
                        $('#main_bearing2').val(hasil.main_bearing2);
                        $('#main_bearing3').val(hasil.main_bearing3);
                        $('#main_bearing4').val(hasil.main_bearing4);
                        $('#main_bearing5').val(hasil.main_bearing5);
                        $('#main_bearing6').val(hasil.main_bearing6);
                        $('#main_bearing7').val(hasil.main_bearing7);
                        $('#stator1').val(hasil.stator1);
                        $('#stator2').val(hasil.stator2);
                        $('#stator3').val(hasil.stator3);
                        $('#stator4').val(hasil.stator4);
                        $('#stator5').val(hasil.stator5);
                        $('#stator6').val(hasil.stator6);
                    }
                });
            });

            $('.putaran_turbo').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_za_cmr/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#putaran_turbo_a').val(hasil.putaran_turbo_a);
                        $('#putaran_turbo_b').val(hasil.putaran_turbo_b);
                    }
                });
            });
        });
    </script>