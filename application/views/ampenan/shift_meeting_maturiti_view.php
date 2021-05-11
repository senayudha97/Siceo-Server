<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('shift_meeting_maturiti/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('shift_meeting_maturiti/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                                <!-- <button type="submit" name="excel" class="btn btn-success "><span class="fas fa-fw fa-file-excel"></span>Excel</button> -->
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
                <thead>
                    <tr>
                        <th class="tg-0lax">No</th>
                        <th class="tg-0lax">Tanggal Input</th>
                        <th class="tg-0lax">Waktu</th>
                        <th class="tg-0lax">Priming Pump</th>
                        <th class="tg-0lax">Jaket Water</th>
                        <th class="tg-0lax">Raw Water</th>
                        <th class="tg-0lax">Injector Cooling</th>
                        <th class="tg-0lax">Booster Pump</th>
                        <th class="tg-0lax">Transfer Pump</th>
                        <th class="tg-0lax">Action</th>
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
                                <div class="btn btn-success btn-sm btn-sm priming_pump" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#priming_pump"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm jaket_water" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#jaket_water"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm raw_water" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#raw_water"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm injector_cooling" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#injector_cooling"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm booster_pump" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#booster_pump"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm transfer_pump" data-id="<?= $value['pk_shift_maturiti']; ?>" data-toggle="modal" data-target="#transfer_pump"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('shift_meeting_maturiti/edit/') . $value['pk_shift_maturiti']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('shift_meeting_maturiti/delete/') . $value['pk_shift_maturiti']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Priming pump-->
    <div class="modal fade" id="priming_pump" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Priming Pump</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Priming Pump A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_1" name="input[priming_pump_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_2" name="input[priming_pump_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_3" name="input[priming_pump_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_4" name="input[priming_pump_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_5" name="input[priming_pump_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_6" name="input[priming_pump_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_7" name="input[priming_pump_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_a_8" name="input[priming_pump_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="priming_pump_a_keterangan" name="input[priming_pump_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Priming Pump B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_1" name="input[priming_pump_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_2" name="input[priming_pump_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_3" name="input[priming_pump_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_4" name="input[priming_pump_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_5" name="input[priming_pump_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_6" name="input[priming_pump_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_7" name="input[priming_pump_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="priming_pump_b_8" name="input[priming_pump_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="priming_pump_b_keterangan" name="input[priming_pump_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal jaket water-->
    <div class="modal fade" id="jaket_water" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jaket Water</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jaket Water A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_1" name="input[jacket_water_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_2" name="input[jacket_water_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_3" name="input[jacket_water_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_4" name="input[jacket_water_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_5" name="input[jacket_water_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_6" name="input[jacket_water_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_7" name="input[jacket_water_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_a_8" name="input[jacket_water_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jacket_water_a_keterangan" name="input[jacket_water_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jaket Water B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_1" name="input[jacket_water_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_2" name="input[jacket_water_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_3" name="input[jacket_water_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_4" name="input[jacket_water_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_5" name="input[jacket_water_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_6" name="input[jacket_water_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_7" name="input[jacket_water_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="jacket_water_b_8" name="input[jacket_water_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jacket_water_b_keterangan" name="input[jacket_water_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Raw Water-->
    <div class="modal fade" id="raw_water" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Raw Water</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RAW Water A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_1" name="input[raw_water_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_2" name="input[raw_water_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_3" name="input[raw_water_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_4" name="input[raw_water_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_5" name="input[raw_water_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_6" name="input[raw_water_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_7" name="input[raw_water_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_a_8" name="input[raw_water_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="raw_water_a_keterangan" name="input[raw_water_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RAW Water B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_1" name="input[raw_water_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_2" name="input[raw_water_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_3" name="input[raw_water_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_4" name="input[raw_water_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_5" name="input[raw_water_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_6" name="input[raw_water_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_7" name="input[raw_water_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="raw_water_b_8" name="input[raw_water_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="raw_water_b_keterangan" name="input[raw_water_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Injector Cooling-->
    <div class="modal fade" id="injector_cooling" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Injector Cooling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Injector Cooling A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_1" name="input[injector_cooling_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_2" name="input[injector_cooling_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_3" name="input[injector_cooling_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_4" name="input[injector_cooling_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_5" name="input[injector_cooling_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_6" name="input[injector_cooling_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_7" name="input[injector_cooling_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_a_8" name="input[injector_cooling_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="injector_cooling_a_keterangan" name="input[injector_cooling_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Injector Cooling B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_1" name="input[injector_cooling_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_2" name="input[injector_cooling_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_3" name="input[injector_cooling_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_4" name="input[injector_cooling_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_5" name="input[injector_cooling_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_6" name="input[injector_cooling_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_7" name="input[injector_cooling_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="injector_cooling_b_8" name="input[injector_cooling_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="injector_cooling_b_keterangan" name="input[injector_cooling_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Booster Pump-->
    <div class="modal fade" id="booster_pump" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booster Pump</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Booster Pump A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_1" name="input[booster_pump_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_2" name="input[booster_pump_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_3" name="input[booster_pump_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_4" name="input[booster_pump_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_5" name="input[booster_pump_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_6" name="input[booster_pump_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_7" name="input[booster_pump_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_a_8" name="input[booster_pump_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="booster_pump_a_keterangan" name="input[booster_pump_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Booster Pump B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_1" name="input[booster_pump_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_2" name="input[booster_pump_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_3" name="input[booster_pump_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_4" name="input[booster_pump_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_5" name="input[booster_pump_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_6" name="input[booster_pump_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_7" name="input[booster_pump_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="booster_pump_b_8" name="input[booster_pump_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="booster_pump_b_keterangan" name="input[booster_pump_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Transfer Pump-->
    <div class="modal fade" id="transfer_pump" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transfer Pump</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Transfer Pump A</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_1" name="input[transfer_pump_a_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_2" name="input[transfer_pump_a_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_3" name="input[transfer_pump_a_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_4" name="input[transfer_pump_a_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_5" name="input[transfer_pump_a_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_6" name="input[transfer_pump_a_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_7" name="input[transfer_pump_a_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_a_8" name="input[transfer_pump_a_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="transfer_pump_a_keterangan" name="input[transfer_pump_a_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Transfer Pump B</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_1" name="input[transfer_pump_b_1]" placeholder="#1">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_2" name="input[transfer_pump_b_2]" placeholder="#2">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_3" name="input[transfer_pump_b_3]" placeholder="#3">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_4" name="input[transfer_pump_b_4]" placeholder="#4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_5" name="input[transfer_pump_b_5]" placeholder="#5">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_6" name="input[transfer_pump_b_6]" placeholder="#6">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_7" name="input[transfer_pump_b_7]" placeholder="#7">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="transfer_pump_b_8" name="input[transfer_pump_b_8]" placeholder="#8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="transfer_pump_b_keterangan" name="input[transfer_pump_b_keterangan]" placeholder="keterangan">
                                </div>
                            </div>
                        </li>
                    </ul>

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

            $('.priming_pump').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#priming_pump_a_1').val(hasil.priming_pump_a_1);
                        $('#priming_pump_a_2').val(hasil.priming_pump_a_2);
                        $('#priming_pump_a_3').val(hasil.priming_pump_a_3);
                        $('#priming_pump_a_4').val(hasil.priming_pump_a_4);
                        $('#priming_pump_a_5').val(hasil.priming_pump_a_5);
                        $('#priming_pump_a_6').val(hasil.priming_pump_a_6);
                        $('#priming_pump_a_7').val(hasil.priming_pump_a_7);
                        $('#priming_pump_a_8').val(hasil.priming_pump_a_8);
                        $('#priming_pump_a_keterangan').val(hasil.priming_pump_a_keterangan);
                        $('#priming_pump_b_1').val(hasil.priming_pump_b_1);
                        $('#priming_pump_b_2').val(hasil.priming_pump_b_2);
                        $('#priming_pump_b_3').val(hasil.priming_pump_b_3);
                        $('#priming_pump_b_4').val(hasil.priming_pump_b_4);
                        $('#priming_pump_b_5').val(hasil.priming_pump_b_5);
                        $('#priming_pump_b_6').val(hasil.priming_pump_b_6);
                        $('#priming_pump_b_7').val(hasil.priming_pump_b_7);
                        $('#priming_pump_b_8').val(hasil.priming_pump_b_8);
                        $('#priming_pump_b_keterangan').val(hasil.priming_pump_b_keterangan);
                    }
                });
            });

            $('.jaket_water').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#jacket_water_a_1').val(hasil.jacket_water_a_1);
                        $('#jacket_water_a_2').val(hasil.jacket_water_a_2);
                        $('#jacket_water_a_3').val(hasil.jacket_water_a_3);
                        $('#jacket_water_a_4').val(hasil.jacket_water_a_4);
                        $('#jacket_water_a_5').val(hasil.jacket_water_a_5);
                        $('#jacket_water_a_6').val(hasil.jacket_water_a_6);
                        $('#jacket_water_a_7').val(hasil.jacket_water_a_7);
                        $('#jacket_water_a_8').val(hasil.jacket_water_a_8);
                        $('#jacket_water_a_keterangan').val(hasil.jacket_water_a_keterangan);
                        $('#jacket_water_b_1').val(hasil.jacket_water_b_1);
                        $('#jacket_water_b_2').val(hasil.jacket_water_b_2);
                        $('#jacket_water_b_3').val(hasil.jacket_water_b_3);
                        $('#jacket_water_b_4').val(hasil.jacket_water_b_4);
                        $('#jacket_water_b_5').val(hasil.jacket_water_b_5);
                        $('#jacket_water_b_6').val(hasil.jacket_water_b_6);
                        $('#jacket_water_b_7').val(hasil.jacket_water_b_7);
                        $('#jacket_water_b_8').val(hasil.jacket_water_b_8);
                        $('#jacket_water_b_keterangan').val(hasil.jacket_water_b_keterangan);
                    }
                });
            });

            $('.raw_water').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#raw_water_a_1').val(hasil.raw_water_a_1);
                        $('#raw_water_a_2').val(hasil.raw_water_a_2);
                        $('#raw_water_a_3').val(hasil.raw_water_a_3);
                        $('#raw_water_a_4').val(hasil.raw_water_a_4);
                        $('#raw_water_a_5').val(hasil.raw_water_a_5);
                        $('#raw_water_a_6').val(hasil.raw_water_a_6);
                        $('#raw_water_a_7').val(hasil.raw_water_a_7);
                        $('#raw_water_a_8').val(hasil.raw_water_a_8);
                        $('#raw_water_a_keterangan').val(hasil.raw_water_a_keterangan);
                        $('#raw_water_b_1').val(hasil.raw_water_b_1);
                        $('#raw_water_b_2').val(hasil.raw_water_b_2);
                        $('#raw_water_b_3').val(hasil.raw_water_b_3);
                        $('#raw_water_b_4').val(hasil.raw_water_b_4);
                        $('#raw_water_b_5').val(hasil.raw_water_b_5);
                        $('#raw_water_b_6').val(hasil.raw_water_b_6);
                        $('#raw_water_b_7').val(hasil.raw_water_b_7);
                        $('#raw_water_b_8').val(hasil.raw_water_b_8);
                        $('#raw_water_b_keterangan').val(hasil.raw_water_b_keterangan);
                    }
                });
            });

            $('.injector_cooling').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#injector_cooling_a_1').val(hasil.injector_cooling_a_1);
                        $('#injector_cooling_a_2').val(hasil.injector_cooling_a_2);
                        $('#injector_cooling_a_3').val(hasil.injector_cooling_a_3);
                        $('#injector_cooling_a_4').val(hasil.injector_cooling_a_4);
                        $('#injector_cooling_a_5').val(hasil.injector_cooling_a_5);
                        $('#injector_cooling_a_6').val(hasil.injector_cooling_a_6);
                        $('#injector_cooling_a_7').val(hasil.injector_cooling_a_7);
                        $('#injector_cooling_a_8').val(hasil.injector_cooling_a_8);
                        $('#injector_cooling_a_keterangan').val(hasil.injector_cooling_a_keterangan);
                        $('#injector_cooling_b_1').val(hasil.injector_cooling_b_1);
                        $('#injector_cooling_b_2').val(hasil.injector_cooling_b_2);
                        $('#injector_cooling_b_3').val(hasil.injector_cooling_b_3);
                        $('#injector_cooling_b_4').val(hasil.injector_cooling_b_4);
                        $('#injector_cooling_b_5').val(hasil.injector_cooling_b_5);
                        $('#injector_cooling_b_6').val(hasil.injector_cooling_b_6);
                        $('#injector_cooling_b_7').val(hasil.injector_cooling_b_7);
                        $('#injector_cooling_b_8').val(hasil.injector_cooling_b_8);
                        $('#injector_cooling_b_keterangan').val(hasil.injector_cooling_b_keterangan);
                    }
                });
            });

            $('.booster_pump').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#booster_pump_a_1').val(hasil.booster_pump_a_1);
                        $('#booster_pump_a_2').val(hasil.booster_pump_a_2);
                        $('#booster_pump_a_3').val(hasil.booster_pump_a_3);
                        $('#booster_pump_a_4').val(hasil.booster_pump_a_4);
                        $('#booster_pump_a_5').val(hasil.booster_pump_a_5);
                        $('#booster_pump_a_6').val(hasil.booster_pump_a_6);
                        $('#booster_pump_a_7').val(hasil.booster_pump_a_7);
                        $('#booster_pump_a_8').val(hasil.booster_pump_a_8);
                        $('#booster_pump_a_keterangan').val(hasil.booster_pump_a_keterangan);
                        $('#booster_pump_b_1').val(hasil.booster_pump_b_1);
                        $('#booster_pump_b_2').val(hasil.booster_pump_b_2);
                        $('#booster_pump_b_3').val(hasil.booster_pump_b_3);
                        $('#booster_pump_b_4').val(hasil.booster_pump_b_4);
                        $('#booster_pump_b_5').val(hasil.booster_pump_b_5);
                        $('#booster_pump_b_6').val(hasil.booster_pump_b_6);
                        $('#booster_pump_b_7').val(hasil.booster_pump_b_7);
                        $('#booster_pump_b_8').val(hasil.booster_pump_b_8);
                        $('#booster_pump_b_keterangan').val(hasil.booster_pump_b_keterangan);
                    }
                });
            });

            $('.transfer_pump').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('shift_meeting_maturiti/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#transfer_pump_a_1').val(hasil.transfer_pump_a_1);
                        $('#transfer_pump_a_2').val(hasil.transfer_pump_a_2);
                        $('#transfer_pump_a_3').val(hasil.transfer_pump_a_3);
                        $('#transfer_pump_a_4').val(hasil.transfer_pump_a_4);
                        $('#transfer_pump_a_5').val(hasil.transfer_pump_a_5);
                        $('#transfer_pump_a_6').val(hasil.transfer_pump_a_6);
                        $('#transfer_pump_a_7').val(hasil.transfer_pump_a_7);
                        $('#transfer_pump_a_8').val(hasil.transfer_pump_a_8);
                        $('#transfer_pump_a_keterangan').val(hasil.transfer_pump_a_keterangan);
                        $('#transfer_pump_b_1').val(hasil.transfer_pump_b_1);
                        $('#transfer_pump_b_2').val(hasil.transfer_pump_b_2);
                        $('#transfer_pump_b_3').val(hasil.transfer_pump_b_3);
                        $('#transfer_pump_b_4').val(hasil.transfer_pump_b_4);
                        $('#transfer_pump_b_5').val(hasil.transfer_pump_b_5);
                        $('#transfer_pump_b_6').val(hasil.transfer_pump_b_6);
                        $('#transfer_pump_b_7').val(hasil.transfer_pump_b_7);
                        $('#transfer_pump_b_8').val(hasil.transfer_pump_b_8);
                        $('#transfer_pump_b_keterangan').val(hasil.transfer_pump_b_keterangan);
                    }
                });
            });
        });
    </script>