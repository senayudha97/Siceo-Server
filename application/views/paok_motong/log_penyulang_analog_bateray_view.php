<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_paok_motong_penyulang_analog_bateray/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_paok_motong_penyulang_analog_bateray/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th rowspan="2">User Input</th>
                        <th colspan="6">Laporan KWH Penyulang Kopel & Sewa (KWH) Analog</th>
                        <th colspan="3">Monitoring Baterai</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Rempung</th>
                        <th>Pancor</th>
                        <th>Keruak</th>
                        <th>Sakra</th>
                        <th>Masbagik</th>
                        <th>Sikur</th>
                        <th>Unit 2 & 3</th>
                        <th>Unit 4 & 5</th>
                        <th>Penyulang</th>
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
                            <td><?= $value['rempung']; ?></td>
                            <td><?= $value['pancor']; ?></td>
                            <td><?= $value['keruak']; ?></td>
                            <td><?= $value['sakra']; ?></td>
                            <td><?= $value['masbagik']; ?></td>
                            <td><?= $value['sikur']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm unit23" data-id="<?= $value['pk_penyulang_analog_bateray']; ?>" data-toggle="modal" data-target="#unit23"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm unit45" data-id="<?= $value['pk_penyulang_analog_bateray']; ?>" data-toggle="modal" data-target="#unit45"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm penyulang" data-id="<?= $value['pk_penyulang_analog_bateray']; ?>" data-toggle="modal" data-target="#penyulang"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_paok_motong_penyulang_analog_bateray/edit/') . $value['pk_penyulang_analog_bateray']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_paok_motong_penyulang_analog_bateray/delete/') . $value['pk_penyulang_analog_bateray']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal unit 2 dan 3-->
    <div class="modal fade" id="unit23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unit 2 & 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">110 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit23_110vdc_v" name="input[unit23_110vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit23_110vdc_i" name="input[unit23_110vdc_i]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">24 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit23_24vdc_v" name="input[unit23_24vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit23_24vdc_i" name="input[unit23_24vdc_i]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal unit 4 dan 5-->
    <div class="modal fade" id="unit45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unit 4 & 5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">110 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit45_110vdc_v" name="input[unit45_110vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit45_110vdc_i" name="input[unit45_110vdc_i]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">24 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit45_24vdc_v" name="input[unit45_24vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="unit45_24vdc_i" name="input[unit45_24vdc_i]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal unit penyulang-->
    <div class="modal fade" id="penyulang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Penyulang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">110 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="penyulang_110vdc_v" name="input[penyulang_110vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="penyulang_110vdc_i" name="input[penyulang_110vdc_i]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">24 VDC</label>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="penyulang_24vdc_v" name="input[penyulang_24vdc_v]">
                        </div>
                        <div class="col-sm-4">
                            <input readonly type="text" class="form-control" id="penyulang_24vdc_i" name="input[penyulang_24vdc_i]">
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

            $('.unit23').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_penyulang_analog_bateray/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#unit23_110vdc_v').val(hasil.unit23_110vdc_v);
                        $('#unit23_110vdc_i').val(hasil.unit23_110vdc_i);
                        $('#unit23_24vdc_v').val(hasil.unit23_24vdc_v);
                        $('#unit23_24vdc_i').val(hasil.unit23_24vdc_i);
                    }
                });
            });

            $('.unit45').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_penyulang_analog_bateray/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#unit45_110vdc_v').val(hasil.unit45_110vdc_v);
                        $('#unit45_110vdc_i').val(hasil.unit45_110vdc_i);
                        $('#unit45_24vdc_v').val(hasil.unit45_24vdc_v);
                        $('#unit45_24vdc_i').val(hasil.unit45_24vdc_i);
                    }
                });
            });

            $('.penyulang').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_penyulang_analog_bateray/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#penyulang_110vdc_v').val(hasil.penyulang_110vdc_v);
                        $('#penyulang_110vdc_i').val(hasil.penyulang_110vdc_i);
                        $('#penyulang_24vdc_v').val(hasil.penyulang_24vdc_v);
                        $('#penyulang_24vdc_i').val(hasil.penyulang_24vdc_i);
                    }
                });
            });
        });
    </script>