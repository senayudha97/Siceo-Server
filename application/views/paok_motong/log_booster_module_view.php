<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_paok_motong_booster_module/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_paok_motong_booster_module/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Beban</th>
                        <th>Flow Meter</th>
                        <th>KWH Produksi</th>
                        <th>Pressure (Bar)</th>
                        <th>Temperature</th>
                        <th>Viscositas</th>
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
                            <td><?= $value['beban']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm flow_meter" data-id="<?= $value['pk_booster_module']; ?>" data-toggle="modal" data-target="#flow_meter"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kwh_produksi" data-id="<?= $value['pk_booster_module']; ?>" data-toggle="modal" data-target="#kwh_produksi"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pressure" data-id="<?= $value['pk_booster_module']; ?>" data-toggle="modal" data-target="#pressure"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm temperature" data-id="<?= $value['pk_booster_module']; ?>" data-toggle="modal" data-target="#temperature"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['viscositas']; ?></td>
                            <td>
                                <a href="<?= base_url('log_paok_motong_booster_module/edit/') . $value['pk_booster_module']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_paok_motong_booster_module/delete/') . $value['pk_booster_module']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Flow Meter-->
    <div class="modal fade" id="flow_meter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Flow Meter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="flow_meter_hsd" class="col-sm-4 col-form-label">HSD</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="flow_meter_hsd" name="input[flow_meter_hsd]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="flow_meter_mfo" class="col-sm-4 col-form-label">MFO</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="flow_meter_mfo" name="input[flow_meter_mfo]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal KWH Produksi-->
    <div class="modal fade" id="kwh_produksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">KWH Produksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="kwh_produksi_hsd" class="col-sm-4 col-form-label">HSD</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kwh_produksi_hsd" name="input[kwh_produksi_hsd]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kwh_produksi_mfo" class="col-sm-4 col-form-label">MFO</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kwh_produksi_mfo" name="input[kwh_produksi_mfo]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Pressure -->
    <div class="modal fade" id="pressure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pressure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="inlet_module" class="col-sm-4 col-form-label">Inlet Module</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="inlet_module" name="input[inlet_module]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge_bp" class="col-sm-4 col-form-label">Discharge BP</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="discharge_bp" name="input[discharge_bp]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="suction_bp" class="col-sm-4 col-form-label">Suction BP</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="suction_bp" name="input[suction_bp]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mixing_tank12" class="col-sm-4 col-form-label">Mixing Tank</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="mixing_tank12" name="input[mixing_tank12]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fo_outlet" class="col-sm-4 col-form-label">F.O Outlet</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="fo_outlet" name="input[fo_outlet]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="in_to_engine" class="col-sm-4 col-form-label">In to Engine</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="in_to_engine" name="input[in_to_engine]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_control" class="col-sm-4 col-form-label">Air Control</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_control" name="input[air_control]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                        <label for="inlet_flow1" class="col-sm-4 col-form-label">Inlet Flow 1</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="inlet_flow1" name="input[inlet_flow1]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inlet_flow2" class="col-sm-4 col-form-label">Inlet Flow 2</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="inlet_flow2" name="input[inlet_flow2]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mixing_tank9" class="col-sm-4 col-form-label">Mixig Tank</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="mixing_tank9" name="input[mixing_tank9]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inlet_heater" class="col-sm-4 col-form-label">Inlet Heater</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="inlet_heater" name="input[inlet_heater]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="outlet_heater" class="col-sm-4 col-form-label">Outlet Heater</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="outlet_heater" name="input[outlet_heater]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="viscosensor" class="col-sm-4 col-form-label">Viscosensor</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="viscosensor" name="input[viscosensor]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="return_line" class="col-sm-4 col-form-label">Return Line</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="return_line" name="input[return_line]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fuel_oil" class="col-sm-4 col-form-label">Fuel Oil</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="fuel_oil" name="input[fuel_oil]">
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

            $('.flow_meter').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_booster_module/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#flow_meter_hsd').val(hasil.flow_meter_hsd);
                        $('#flow_meter_mfo').val(hasil.flow_meter_mfo);
                    }
                });
            });

            $('.kwh_produksi').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_booster_module/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kwh_produksi_hsd').val(hasil.kwh_produksi_hsd);
                        $('#kwh_produksi_mfo').val(hasil.kwh_produksi_mfo);
                    }
                });
            });

            $('.pressure').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_booster_module/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#inlet_module').val(hasil.inlet_module);
                        $('#discharge_bp').val(hasil.discharge_bp);
                        $('#suction_bp').val(hasil.suction_bp);
                        $('#mixing_tank12').val(hasil.mixing_tank12);
                        $('#fo_outlet').val(hasil.fo_outlet);
                        $('#in_to_engine').val(hasil.in_to_engine);
                        $('#air_control').val(hasil.air_control);
                    }
                });
            });

            $('.temperature').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_paok_motong_booster_module/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#inlet_flow1').val(hasil.inlet_flow1);
                        $('#inlet_flow2').val(hasil.inlet_flow2);
                        $('#mixing_tank9').val(hasil.mixing_tank9);
                        $('#inlet_heater').val(hasil.inlet_heater);
                        $('#outlet_heater').val(hasil.outlet_heater);
                        $('#viscosensor').val(hasil.viscosensor);
                        $('#return_line').val(hasil.return_line);
                        $('#fuel_oil').val(hasil.fuel_oil);
                    }
                });
            });
        });
    </script>