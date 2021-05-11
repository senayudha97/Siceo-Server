<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> Laporan Tiap Jam Sentral </h2>

            <a class="btn btn-primary  my-4" href="<?= base_url() . 'Log_ampenan_niigata_engine/add'; ?>"> Input Data </a>

            <table class="table table-hover table-responsive table-bordered text-center ">
                <tr class="bg-primary text-light">
                    <th scope="col" rowspan="4">Waktu</th>
                    <th scope="col" colspan="8">Tekanan (Kg/Cm2)</th>
                    <th scope="col" rowspan="5" colspan="3">ACTION</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="2" colspan="2">AIR PENDINGIN</th>
                    <th scope="row" rowspan="3">MINYAK PELUMAS MASUK MESIN</th>
                    <th scope="row" rowspan="2" colspan="2">UDARA BILAS </th>
                    <th scope="row" rowspan="3">BAHAN BAKAR MASUK MESIN</th>
                    <th scope="row" rowspan="3">MINYAK PELUMAS TUAS KATUP</th>
                    <th scope="row" rowspan="3">MINYAK PENDINGIN INJEKTOR</th>
                </tr>
                <tr class="bg-primary text-light">
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row">Masuk Mesin </th>
                    <th scope="row">Masuk Intercooler</th>
                    <th scope="row">A</th>
                    <th scope="row">B</th>
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
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_niigata_engine/edit')) ?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                        </td>
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_niigata_engine/detail')) ?>" class="btn btn-success btn-sm"><span class=<i class="fas fa-info-circle"></i>></span></a>&nbsp;
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></button>
                        </td>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>
</div>
</div>
 -->


<!-- update 20 Oktober 2020 by Septandita -->
<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Log_ampenan_niigata_engine/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= base_url() . 'Log_ampenan_niigata_engine/add'; ?>" class="btn btn-primary  mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                                <button type="submit" class="btn btn-danger rounded-0"><span class="fas fa-fw fa-file-pdf"></span>PDF</button>
                                &nbsp;
                                <button type="submit" name="excel" class="btn btn-success rounded-0"><span class="fas fa-fw fa-file-excel"></span>Excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12 ext1">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead class="textTable">
                    <th>No</th>
                    <th>Tanggal Input</th>
                    <th>Waktu</th>
                    <th>Mesin</th>
                    <th>Generator</th>
                    <th>Tekanan</th>
                    <th>Gas Buang</th>
                    <th>Load Limit Governor</th>
                    <th>Rack Bahan Bakar</th>
                    <th>Temperatur</th>
                    <th>KWH PS</th>
                    <th>Stand Flow Meter</th>
                    <th>Operator Regu</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row">
                                <?= $i; ?>
                            </td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['jam']; ?></td>
                            <td><?= $value['mesin']; ?></td>
                            <td><?= $value['generator']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm tekanan" data-id="<?= $value['pk_niigata_engine']; ?>" data-toggle="modal" data-target="#tekanan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</i></div></a>
                            </td>
                            <td><?= $value['gas_buang']; ?></td>
                            <td><?= $value['load_limit_governor']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm rack_bahan_bakar" data-id="<?= $value['pk_niigata_engine']; ?>" data-toggle="modal" data-target="#rack_bahan_bakar"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</i></div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm temperatur" data-id="<?= $value['pk_niigata_engine']; ?>" data-toggle="modal" data-target="#temperatur"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</i></div></a>
                            </td>
                            <td><?= $value['kwh_ps']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm stand_flow_meter" data-id="<?= $value['pk_niigata_engine']; ?>" data-toggle="modal" data-target="#stand_flow_meter"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</i></div></a>
                            </td>
                            <td><?= $value['operator']; ?></td>
                            <td>
                                <a href="<?php echo (base_url('log_ampenan_niigata_engine/edit/')) . $value['pk_niigata_engine'] ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_niigata_engine/delete/') . $value['pk_niigata_engine']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<div id="modal-hider">
    <!-- Modal Tekanan-->
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
                        <label class="col-sm-3 col-form-label">Air Pendingin</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_mesin" name="input[air_pendingin_mesin]" placeholder="Masuk Mesin">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_intercooler" name="input[air_pendingin_intercooler]" placeholder="Masuk Intercooler">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minyak_pelumas_masuk_mesin" class="col-sm-3 col-form-label">Minyak Pelumas Mesin</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <input readonly type="text" class="form-control" id="minyak_pelumas_masuk_mesin" name="input[minyak_pelumas_masuk_mesin]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Udara Bilas</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_bilas_a" name="input[udara_bilas_a]" placeholder="A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_bilas_b" name=" input[udara_bilas_b]" placeholder="B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahan_bakar_masuk_mesin" class="col-sm-3 col-form-label">Bahan Bakar Masuk Mesin</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <input readonly type="text" class="form-control" id="bahan_bakar_masuk_mesin" name="input[bahan_bakar_masuk_mesin]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minyak_pelumas_tuas_katup" class="col-sm-3 col-form-label">Minyak Pelumas Katup</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <input readonly type="text" class="form-control" id="minyak_pelumas_tuas_katup" name="input[minyak_pelumas_tuas_katup]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minyak_pendingin_injektor" class="col-sm-3 col-form-label">Minyak Pendingin Injektor</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <input readonly type="text" class="form-control" id="minyak_pendingin_injektor" name="input[minyak_pendingin_injektor]">
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

    <!-- modal Rack bahan bakar -->
    <div class="modal fade" id="rack_bahan_bakar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rack Bahan Bakar (mm)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Silinder A</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_1" name="input[silinder_sisi_a_1]" placeholder="1A">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_2" name="input[silinder_sisi_a_2]" placeholder="2A">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_3" name="input[silinder_sisi_a_3]" placeholder="3A">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_4" name="input[silinder_sisi_a_4]" placeholder="4A">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_5" name="input[silinder_sisi_a_5]" placeholder="5A">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_a_6" name="input[silinder_sisi_a_6]" placeholder="6A">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Silinder B</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_1" name="input[silinder_sisi_b_1]" placeholder="1B">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_2" name="input[silinder_sisi_b_2]" placeholder="2B">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_3" name="input[silinder_sisi_b_3]" placeholder="3B">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_4" name="input[silinder_sisi_b_4]" placeholder="4B">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_5" name="input[silinder_sisi_b_5]" placeholder="5B">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="silinder_sisi_b_6" name="input[silinder_sisi_b_6]" placeholder="6B">
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

    <!-- modal temperatur -->
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

                    <div class="form-group row">
                        <label for="bahan_bakar_mesin_masuk" class="col-sm-3 col-form-label">Bahan Bakar Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bahan_bakar_mesin_masuk" name="input[bahan_bakar_mesin_masuk]" placeholder="1A">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Minyak Pendingin Injektor</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pendingin_injektor_masuk" name="input[minyak_pendingin_injektor_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pendingin_injektor_keluar" name="input[minyak_pendingin_injektor_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Air Pendingin
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_1" name="input[air_pendingin_silinder_a_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_2" name="input[air_pendingin_silinder_a_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_3" name="input[air_pendingin_silinder_a_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_4" name="input[air_pendingin_silinder_a_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_5" name="input[air_pendingin_silinder_a_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_a_6" name="input[air_pendingin_silinder_a_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_1" name="input[air_pendingin_silinder_b_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_2" name="input[air_pendingin_silinder_b_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_3" name="input[air_pendingin_silinder_b_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_4" name="input[air_pendingin_silinder_b_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_5" name="input[air_pendingin_silinder_b_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_silinder_b_6" name="input[air_pendingin_silinder_b_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Udara
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Intercooler</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="udara_masuk_intercooler_a" name="input[udara_masuk_intercooler_a]" placeholder="A">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="udara_masuk_intercooler_b" name="input[udara_masuk_intercooler_b]" placeholder="B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Intercooler</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="udara_keluar_intercooler_a" name="input[udara_keluar_intercooler_a]" placeholder="A">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="udara_keluar_intercooler_b" name="input[udara_keluar_intercooler_b]" placeholder="B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Filter Blower</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" id="masuk_filter" name="input[masuk_filter]">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Radiator
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_minyak_pelumas_masuk" name="input[radiator_minyak_pelumas_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_minyak_pelumas_keluar" name="input[radiator_minyak_pelumas_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_air_pendingin_mesin_masuk" name="input[radiator_air_pendingin_mesin_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_air_pendingin_mesin_keluar" name="input[radiator_air_pendingin_mesin_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Air Pendingin Intercooler</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_air_pendingin_intercooler_masuk" name="input[radiator_air_pendingin_intercooler_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="radiator_air_pendingin_intercooler_keluar" name="input[radiator_air_pendingin_intercooler_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal stand flow meter -->
    <div class="modal fade" id="stand_flow_meter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Stand Flow Meter HSD/MFO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="hsd" class="col-sm-4 col-form-label">HSD</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="hsd" name="input[hsd]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mfo_in" class="col-sm-4 col-form-label">MFO IN</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="mfo_in" name="input[mfo_in]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mfo_return" class="col-sm-4 col-form-label">MFO RETURN</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="mfo_return" name="input[mfo_return]">
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

        $('.tekanan').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#air_pendingin_mesin').val(hasil.air_pendingin_mesin);
                    $('#air_pendingin_intercooler').val(hasil.air_pendingin_intercooler);
                    $('#minyak_pelumas_masuk_mesin').val(hasil.minyak_pelumas_masuk_mesin);
                    $('#udara_bilas_a').val(hasil.udara_bilas_a);
                    $('#udara_bilas_b').val(hasil.udara_bilas_b);
                    $('#bahan_bakar_masuk_mesin').val(hasil.bahan_bakar_masuk_mesin);
                    $('#minyak_pelumas_tuas_katup').val(hasil.minyak_pelumas_tuas_katup);
                    $('#minyak_pendingin_injektor').val(hasil.minyak_pendingin_injektor);
                }
            });
        });

        $('.rack_bahan_bakar').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#silinder_sisi_a_1').val(hasil.silinder_sisi_a_1);
                    $('#silinder_sisi_a_2').val(hasil.silinder_sisi_a_2);
                    $('#silinder_sisi_a_3').val(hasil.silinder_sisi_a_3);
                    $('#silinder_sisi_a_4').val(hasil.silinder_sisi_a_4);
                    $('#silinder_sisi_a_5').val(hasil.silinder_sisi_a_5);
                    $('#silinder_sisi_a_6').val(hasil.silinder_sisi_a_6);
                    $('#silinder_sisi_b_1').val(hasil.silinder_sisi_b_1);
                    $('#silinder_sisi_b_2').val(hasil.silinder_sisi_b_2);
                    $('#silinder_sisi_b_3').val(hasil.silinder_sisi_b_3);
                    $('#silinder_sisi_b_4').val(hasil.silinder_sisi_b_4);
                    $('#silinder_sisi_b_5').val(hasil.silinder_sisi_b_5);
                    $('#silinder_sisi_b_6').val(hasil.silinder_sisi_b_6);
                }
            });
        });

        $('.temperatur').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#bahan_bakar_mesin_masuk').val(hasil.bahan_bakar_mesin_masuk);
                    $('#minyak_pendingin_injektor_masuk').val(hasil.minyak_pendingin_injektor_masuk);
                    $('#minyak_pendingin_injektor_keluar').val(hasil.minyak_pendingin_injektor_keluar);
                    $('#air_pendingin_silinder_a_1').val(hasil.air_pendingin_silinder_a_1);
                    $('#air_pendingin_silinder_a_2').val(hasil.air_pendingin_silinder_a_2);
                    $('#air_pendingin_silinder_a_3').val(hasil.air_pendingin_silinder_a_3);
                    $('#air_pendingin_silinder_a_4').val(hasil.air_pendingin_silinder_a_4);
                    $('#air_pendingin_silinder_a_5').val(hasil.air_pendingin_silinder_a_5);
                    $('#air_pendingin_silinder_a_6').val(hasil.air_pendingin_silinder_a_6);
                    $('#air_pendingin_silinder_b_1').val(hasil.air_pendingin_silinder_b_1);
                    $('#air_pendingin_silinder_b_2').val(hasil.air_pendingin_silinder_b_2);
                    $('#air_pendingin_silinder_b_3').val(hasil.air_pendingin_silinder_b_3);
                    $('#air_pendingin_silinder_b_4').val(hasil.air_pendingin_silinder_b_4);
                    $('#air_pendingin_silinder_b_5').val(hasil.air_pendingin_silinder_b_5);
                    $('#air_pendingin_silinder_b_6').val(hasil.air_pendingin_silinder_b_6);
                    $('#udara_masuk_intercooler_a').val(hasil.udara_masuk_intercooler_a);
                    $('#udara_masuk_intercooler_b').val(hasil.udara_masuk_intercooler_b);
                    $('#udara_keluar_intercooler_a').val(hasil.udara_keluar_intercooler_a);
                    $('#udara_keluar_intercooler_b').val(hasil.udara_keluar_intercooler_b);
                    $('#masuk_filter').val(hasil.masuk_filter);
                    $('#radiator_minyak_pelumas_masuk').val(hasil.radiator_minyak_pelumas_masuk);
                    $('#radiator_minyak_pelumas_keluar').val(hasil.radiator_minyak_pelumas_keluar);
                    $('#radiator_air_pendingin_mesin_masuk').val(hasil.radiator_air_pendingin_mesin_masuk);
                    $('#radiator_air_pendingin_mesin_keluar').val(hasil.radiator_air_pendingin_mesin_keluar);
                    $('#radiator_air_pendingin_intercooler_masuk').val(hasil.radiator_air_pendingin_intercooler_masuk);
                    $('#radiator_air_pendingin_intercooler_keluar').val(hasil.radiator_air_pendingin_intercooler_keluar);
                }
            });
        });

        $('.stand_flow_meter').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_engine/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#hsd').val(hasil.hsd);
                    $('#mfo_in').val(hasil.mfo_in);
                    $('#mfo_return').val(hasil.mfo_return);
                }
            });
        });
    });
</script>