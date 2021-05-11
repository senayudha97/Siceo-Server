<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_paok_motong_separator_mfo/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_paok_motong_separator_mfo/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Separator 1</th>
                        <th>Separator 2</th>
                        <th>Tangki 250 kL</th>
                        <th>Tangki 60 kL</th>
                        <th>Pressure Water Supply</th>
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
                                <div class="btn btn-success btn-sm btn-sm separator1" data-id="<?= $value['pk_separator_mfo']; ?>" data-toggle="modal" data-target="#separator1"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm separator2" data-id="<?= $value['pk_separator_mfo']; ?>" data-toggle="modal" data-target="#separator2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tangki250kl" data-id="<?= $value['pk_separator_mfo']; ?>" data-toggle="modal" data-target="#tangki250kl"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tangki60kl" data-id="<?= $value['pk_separator_mfo']; ?>" data-toggle="modal" data-target="#tangki60kl"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['pressure_water_supply']; ?></td>
                            <td>
                                <a href="<?= base_url('log_paok_motong_separator_mfo/edit/') . $value['pk_separator_mfo']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_paok_motong_separator_mfo/delete/') . $value['pk_separator_mfo']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Separator 1 -->
    <div class="modal fade" id="separator1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Separator 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="separator1_pressure_produksi_mfo" class="col-sm-4 col-form-label">Pressure Produksi MFO (Bar)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="separator1_pressure_produksi_mfo" name="input[separator1_pressure_produksi_mfo]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="separator1_flow_rate_produksi_mfo" class="col-sm-4 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="separator1_flow_rate_produksi_mfo" name="input[separator1_flow_rate_produksi_mfo]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Temperature</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="separator1_temperature_produksi_mfo" name="input[separator1_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="separator1_temperature_inlet_thermal_oil" name="input[separator1_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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

    <!-- modal Separator 2 -->
    <div class="modal fade" id="separator2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Separator 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="separator2_pressure_produksi_mfo" class="col-sm-4 col-form-label">Pressure Produksi MFO (Bar)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="separator2_pressure_produksi_mfo" name="input[separator2_pressure_produksi_mfo]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="separator2_flow_rate_produksi_mfo" class="col-sm-4 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="separator2_flow_rate_produksi_mfo" name="input[separator2_flow_rate_produksi_mfo]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Temperature</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="separator2_temperature_produksi_mfo" name="input[separator2_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="separator2_temperature_inlet_thermal_oil" name="input[separator2_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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

    <!-- modal tangki 250 kL -->
    <div class="modal fade" id="tangki250kl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tangki 250 kL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="tangki250_level" class="col-sm-3 col-form-label">Level (kL)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tangki250_level" name="input[tangki250_level]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tangki250_temp" class="col-sm-3 col-form-label">Temp</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tangki250_temp" name="input[tangki250_temp]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal tangki 60 kL -->
    <div class="modal fade" id="tangki60kl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tangki 60 kL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="tangki60_level" class="col-sm-3 col-form-label">Level (kL)</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tangki60_level" name="input[tangki60_level]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tangki60_temp" class="col-sm-3 col-form-label">Temp</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tangki60_temp" name="input[tangki60_temp]">
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

            $('.separator1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_separator_mfo/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#separator1_pressure_produksi_mfo').val(hasil.separator1_pressure_produksi_mfo);
                        $('#separator1_flow_rate_produksi_mfo').val(hasil.separator1_flow_rate_produksi_mfo);
                        $('#separator1_temperature_produksi_mfo').val(hasil.separator1_temperature_produksi_mfo);
                        $('#separator1_temperature_inlet_thermal_oil').val(hasil.separator1_temperature_inlet_thermal_oil);
                    }
                });
            });

            $('.separator2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_separator_mfo/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#separator2_pressure_produksi_mfo').val(hasil.separator2_pressure_produksi_mfo);
                        $('#separator2_flow_rate_produksi_mfo').val(hasil.separator2_flow_rate_produksi_mfo);
                        $('#separator2_temperature_produksi_mfo').val(hasil.separator2_temperature_produksi_mfo);
                        $('#separator2_temperature_inlet_thermal_oil').val(hasil.separator2_temperature_inlet_thermal_oil);
                    }
                });
            });

            $('.tangki250kl').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_separator_mfo/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tangki250_level').val(hasil.tangki250_level);
                        $('#tangki250_temp').val(hasil.tangki250_temp);
                    }
                });
            });

            $('.tangki60kl').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_separator_mfo/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tangki60_level').val(hasil.tangki60_level);
                        $('#tangki60_temp').val(hasil.tangki60_temp);
                    }
                });
            });
        });
    </script>