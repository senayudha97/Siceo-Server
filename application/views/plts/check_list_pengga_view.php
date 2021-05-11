<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Check_list_pengga/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('Check_list_pengga/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th class="tg-c3ow">PV Modul</th>
                        <th class="tg-c3ow">Irradians</th>
                        <td class="tg-c3ow">Irradiations</td>
                        <td class="tg-c3ow">Grid</td>
                        <td class="tg-c3ow">Gen Power</td>
                        <td class="tg-c3ow">Energy</td>
                        <td class="tg-c3ow">Temp</td>
                        <td class="tg-c3ow">KWH PS</td>
                        <td class="tg-c3ow">KWH EKS. TOT</td>
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
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pv_modul" data-id="<?= $value['pk_plts']; ?>" data-toggle="modal" data-target="#pv_modul"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['irradians']; ?></td>
                            <td><?= $value['irradiations']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm grid" data-id="<?= $value['pk_plts']; ?>" data-toggle="modal" data-target="#grid"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['gen_power']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm energy" data-id="<?= $value['pk_plts']; ?>" data-toggle="modal" data-target="#energy"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm temp" data-id="<?= $value['pk_plts']; ?>" data-toggle="modal" data-target="#temp"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['kwh_ps']; ?></td>
                            <td><?= $value['kwh_eks_tot']; ?></td>
                            <td>
                                <a href="<?= base_url('Plts_check_list/edit/') . $value['pk_plts']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('Plts_check_list/delete/') . $value['pk_plts']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<!-- Modal PV Modul-->
<div class="modal fade" id="pv_modul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PV Modul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="pv_modul_volt" class="col-sm-2 col-form-label">Volt</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="pv_modul_volt" name="pv_modul_volt">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pv_modul_curr" class="col-sm-2 col-form-label">CURR</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="pv_modul_curr" name="pv_modul_curr">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pv_modul_power" class="col-sm-2 col-form-label">POWER</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="pv_modul_power" name="pv_modul_power">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pv_modul_today" class="col-sm-2 col-form-label">TODAY</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="pv_modul_today" name="pv_modul_today">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pv_modul_acc" class="col-sm-2 col-form-label">ACC</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="pv_modul_acc" name="pv_modul_acc">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Grid -->
<div class="modal fade" id="grid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grid</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Volt</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_volt_r" name="input[grid_volt_r]" placeholder="R">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_volt_s" name="input[grid_volt_s]" placeholder="S">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_volt_t" name="input[grid_volt_t]" placeholder="T">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Current</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_current_r" name="input[grid_current_r]" placeholder="R">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_current_s" name="input[grid_current_s]" placeholder="S">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_current_t" name="input[grid_current_t]" placeholder="T">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Power</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_power_r" name="input[grid_power_r]" placeholder="R">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_power_s" name="input[grid_power_s]" placeholder="S">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" readonly class="form-control" id="grid_power_t" name="input[grid_power_t]" placeholder="T">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Energy -->
<div class="modal fade" id="energy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Energy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-2 col-form-label">Today</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="energy_today" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-2 col-form-label">ACC</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="energy_acc" name="masbagik">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-2 col-form-label">EB</label>
                    <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="energy_eb" name="masbagik">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal Temp -->
<div class="modal fade" id="temp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Temp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="sikur" class="col-sm-3 col-form-label">PV</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temp_pv" name="sikur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-3 col-form-label">AMBIEN</label>
                    <div class="col-sm-7">
                        <input readonly type="text" class="form-control" id="temp_ambien" name="masbagik">
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

        $('.pv_modul').on('click', function() {
            $('#pv_modul_volt, #pv_modul_curr, #pv_modul_power, #pv_modul_today, #pv_modul_acc').val(''); //clear

            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('Plts_check_list/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pv_modul_volt').val(hasil.pv_modul_volt);
                    $('#pv_modul_curr').val(hasil.pv_modul_curr);
                    $('#pv_modul_power').val(hasil.pv_modul_power);
                    $('#pv_modul_today').val(hasil.pv_modul_today);
                    $('#pv_modul_acc').val(hasil.pv_modul_acc);
                }
            });
        });

        $('.grid').on('click', function() {
            $('#grid_volt_r, #grid_volt_s, #grid_volt_t').val('');
            $('#grid_current_r, #grid_current_s, #grid_current_t').val('');
            $('#grid_power_r, #grid_power_s, #grid_power_t').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('Plts_check_list/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#grid_volt_r').val(hasil.grid_volt_r);
                    $('#grid_volt_s').val(hasil.grid_volt_s);
                    $('#grid_volt_t').val(hasil.grid_volt_t);
                    $('#grid_current_r').val(hasil.grid_current_r);
                    $('#grid_current_s').val(hasil.grid_current_s);
                    $('#grid_current_t').val(hasil.grid_current_t);
                    $('#grid_power_r').val(hasil.grid_power_r);
                    $('#grid_power_s').val(hasil.grid_power_s);
                    $('#grid_power_t').val(hasil.grid_power_t);
                }
            });
        });

        $('.energy').on('click', function() {
            $('#energy_today, #energy_acc, #energy_eb').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('Plts_check_list/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#energy_today').val(hasil.energy_today);
                    $('#energy_acc').val(hasil.energy_acc);
                    $('#energy_eb').val(hasil.energy_eb);
                }
            });
        });

        $('.temp').on('click', function() {
            $('#temp_pv, #temp_ambien').val('');
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('Plts_check_list/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#temp_pv').val(hasil.temp_pv);
                    $('#temp_ambien').val(hasil.temp_ambien);
                }
            });
        });


    });
</script>