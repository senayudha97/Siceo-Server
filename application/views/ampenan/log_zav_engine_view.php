<!-- update 1 November 2020 by septandita -->


<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> Laporan Tiap Jam Sentral </h2>

            <a class="btn btn-primary  my-4" href="<?= base_url() . 'log_ampenan_zav_engine/add'; ?>"> Input Data </a>

            <table class="table table-hover table-responsive table-bordered text-center">
                <tr class="bg-primary text-light">
                    <th scope="col" rowspan="4">Waktu</th>
                    <th scope="col" colspan="10">Generator</th>
                    <th scope="col" rowspan="4">Bearing</th>
                    <th scope="col" rowspan="2" colspan="3">Sikap KWH Meter</th>
                    <th scope="col" rowspan="5" colspan="3">Action</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="3"> Tegangan</th>
                    <th scope="row" rowspan="3">Frekuensi</th>
                    <th scope="row" rowspan="3">Faktor Daya</th>
                    <th scope="row" rowspan="3">Daya Semu</th>
                    <th scope="row" rowspan="3">Beban</th>
                    <th scope="row" rowspan="2" colspan="3">Arus (kA)</th>
                    <th scope="row" rowspan="2" colspan="2">Penguat Medan (Exciter)</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" colspan="2"> KWH Produksi </th>
                    <th scope="row" rowspan="2">KWH Alat Bantu</th>

                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row">R</th>
                    <th scope="row">S</th>
                    <th scope="row">T</th>
                    <th scope="row">Arus</th>
                    <th scope="row">Tegangan</th>
                    <th scope="row">HSD</th>
                    <th scope="row">MFO</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th scope="row">2</th>
                    <th scope="row">3</th>
                    <th scope="row">4</th>
                    <th scope="row">5</th>
                    <th scope="row">6</th>
                    <th scope="row">7</th>
                    <th scope="row">8</th>
                    <th scope="row">9</th>
                    <th scope="row">10</th>
                    <th scope="row">11</th>
                    <th scope="row">12</th>
                    <th scope="row">13</th>
                    <th scope="row">14</th>
                    <th scope="row">15</th>
                </tr>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <tr>
                        <td scope="row">10.00</td>
                        <td scope="row">2</td>
                        <td scope="row">3</td>
                        <td scope="row">4</td>
                        <td scope="row">5</td>
                        <td scope="row">6</td>
                        <td scope="row">7</td>
                        <td scope="row">8</td>
                        <td scope="row">9</td>
                        <td scope="row">10</td>
                        <td scope="row">11</td>
                        <td scope="row">12</td>
                        <td scope="row">13</td>
                        <td scope="row">14</td>
                        <td scope="row">15</td>
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_zav_engine/edit')) ?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                        </td>
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_zav_engine/detail')) ?>" class="btn btn-success btn-sm"><span class=<i class="fas fa-info-circle"></i>></span></a>&nbsp;
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></button>
                        </td>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>
</div> -->

<!-- update 1 November 2020 by septandita -->
<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Log_ampenan_zav_engine/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('Log_ampenan_zav_engine/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Temperatur (⁰C)</th>
                        <th>Rack Bahan Bakar</th>
                        <th>Tekanan (Bar)</th>
                        <th>Level Tangki BBM Harian</th>
                        <th>Level Tangki BBM Buffer</th>
                        <th>Level Oli Sump Tank</th>
                        <th>Sikap Flow Meter Bahan Bakar MFO Return</th>
                        <th>Sikap Flow Meter Bahan Bakar MFO In</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) :  ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm generator" data-id="<?= $value['pk_zav_engine']; ?>" data-toggle="modal" data-target="#generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detaill</div></a>
                            </td>
                            <td><?= $value['rack_bahan_bakar']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm generator" data-id="<?= $value['pk_zav_engine']; ?>" data-toggle="modal" data-target="#generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detaill</div></a>
                            </td>
                            <td><?= $value['level_tangki_bbm_harian']; ?></td>
                            <td><?= $value['level_tangki_bbm_buffer']; ?></td>
                            <td><?= $value['level_oli_sump_tank']; ?></td>
                            <td><?= $value['sikap_flow_meter_bahan_bakar_mfo_return']; ?></td>
                            <td><?= $value['sikap_flow_meter_bahan_bakar_mfo_in']; ?></td>
                            <td>
                                <a href="<?php echo (base_url('log_ampenan_zav_engine/edit/')) . $value['pk_zav_engine'] ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_zav_engine/delete/') . $value['pk_zav_engine']; ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Generator -->
    <div class="modal fade" id="generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Generator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="tegangan" class="col-sm-3 col-form-label">Tegangan (Kv)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tegangan" name="input[tegangan]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="frekuensi" class="col-sm-3 col-form-label">Frekuensi (Hz)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="frekuensi" name="input[frekuensi]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faktor_daya" class="col-sm-3 col-form-label">Faktor Daya (COS)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="faktor_daya" name="input[faktor_daya]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_semu" class="col-sm-3 col-form-label">Daya Semu (MVAR)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_semu" name="input[daya_semu]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="beban" class="col-sm-3 col-form-label">Beban (MVV)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="beban" name="input[beban]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Arus (kA)</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_a_r" name="input[arus_a_r]" placeholder="R">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_a_s" name="input[arus_a_s]" placeholder="S">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_a_t" name="input[arus_a_t]" placeholder="T">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Penguat Medan (Exciter)</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_arus" name="input[penguat_medan_arus]" placeholder="Arus">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_tegangan" name="input[penguat_medan_tegangan]" placeholder="Tegangan">
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

    <!-- modal sikap kwh meter -->
    <div class="modal fade" id="sikap_kwh_meter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sikap KWH Meter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kwh Produksi</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kwh_produksi_hsd" name="input[kwh_produksi_hsd]" placeholder="HSD">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kwh_produksi_mfo" name="input[kwh_produksi_mfo]" placeholder="MFO">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kwh_alat_bantu" class="col-sm-3 col-form-label">KWH Alat Bantu</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kwh_alat_bantu" name="input[kwh_alat_bantu]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal arus -->
    <div class="modal fade" id="arus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Arus (A)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="arus_b_r" class="col-sm-3 col-form-label">R</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="arus_b_r" name="input[arus_b_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="arus_b_s" class="col-sm-3 col-form-label">S</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="arus_b_s" name="input[arus_b_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="arus_b_t" class="col-sm-3 col-form-label">T</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="arus_b_t" name="input[arus_b_t]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollX": true
        });

        $('.generator').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zav_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#tegangan').val(hasil.tegangan);
                    $('#frekuensi').val(hasil.frekuensi);
                    $('#faktor_daya').val(hasil.faktor_daya);
                    $('#daya_semu').val(hasil.daya_semu);
                    $('#beban').val(hasil.beban);
                    $('#arus_a_r').val(hasil.arus_a_r);
                    $('#arus_a_s').val(hasil.arus_a_s);
                    $('#arus_a_t').val(hasil.arus_a_t);
                    $('#penguat_medan_arus').val(hasil.penguat_medan_arus);
                    $('#penguat_medan_tegangan').val(hasil.penguat_medan_tegangan);
                }
            });
        });

        $('.sikap_kwh_meter').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zav_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#kwh_produksi_hsd').val(hasil.kwh_produksi_hsd);
                    $('#kwh_produksi_mfo').val(hasil.kwh_produksi_mfo);
                    $('#kwh_alat_bantu').val(hasil.kwh_alat_bantu);
                }
            });
        });

        $('.arus').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zav_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#arus_b_r').val(hasil.arus_b_r);
                    $('#arus_b_s').val(hasil.arus_b_s);
                    $('#arus_b_t').val(hasil.arus_b_t);
                }
            });
        });
    });
</script>