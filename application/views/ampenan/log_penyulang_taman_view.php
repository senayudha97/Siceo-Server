<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_penyulang_taman/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_penyulang_taman/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                <thead>
                    <tr>
                        <th class="tg-0lax" rowspan="2">No</th>
                        <th class="tg-0lax" rowspan="2">Tanggal Input</th>
                        <th class="tg-0lax" rowspan="2">Waktu</th>
                        <th class="tg-0lax" rowspan="2">COUPLE 20 KV TRAFO PIELSTICK</th>
                        <th class="tg-0lax" rowspan="2">FEEDER CILINAYA</th>
                        <th class="tg-0lax" rowspan="2">COUPLE A</th>
                        <th class="tg-0lax" rowspan="2">FEEDER BERTAIS</th>
                        <th class="tg-0lax" rowspan="2">COUPLE C</th>
                        <th class="tg-0lax" rowspan="2">TEGANGAN 20 KV RUSTON I &amp; II</th>
                        <th class="tg-0lax" rowspan="2">COUPLE C</th>
                        <th class="tg-0lax" rowspan="2">SEWA BATAM 1</th>
                        <th class="tg-0lax" rowspan="2">FEEDER BANDARA</th>
                        <th class="tg-0lax" colspan="3">EPICENTRUM </th>
                        <th class="tg-0lax" rowspan="2">FEEDER CAKRA KOTA</th>
                        <th class="tg-0lax" rowspan="2">FEEDER MATARAM</th>
                        <th class="tg-0lax" rowspan="2">COUPLE B</th>
                        <th class="tg-0lax" rowspan="2">SEWA BATAM 2</th>
                        <th class="tg-0lax" rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <td class="tg-0lax">INCOMING 1</td>
                        <td class="tg-0lax">OUT GOING</td>
                        <td class="tg-0lax">INCOMING 2</td>
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
                                <div class="btn btn-success btn-sm btn-sm trafo" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#trafo"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm cilinaya" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#cilinaya"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm couple_a" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#couple_a"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm bertais" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#bertais"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm couple_c1" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#couple_c1"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tegangan" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#tegangan"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm couple_c2" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#couple_c2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sewa_batam1" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#sewa_batam1"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm bandara" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#bandara"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm incoming1" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#incoming1"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm outgoing" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#outgoing"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm incoming2" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#incoming2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm cakra_kota" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#cakra_kota"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm mataram" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#mataram"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm couple_b" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#couple_b"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sewa_batam2" data-id="<?= $value['pk_penyulang_taman']; ?>" data-toggle="modal" data-target="#sewa_batam2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_ampenan_penyulang_taman/edit/') . $value['pk_penyulang_taman']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_penyulang_taman/delete/') . $value['pk_penyulang_taman']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal trafo-->
    <div class="modal fade" id="trafo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Couple 20 KV Trafo Pielstick</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="trafo_pielstick_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="trafo_pielstick_r" name="input[trafo_pielstick_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trafo_pielstick_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="trafo_pielstick_s" name="input[trafo_pielstick_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trafo_pielstick_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="trafo_pielstick_t" name="input[trafo_pielstick_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trafo_pielstick_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="trafo_pielstick_kw" name="input[trafo_pielstick_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal cilinaya-->
    <div class="modal fade" id="cilinaya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feeder Cilinaya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="feeder_cilinaya_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cilinaya_r" name="input[feeder_cilinaya_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cilinaya_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cilinaya_s" name="input[feeder_cilinaya_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cilinaya_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cilinaya_t" name="input[feeder_cilinaya_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cilinaya_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cilinaya_kw" name="input[feeder_cilinaya_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal couple_a-->
    <div class="modal fade" id="couple_a" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Couple A</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="couple_a_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_a_r" name="input[couple_a_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_a_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_a_s" name="input[couple_a_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_a_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_a_t" name="input[couple_a_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_a_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_a_kw" name="input[couple_a_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal bertais-->
    <div class="modal fade" id="bertais" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feeder Bertais</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="feeder_bertais_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bertais_r" name="input[feeder_bertais_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bertais_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bertais_s" name="input[feeder_bertais_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bertais_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bertais_t" name="input[feeder_bertais_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bertais_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bertais_kw" name="input[feeder_bertais_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal couple_c1-->
    <div class="modal fade" id="couple_c1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Couple C</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="couple_c1_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c1_r" name="input[couple_c1_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c1_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c1_s" name="input[couple_c1_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c1_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c1_t" name="input[couple_c1_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c1_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c1_kw" name="input[couple_c1_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal tegangan-->
    <div class="modal fade" id="tegangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tegangan 20 KV Ruston I dan II</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="tegangan_ruston_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="tegangan_ruston_r" name="input[tegangan_ruston_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tegangan_ruston_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="tegangan_ruston_s" name="input[tegangan_ruston_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tegangan_ruston_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="tegangan_ruston_t" name="input[tegangan_ruston_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tegangan_ruston_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="tegangan_ruston_kw" name="input[tegangan_ruston_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal couple_c2-->
    <div class="modal fade" id="couple_c2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Couple C</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="couple_c2_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c2_r" name="input[couple_c2_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c2_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c2_s" name="input[couple_c2_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c2_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c2_t" name="input[couple_c2_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_c2_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_c2_kw" name="input[couple_c2_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sewa_batam1-->
    <div class="modal fade" id="sewa_batam1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sewa Batam 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="sewa_batam1_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam1_r" name="input[sewa_batam1_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam1_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam1_s" name="input[sewa_batam1_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam1_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam1_t" name="input[sewa_batam1_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam1_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam1_kw" name="input[sewa_batam1_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal bandara-->
    <div class="modal fade" id="bandara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feeder Bandara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="feeder_bandara_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bandara_r" name="input[feeder_bandara_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bandara_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bandara_s" name="input[feeder_bandara_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bandara_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bandara_t" name="input[feeder_bandara_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_bandara_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_bandara_kw" name="input[feeder_bandara_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal incoming1-->
    <div class="modal fade" id="incoming1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Incoming 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="incoming1_import" class="col-sm-2 col-form-label">Import</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming1_import" name="input[incoming1_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="incoming1_export" class="col-sm-2 col-form-label">Export</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming1_export" name="input[incoming1_export]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="incoming1_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming1_kw" name="input[incoming1_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal outgoing-->
    <div class="modal fade" id="outgoing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Incoming 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="outgoing_import" class="col-sm-2 col-form-label">Import</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="outgoing_import" name="input[outgoing_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="outgoing_export" class="col-sm-2 col-form-label">Export</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="outgoing_export" name="input[outgoing_export]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="outgoing_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="outgoing_kw" name="input[outgoing_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal incoming2-->
    <div class="modal fade" id="incoming2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Incoming 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="incoming2_import" class="col-sm-2 col-form-label">Import</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming2_import" name="input[incoming2_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="incoming2_export" class="col-sm-2 col-form-label">Export</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming2_export" name="input[incoming2_export]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="incoming2_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="incoming2_kw" name="input[incoming2_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal cakra_kota-->
    <div class="modal fade" id="cakra_kota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feeder Cakra Kota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="feeder_cakra_kota_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cakra_kota_r" name="input[feeder_cakra_kota_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cakra_kota_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cakra_kota_s" name="input[feeder_cakra_kota_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cakra_kota_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cakra_kota_t" name="input[feeder_cakra_kota_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_cakra_kota_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_cakra_kota_kw" name="input[feeder_cakra_kota_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal mataram-->
    <div class="modal fade" id="mataram" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feeder Mataram</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="feeder_mataram_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_mataram_r" name="input[feeder_mataram_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_mataram_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_mataram_s" name="input[feeder_mataram_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_mataram_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_mataram_t" name="input[feeder_mataram_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feeder_mataram_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="feeder_mataram_kw" name="input[feeder_mataram_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal couple_b-->
    <div class="modal fade" id="couple_b" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Couple B</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="couple_b_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_b_r" name="input[couple_b_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_b_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_b_s" name="input[couple_b_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_b_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_b_t" name="input[couple_b_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="couple_b_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="couple_b_kw" name="input[couple_b_kw]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sewa_batam2-->
    <div class="modal fade" id="sewa_batam2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sewa Batam 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="sewa_batam2_r" class="col-sm-2 col-form-label">R</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam2_r" name="input[sewa_batam2_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam2_s" class="col-sm-2 col-form-label">S</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam2_s" name="input[sewa_batam2_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam2_t" class="col-sm-2 col-form-label">T</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam2_t" name="input[sewa_batam2_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewa_batam2_kw" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="sewa_batam2_kw" name="input[sewa_batam2_kw]">
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

            $('.trafo').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#trafo_pielstick_r').val(hasil.trafo_pielstick_r);
                        $('#trafo_pielstick_s').val(hasil.trafo_pielstick_s);
                        $('#trafo_pielstick_t').val(hasil.trafo_pielstick_t);
                        $('#trafo_pielstick_kw').val(hasil.trafo_pielstick_kw);
                    }
                });
            });

            $('.cilinaya').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#feeder_cilinaya_r').val(hasil.feeder_cilinaya_r);
                        $('#feeder_cilinaya_s').val(hasil.feeder_cilinaya_s);
                        $('#feeder_cilinaya_t').val(hasil.feeder_cilinaya_t);
                        $('#feeder_cilinaya_kw').val(hasil.feeder_cilinaya_kw);
                    }
                });
            });

            $('.couple_a').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#couple_a_r').val(hasil.couple_a_r);
                        $('#couple_a_s').val(hasil.couple_a_s);
                        $('#couple_a_t').val(hasil.couple_a_t);
                        $('#couple_a_kw').val(hasil.couple_a_kw);
                    }
                });
            });

            $('.bertais').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#feeder_bertais_r').val(hasil.feeder_bertais_r);
                        $('#feeder_bertais_s').val(hasil.feeder_bertais_s);
                        $('#feeder_bertais_t').val(hasil.feeder_bertais_t);
                        $('#feeder_bertais_kw').val(hasil.feeder_bertais_kw);
                    }
                });
            });

            $('.couple_c1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#couple_c1_r').val(hasil.couple_c1_r);
                        $('#couple_c1_s').val(hasil.couple_c1_s);
                        $('#couple_c1_t').val(hasil.couple_c1_t);
                        $('#couple_c1_kw').val(hasil.couple_c1_kw);
                    }
                });
            });

            $('.tegangan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tegangan_ruston_r').val(hasil.tegangan_ruston_r);
                        $('#tegangan_ruston_s').val(hasil.tegangan_ruston_s);
                        $('#tegangan_ruston_t').val(hasil.tegangan_ruston_t);
                        $('#tegangan_ruston_kw').val(hasil.tegangan_ruston_kw);
                    }
                });
            });

            $('.couple_c2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#couple_c2_r').val(hasil.couple_c2_r);
                        $('#couple_c2_s').val(hasil.couple_c2_s);
                        $('#couple_c2_t').val(hasil.couple_c2_t);
                        $('#couple_c2_kw').val(hasil.couple_c2_kw);
                    }
                });
            });

            $('.sewa_batam1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sewa_batam1_r').val(hasil.sewa_batam1_r);
                        $('#sewa_batam1_s').val(hasil.sewa_batam1_s);
                        $('#sewa_batam1_t').val(hasil.sewa_batam1_t);
                        $('#sewa_batam1_kw').val(hasil.sewa_batam1_kw);
                    }
                });
            });

            $('.bandara').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#feeder_bandara_r').val(hasil.feeder_bandara_r);
                        $('#feeder_bandara_s').val(hasil.feeder_bandara_s);
                        $('#feeder_bandara_t').val(hasil.feeder_bandara_t);
                        $('#feeder_bandara_kw').val(hasil.feeder_bandara_kw);
                    }
                });
            });

            $('.incoming1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#incoming1_import').val(hasil.incoming1_import);
                        $('#incoming1_export').val(hasil.incoming1_export);
                        $('#incoming1_kw').val(hasil.incoming1_kw);
                    }
                });
            });

            $('.incoming1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#outgoing_import').val(hasil.outgoing_import);
                        $('#outgoing_export').val(hasil.outgoing_export);
                        $('#outgoing_kw').val(hasil.outgoing_kw);
                    }
                });
            });

            $('.incoming2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#incoming2_import').val(hasil.incoming2_import);
                        $('#incoming2_export').val(hasil.incoming2_export);
                        $('#incoming2_kw').val(hasil.incoming2_kw);
                    }
                });
            });

            $('.cakra_kota').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#feeder_cakra_kota_r').val(hasil.feeder_cakra_kota_r);
                        $('#feeder_cakra_kota_s').val(hasil.feeder_cakra_kota_s);
                        $('#feeder_cakra_kota_t').val(hasil.feeder_cakra_kota_t);
                        $('#feeder_cakra_kota_kw').val(hasil.feeder_cakra_kota_kw);
                    }
                });
            });

            $('.mataram').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#feeder_mataram_r').val(hasil.feeder_mataram_r);
                        $('#feeder_mataram_s').val(hasil.feeder_mataram_s);
                        $('#feeder_mataram_t').val(hasil.feeder_mataram_t);
                        $('#feeder_mataram_kw').val(hasil.feeder_mataram_kw);
                    }
                });
            });

            $('.couple_b').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#couple_b_r').val(hasil.couple_b_r);
                        $('#couple_b_s').val(hasil.couple_b_s);
                        $('#couple_b_t').val(hasil.couple_b_t);
                        $('#couple_b_kw').val(hasil.couple_b_kw);
                    }
                });
            });

            $('.sewa_batam2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_taman/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sewa_batam2_r').val(hasil.sewa_batam2_r);
                        $('#sewa_batam2_s').val(hasil.sewa_batam2_s);
                        $('#sewa_batam2_t').val(hasil.sewa_batam2_t);
                        $('#sewa_batam2_kw').val(hasil.sewa_batam2_kw);
                    }
                });
            });
        });
    </script>