<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_paok_motong_hrto/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_paok_motong_hrto/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th colspan="5">Temperature</th>
                        <th colspan="2">Pressure</th>
                        <th rowspan="2">Pompa Sirkulasi Nomor</th>
                        <th rowspan="2">Damper</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Thermal Oil HRTO 1</th>
                        <th>Thermal Oil HRTO 2</th>
                        <th>Gas Inlet HRTO Unit</th>
                        <th>Circulation Thermal Oil</th>
                        <th>Outlet HE</th>
                        <th>Outlet HE</th>
                        <th>Outlet Circulation Thermal Oil</th>
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
                                <div class="btn btn-success btn-sm btn-sm thermal_oil_hrto1" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#thermal_oil_hrto1"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm thermal_oil_hrto2" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#thermal_oil_hrto2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm gas_inlet" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#gas_inlet"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm circulation_thermal_oil" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#circulation_thermal_oil"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['temperature_outlet_he']; ?></td>
                            <td><?= $value['pressure_outlet_he']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm outlet_circulation_thermal_oil" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#outlet_circulation_thermal_oil"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['pompa_sirkulasi_nomor']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm damper" data-id="<?= $value['pk_hrto']; ?>" data-toggle="modal" data-target="#damper  "><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_paok_motong_hrto/edit/') . $value['pk_hrto']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_paok_motong_hrto/delete/') . $value['pk_hrto']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Thermal oil HRTO 1-->
    <div class="modal fade" id="thermal_oil_hrto1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thermal Oil HRTO 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="thermal_hrto1_in" class="col-sm-3 col-form-label">In</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="thermal_hrto1_in" name="input[thermal_hrto1_in]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thermal_hrto1_out" class="col-sm-3 col-form-label">Out</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="thermal_hrto1_out" name="input[thermal_hrto1_out]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Thermal Oil HRTO 2 -->
    <div class="modal fade" id="thermal_oil_hrto2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thermal Oil HRTO 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="thermal_hrto2_in" class="col-sm-3 col-form-label">In</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="thermal_hrto2_in" name="input[thermal_hrto2_in]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thermal_hrto2_out" class="col-sm-3 col-form-label">Out</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="thermal_hrto2_out" name="input[thermal_hrto2_out]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gas Inlet HRTO Unit -->
    <div class="modal fade" id="gas_inlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gas Inlet HRTO Unit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="gas_inlet_hrto2" class="col-sm-3 col-form-label">#2</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="gas_inlet_hrto2" name="input[gas_inlet_hrto2]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gas_inlet_hrto3" class="col-sm-3 col-form-label">#3</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="gas_inlet_hrto3" name="input[gas_inlet_hrto3]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gas_inlet_hrto4" class="col-sm-3 col-form-label">#4</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="gas_inlet_hrto4" name="input[gas_inlet_hrto4]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gas_inlet_hrto5" class="col-sm-3 col-form-label">#5</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="gas_inlet_hrto5" name="input[gas_inlet_hrto5]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Circulation Thermal Oil -->
    <div class="modal fade" id="circulation_thermal_oil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Circulation Thermal Oil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="circulation_thermal_hrto1" class="col-sm-3 col-form-label">HRTO 1</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="circulation_thermal_hrto1" name="input[circulation_thermal_hrto1]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="circulation_thermal_hrto2" class="col-sm-3 col-form-label">HRTO 2</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="circulation_thermal_hrto2" name="input[circulation_thermal_hrto2]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Outlet Circulation Thermal Oil -->
    <div class="modal fade" id="outlet_circulation_thermal_oil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Outlet Circulation Thermal Oil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="outlet_circulation_hrto1" class="col-sm-3 col-form-label">HRTO 1</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="outlet_circulation_hrto1" name="input[outlet_circulation_hrto1]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="outlet_circulation_hrto2" class="col-sm-3 col-form-label">HRTO 2</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="outlet_circulation_hrto2" name="input[outlet_circulation_hrto2]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Damper -->
    <div class="modal fade" id="damper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Damper (derajat)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="damper2" class="col-sm-3 col-form-label">#2</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="damper2" name="input[damper2]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="damper3" class="col-sm-3 col-form-label">#3</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="damper3" name="input[damper3]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="damper4" class="col-sm-3 col-form-label">#4</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="damper4" name="input[damper4]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="damper5" class="col-sm-3 col-form-label">#5</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="damper5" name="input[damper5]">
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

            $('.thermal_oil_hrto1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#thermal_hrto1_in').val(hasil.thermal_hrto1_in);
                        $('#thermal_hrto1_out').val(hasil.thermal_hrto1_out);
                    }
                });
            });

            $('.thermal_oil_hrto2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#thermal_hrto2_in').val(hasil.thermal_hrto2_in);
                        $('#thermal_hrto2_out').val(hasil.thermal_hrto2_out);
                    }
                });
            });

            $('.gas_inlet').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#gas_inlet_hrto2').val(hasil.gas_inlet_hrto2);
                        $('#gas_inlet_hrto3').val(hasil.gas_inlet_hrto3);
                        $('#gas_inlet_hrto4').val(hasil.gas_inlet_hrto4);
                        $('#gas_inlet_hrto5').val(hasil.gas_inlet_hrto5);
                    }
                });
            });

            $('.circulation_thermal_oil').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#circulation_thermal_hrto1').val(hasil.circulation_thermal_hrto1);
                        $('#circulation_thermal_hrto2').val(hasil.circulation_thermal_hrto2);
                    }
                });
            });

            $('.outlet_circulation_thermal_oil').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#outlet_circulation_hrto1').val(hasil.outlet_circulation_hrto1);
                        $('#outlet_circulation_hrto2').val(hasil.outlet_circulation_hrto2);
                    }
                });
            });

            $('.damper').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_hrto/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#damper2').val(hasil.damper2);
                        $('#damper3').val(hasil.damper3);
                        $('#damper4').val(hasil.damper4);
                        $('#damper5').val(hasil.damper5);
                    }
                });
            });
        });
    </script>