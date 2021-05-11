<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_ruston/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_ruston/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tanggal Input</th>
                        <th rowspan="2">Waktu</th>
                        <th colspan="2">Mesin</th>
                        <th rowspan="2">Load Limit Governor</th>
                        <th rowspan="2">Generator</th>
                        <th rowspan="2">Beban (KW)</th>
                        <th rowspan="2">KWH Produksi</th>
                        <th rowspan="2">Flow Meter Bahan Bakar</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Suhu</th>
                        <th>Tekanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm suhu" data-id="<?= $value['pk_ruston']; ?>" data-toggle="modal" data-target="#suhu"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tekanan" data-id="<?= $value['pk_ruston']; ?>" data-toggle="modal" data-target="#tekanan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['load_limit_governor']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm generator" data-id="<?= $value['pk_ruston']; ?>" data-toggle="modal" data-target="#generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['beban']; ?></td>
                            <td><?= $value['kwh_produksi']; ?></td>
                            <td><?= $value['flow_meter_bahan_bakar']; ?></td>
                            <td>
                                <a href="<?= base_url('log_ampenan_ruston/edit/') . $value['pk_ruston']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_ruston/delete/') . $value['pk_ruston']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Suhu-->
    <div class="modal fade" id="suhu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suhu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card mt-3">
                        <div class="card-header">
                            Air Pendingin
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jacket Water</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_jacket_water_masuk" name="input[air_pendingin_jacket_water_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_jacket_water_keluar" name="input[air_pendingin_jacket_water_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Raw Pelumas</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_raw_water_masuk" name="input[air_pendingin_raw_water_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_raw_water_keluar" name="input[air_pendingin_raw_water_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_masuk" name="input[minyak_pelumas_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_keluar" name="input[minyak_pelumas_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="suhu_udara_masuk" class="col-sm-2 col-form-label">Udara Masuk</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="suhu_udara_masuk" name="input[suhu_udara_masuk]">
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            Gas Buang
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Silinder Sisi A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_a_1" name="input[gas_buang_silinder_sisi_a_1]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_a_2" name="input[gas_buang_silinder_sisi_a_2]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_a_3" name="input[gas_buang_silinder_sisi_a_3]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_a_4" name="input[gas_buang_silinder_sisi_a_4]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Silinder Sisi B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_b_1" name="input[gas_buang_silinder_sisi_b_1]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_b_2" name="input[gas_buang_silinder_sisi_b_2]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_b_3" name="input[gas_buang_silinder_sisi_b_3]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="gas_buang_silinder_sisi_b_4" name="input[gas_buang_silinder_sisi_b_4]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sebelum Turbo</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_a1" name="input[sebelum_turbo_a1]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_a2" name="input[sebelum_turbo_a2]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_a3" name="input[sebelum_turbo_a3]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_a4" name="input[sebelum_turbo_a4]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_b1" name="input[sebelum_turbo_b1]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_b2" name="input[sebelum_turbo_b2]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_b3" name="input[sebelum_turbo_b3]">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input readonly type="text" class="form-control" id="sebelum_turbo_b4" name="input[sebelum_turbo_b4]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Minyak Disaringan</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_disaringan_masuk" name="input[minyak_disaringan_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_disaringan_keluar" name="input[minyak_disaringan_keluar]" placeholder="Keluar">
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

    <!-- modal Tekanan-->
    <div class="modal fade" id="tekanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tekanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Pelumas</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="pelumas_dipanel" name="input[pelumas_dipanel]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="pelumas_dimesin" name="input[pelumas_dimesin]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Bahan Bakar Disaringan</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bahan_bakar_disaringan_masuk" name="input[bahan_bakar_disaringan_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bahan_bakar_disaringan_keluar" name="input[bahan_bakar_disaringan_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Pendinginan</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="pendinginan_jacket_water_masuk" name="input[pendinginan_jacket_water_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="pendinginan_raw_water_masuk" name="input[pendinginan_raw_water_masuk]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tekanan_udara_masuk" class="col-sm-2 col-form-label">Udara Masuk</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="tekanan_udara_masuk" name="input[tekanan_udara_masuk]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Generator-->
    <div class="modal fade" id="generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Generator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="frekwensi" class="col-sm-3 col-form-label">Frekwensi</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="frekwensi" name="input[frekwensi]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faktor_daya" class="col-sm-3 col-form-label">Faktor Daya</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="faktor_daya" name="input[faktor_daya]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tegangan" class="col-sm-3 col-form-label">Tegangan</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="tegangan" name="input[tegangan]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Arus (Ampere)</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_r" name="input[arus_r]" placeholder="R">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_s" name="input[arus_s]" placeholder="S">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_t" name="input[arus_t]" placeholder="T">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Penguat Medan (Exciter)</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_tegangan" name="input[penguat_medan_tegangan]">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_arus" name="input[penguat_medan_arus]">
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

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "scrollX": true
            });

            $('.suhu').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_ruston/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#air_pendingin_jacket_water_masuk').val(hasil.air_pendingin_jacket_water_masuk);
                        $('#air_pendingin_jacket_water_keluar').val(hasil.air_pendingin_jacket_water_keluar);
                        $('#air_pendingin_raw_water_masuk').val(hasil.air_pendingin_raw_water_masuk);
                        $('#air_pendingin_raw_water_keluar').val(hasil.air_pendingin_raw_water_keluar);
                        $('#minyak_pelumas_masuk').val(hasil.minyak_pelumas_masuk);
                        $('#minyak_pelumas_keluar').val(hasil.minyak_pelumas_keluar);
                        $('#suhu_udara_masuk').val(hasil.suhu_udara_masuk);
                        $('#gas_buang_silinder_sisi_a_1').val(hasil.gas_buang_silinder_sisi_a_1);
                        $('#gas_buang_silinder_sisi_a_2').val(hasil.gas_buang_silinder_sisi_a_2);
                        $('#gas_buang_silinder_sisi_a_3').val(hasil.gas_buang_silinder_sisi_a_3);
                        $('#gas_buang_silinder_sisi_a_4').val(hasil.gas_buang_silinder_sisi_a_4);
                        $('#gas_buang_silinder_sisi_b_1').val(hasil.gas_buang_silinder_sisi_b_1);
                        $('#gas_buang_silinder_sisi_b_2').val(hasil.gas_buang_silinder_sisi_b_2);
                        $('#gas_buang_silinder_sisi_b_3').val(hasil.gas_buang_silinder_sisi_b_3);
                        $('#gas_buang_silinder_sisi_b_4').val(hasil.gas_buang_silinder_sisi_b_4);
                        $('#sebelum_turbo_a1').val(hasil.sebelum_turbo_a1);
                        $('#sebelum_turbo_a2').val(hasil.sebelum_turbo_a2);
                        $('#sebelum_turbo_a3').val(hasil.sebelum_turbo_a3);
                        $('#sebelum_turbo_a4').val(hasil.sebelum_turbo_a4);
                        $('#sebelum_turbo_b1').val(hasil.sebelum_turbo_b1);
                        $('#sebelum_turbo_b2').val(hasil.sebelum_turbo_b2);
                        $('#sebelum_turbo_b3').val(hasil.sebelum_turbo_b3);
                        $('#sebelum_turbo_b4').val(hasil.sebelum_turbo_b4);
                        $('#minyak_disaringan_masuk').val(hasil.minyak_disaringan_masuk);
                        $('#minyak_disaringan_keluar').val(hasil.minyak_disaringan_keluar);
                    }
                });
            });

            $('.tekanan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_ruston/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#pelumas_dipanel').val(hasil.pelumas_dipanel);
                        $('#pelumas_dimesin').val(hasil.pelumas_dimesin);
                        $('#bahan_bakar_disaringan_masuk').val(hasil.bahan_bakar_disaringan_masuk);
                        $('#bahan_bakar_disaringan_keluar').val(hasil.bahan_bakar_disaringan_keluar);
                        $('#pendinginan_jacket_water_masuk').val(hasil.pendinginan_jacket_water_masuk);
                        $('#pendinginan_raw_water_masuk').val(hasil.pendinginan_raw_water_masuk);
                        $('#tekanan_udara_masuk').val(hasil.tekanan_udara_masuk);
                    }
                });
            });

            $('.generator').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_ruston/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#frekwensi').val(hasil.frekwensi);
                        $('#faktor_daya').val(hasil.faktor_daya);
                        $('#tegangan').val(hasil.tegangan);
                        $('#arus_r').val(hasil.arus_r);
                        $('#arus_s').val(hasil.arus_s);
                        $('#arus_t').val(hasil.arus_t);
                        $('#penguat_medan_tegangan').val(hasil.penguat_medan_tegangan);
                        $('#penguat_medan_arus').val(hasil.penguat_medan_arus);
                    }
                });
            });
        });
    </script>