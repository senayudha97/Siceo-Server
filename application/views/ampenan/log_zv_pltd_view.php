<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> Laporan Tiap Jam Sentral </h2>

            <a class="btn btn-primary  my-4" href="<?= base_url() . 'Log_ampenan_zv_pltd/add'; ?>"> Input Data </a>

            <table class="table table-hover table-responsive table-bordered text-center ">
                <tr class="bg-primary text-light">
                    <th scope="col" rowspan="4">Waktu</th>
                    <th scope="col" colspan="12">TEMPERATUR</th>
                    <th scope="col" rowspan="5" colspan="3">ACTION</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="2" colspan="2">UDARA MASUK</th>
                    <th scope="row" colspan="4">OLI</th>
                    <th scope="row" colspan="6">AIR PENDINGIN</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" colspan="2"> MASUK MESIN </th>
                    <th scope="row" colspan="2"> RADIATOR </th>
                    <th scope="row" colspan="2"> MASUK MESIN </th>
                    <th scope="row" colspan="2"> RADIATOR </th>
                    <th scope="row" colspan="2"> INJEKTOR </th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row">SISI A </th>
                    <th scope="row">SISI B </th>
                    <th scope="row"> A </th>
                    <th scope="row"> B </th>
                    <th scope="row"> MASUK </th>
                    <th scope="row"> KELUAR </th>
                    <th scope="row"> A </th>
                    <th scope="row"> B </th>
                    <th scope="row"> MASUK </th>
                    <th scope="row"> KELUAR </th>
                    <th scope="row"> MASUK </th>
                    <th scope="row"> KELUAR </th>

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
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_zv_pltd/edit')) ?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                        </td>
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_zv_pltd/detail')) ?>" class="btn btn-success btn-sm"><span class=<i class="fas fa-info-circle"></i>></span></a>&nbsp;
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
</div> -->

<!-- update 1 november 2020 by Septandita -->
<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Log_ampenan_zv_pltd/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('Log_ampenan_zv_pltd/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Temperatur</th>
                        <th>Rack Bahan Bakar</th>
                        <th>Governor Load Limit</th>
                        <th>Tekanan</th>
                        <th>Putaran Turbo</th>
                        <th>Tekanan Oli pada Separator</th>
                        <th>Ampere Pompa Ali</th>
                        <th>Ampere Pompa JW</th>
                        <th>Sikap Flow Meter Bahan Bakar</th>
                        <th>Operator</th>
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
                            <td>
                                <div class="btn btn-success btn-sm temperatur" data-id="<?= $value['pk_zv_pltd']; ?>" data-toggle="modal" data-target="#temperatur"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['rack_bahan_bakar']; ?></td>
                            <td><?= $value['governor_load_limit']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm tekanan" data-id="<?= $value['pk_zv_pltd']; ?>" data-toggle="modal" data-target="#tekanan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm putaran_turbo" data-id="<?= $value['pk_zv_pltd']; ?>" data-toggle="modal" data-target="#putaran_turbo"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['tekanan_oli_pada_separator']; ?></td>
                            <td><?= $value['ampere_pompa_ali']; ?></td>
                            <td><?= $value['ampere_pompa_jw']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm sikap_flow_meter_bahan_bakar" data-id="<?= $value['pk_zv_pltd']; ?>" data-toggle="modal" data-target="#sikap_flow_meter_bahan_bakar"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['operator']; ?></td>
                            <td>
                                <a href="<?php echo (base_url('log_ampenan_zv_pltd/edit/')) . $value['pk_zv_pltd'] ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_zv_pltd/delete/') . $value['pk_zv_pltd']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal_hider">

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
                        <label class="col-sm-3 col-form-label">Udara Masuk</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_sisi_a" name="input[udara_masuk_sisi_a]" placeholder="Sisi A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_sisi_b" name="input[udara_masuk_sisi_b]" placeholder="Sisi B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">Oli</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="oli_masuk_mesin_a" name="input[oli_masuk_mesin_a]" placeholder="A">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="oli_masuk_mesin_b" name="input[oli_masuk_mesin_b]" placeholder="B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Radiator</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="oli_radiator_masuk" name="input[oli_radiator_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="oli_radiator_keluar" name="input[oli_radiator_keluar]" placeholder="Keluar">
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
                        <div class="card-header">Air Pendingin</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_masuk_mesin_a" name="input[air_pendingin_masuk_mesin_a]" placeholder="A">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_masuk_mesin_b" name="input[air_pendingin_masuk_mesin_b]" placeholder="B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Radiator</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_radiator_masuk" name="input[air_pendingin_radiator_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_radiator_keluar" name="input[air_pendingin_radiator_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Injektor</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_injektor_masuk" name="input[air_pendingin_injektor_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_injektor_keluar" name="input[air_pendingin_injektor_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar silinder Sisi A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_1" name="input[air_pendingin_keluar_silinder_sisi_a_1]" placeholder="1A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_2" name="input[air_pendingin_keluar_silinder_sisi_a_2]" placeholder="2A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_3" name="input[air_pendingin_keluar_silinder_sisi_a_3]" placeholder="3A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_4" name="input[air_pendingin_keluar_silinder_sisi_a_4]" placeholder="4A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_5" name="input[air_pendingin_keluar_silinder_sisi_a_5]" placeholder="5A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a_6" name="input[air_pendingin_keluar_silinder_sisi_a_6]" placeholder="6A">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar silinder Sisi B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_1" name="input[air_pendingin_keluar_silinder_sisi_b_1]" placeholder="1B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_2" name="input[air_pendingin_keluar_silinder_sisi_b_2]" placeholder="2B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_3" name="input[air_pendingin_keluar_silinder_sisi_b_3]" placeholder="3B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_4" name="input[air_pendingin_keluar_silinder_sisi_b_4]" placeholder="4B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_5" name="input[air_pendingin_keluar_silinder_sisi_b_5]" placeholder="5B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b_6" name="input[air_pendingin_keluar_silinder_sisi_b_6]" placeholder="6B">
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
                        <div class="card-header">Gas Buang</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar silinder Sisi A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_1" name="input[gas_buang_keluar_silinder_sisi_a_1]" placeholder="1A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_2" name="input[gas_buang_keluar_silinder_sisi_a_2]" placeholder="2A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_3" name="input[gas_buang_keluar_silinder_sisi_a_3]" placeholder="3A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_4" name="input[gas_buang_keluar_silinder_sisi_a_4]" placeholder="4A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_5" name="input[gas_buang_keluar_silinder_sisi_a_5]" placeholder="5A">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_6" name="input[gas_buang_keluar_silinder_sisi_a_6]" placeholder="6A">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar silinder Sisi B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_1" name="input[gas_buang_keluar_silinder_sisi_b_1]" placeholder="1B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_2" name="input[gas_buang_keluar_silinder_sisi_b_2]" placeholder="2B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_3" name="input[gas_buang_keluar_silinder_sisi_b_3]" placeholder="3B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_4" name="input[gas_buang_keluar_silinder_sisi_b_4]" placeholder="4B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_5" name="input[gas_buang_keluar_silinder_sisi_b_5]" placeholder="5B">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_6" name="input[gas_buang_keluar_silinder_sisi_b_6]" placeholder="6B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Main Bearing</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_1" name="input[main_bearing_1]" placeholder="1">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_2" name="input[main_bearing_2]" placeholder="2">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_3" name="input[main_bearing_3]" placeholder="3">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_4" name="input[main_bearing_4]" placeholder="4">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_5" name="input[main_bearing_5]" placeholder="5">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_6" name="input[main_bearing_6]" placeholder="6">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_7" name="input[main_bearing_7]" placeholder="7">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_8" name="input[main_bearing_8]" placeholder="8">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <input readonly type="text" class="form-control" id="main_bearing_9" name="input[main_bearing_9]" placeholder="9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">Turbo</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_a_masuk" name="input[turbo_a_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_a_keluar" name="input[turbo_a_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_b_masuk" name="input[turbo_b_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_b_keluar" name="input[turbo_b_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_keluar_a" name="input[turbo_keluar_a]" placeholder="A">
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <input readonly type="text" class="form-control" id="turbo_keluar_b" name="input[turbo_keluar_b]" placeholder="B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="air_pendingin_keluar_mesin" class="col-sm-3 col-form-label">Air Pendingin Keluar Mesin</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="air_pendingin_keluar_mesin" name="input[air_pendingin_keluar_mesin]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahan_bakar_masuk_mesin" class="col-sm-3 col-form-label">Bahan Bakar Masuk Mesin</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="bahan_bakar_masuk_mesin" name="input[bahan_bakar_masuk_mesin]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal tekanan -->
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
                        <label for="udara_start" class="col-sm-3 col-form-label">Udara Start</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_start" name="input[udara_start]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pressure Udara Masuk</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="presure_udara_masuk_sisi_a" name="input[presure_udara_masuk_sisi_a]" placeholder="Sisi A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="presure_udara_masuk_sisi_b" name="input[presure_udara_masuk_sisi_b]" placeholder="Sisi B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="udara_masuk_ab" class="col-sm-3 col-form-label">Udara Masuk A&B</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_masuk_ab" name="input[udara_masuk_ab]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahan_bakar_masuk_mesin" class="col-sm-3 col-form-label">Bahan Bakar Masuk Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bahan_bakar_masuk_mesin1" name="input[bahan_bakar_masuk_mesin1]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minyak_pelumas" class="col-sm-3 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="minyak_pelumas" name="input[minyak_pelumas]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pendingin_mesin" class="col-sm-3 col-form-label">Air Pendingin Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pendingin_mesin" name="input[air_pendingin_mesin]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pendingin_injektor" class="col-sm-3 col-form-label">Air Pendingin Injektor</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pendingin_injektor" name="input[air_pendingin_injektor]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Udara Masuk Disalurkan</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_disalurkan_sisi_a" name="input[udara_masuk_disalurkan_sisi_a]" placeholder="Sisi A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_disalurkan_sisi_b" name="input[udara_masuk_disalurkan_sisi_b]" placeholder="Sisi B">
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

    <!-- modal putaran turbo -->
    <div class="modal fade" id="putaran_turbo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Putaran Turbo (RPM) X 1000</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="putaran_turbo_sisi_a" class="col-sm-3 col-form-label">Sisi A</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="putaran_turbo_sisi_a" name="input[putaran_turbo_sisi_a]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="putaran_turbo_sisi_b" class="col-sm-3 col-form-label">Sisi B</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="putaran_turbo_sisi_b" name="input[putaran_turbo_sisi_b]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sikap_flow_meter_bahan_bakar -->
    <div class="modal fade" id="sikap_flow_meter_bahan_bakar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sikap Flow-Meter Bahan Bakar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">MFO</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="mfo_in" name="input[mfo_in]" placeholder="In">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="mfo_return" name="input[mfo_return]" placeholder="Return">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hsd" class="col-sm-3 col-form-label">HSD</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="hsd" name="input[hsd]">
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

        $('.temperatur').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zv_pltd/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#udara_masuk_sisi_a').val(hasil.udara_masuk_sisi_a);
                    $('#udara_masuk_sisi_b').val(hasil.udara_masuk_sisi_b);
                    $('#oli_masuk_mesin_a').val(hasil.oli_masuk_mesin_a);
                    $('#oli_masuk_mesin_b').val(hasil.oli_masuk_mesin_b);
                    $('#oli_radiator_masuk').val(hasil.oli_radiator_masuk);
                    $('#oli_radiator_keluar').val(hasil.oli_radiator_keluar);
                    $('#air_pendingin_masuk_mesin_a').val(hasil.air_pendingin_masuk_mesin_a);
                    $('#air_pendingin_masuk_mesin_b').val(hasil.air_pendingin_masuk_mesin_b);
                    $('#air_pendingin_radiator_masuk').val(hasil.air_pendingin_radiator_masuk);
                    $('#air_pendingin_radiator_keluar').val(hasil.air_pendingin_radiator_keluar);
                    $('#air_pendingin_injektor_masuk').val(hasil.air_pendingin_injektor_masuk);
                    $('#air_pendingin_injektor_keluar').val(hasil.air_pendingin_injektor_keluar);
                    $('#air_pendingin_keluar_silinder_sisi_a_1').val(hasil.air_pendingin_keluar_silinder_sisi_a_1);
                    $('#air_pendingin_keluar_silinder_sisi_a_2').val(hasil.air_pendingin_keluar_silinder_sisi_a_2);
                    $('#air_pendingin_keluar_silinder_sisi_a_3').val(hasil.air_pendingin_keluar_silinder_sisi_a_3);
                    $('#air_pendingin_keluar_silinder_sisi_a_4').val(hasil.air_pendingin_keluar_silinder_sisi_a_4);
                    $('#air_pendingin_keluar_silinder_sisi_a_5').val(hasil.air_pendingin_keluar_silinder_sisi_a_5);
                    $('#air_pendingin_keluar_silinder_sisi_a_6').val(hasil.air_pendingin_keluar_silinder_sisi_a_6);
                    $('#air_pendingin_keluar_silinder_sisi_b_1').val(hasil.air_pendingin_keluar_silinder_sisi_b_1);
                    $('#air_pendingin_keluar_silinder_sisi_b_2').val(hasil.air_pendingin_keluar_silinder_sisi_b_2);
                    $('#air_pendingin_keluar_silinder_sisi_b_3').val(hasil.air_pendingin_keluar_silinder_sisi_b_3);
                    $('#air_pendingin_keluar_silinder_sisi_b_4').val(hasil.air_pendingin_keluar_silinder_sisi_b_4);
                    $('#air_pendingin_keluar_silinder_sisi_b_5').val(hasil.air_pendingin_keluar_silinder_sisi_b_5);
                    $('#air_pendingin_keluar_silinder_sisi_b_6').val(hasil.air_pendingin_keluar_silinder_sisi_b_6);
                    $('#gas_buang_keluar_silinder_sisi_a_1').val(hasil.gas_buang_keluar_silinder_sisi_a_1);
                    $('#gas_buang_keluar_silinder_sisi_a_2').val(hasil.gas_buang_keluar_silinder_sisi_a_2);
                    $('#gas_buang_keluar_silinder_sisi_a_3').val(hasil.gas_buang_keluar_silinder_sisi_a_3);
                    $('#gas_buang_keluar_silinder_sisi_a_4').val(hasil.gas_buang_keluar_silinder_sisi_a_4);
                    $('#gas_buang_keluar_silinder_sisi_a_5').val(hasil.gas_buang_keluar_silinder_sisi_a_5);
                    $('#gas_buang_keluar_silinder_sisi_a_6').val(hasil.gas_buang_keluar_silinder_sisi_a_6);
                    $('#gas_buang_keluar_silinder_sisi_b_1').val(hasil.gas_buang_keluar_silinder_sisi_b_1);
                    $('#gas_buang_keluar_silinder_sisi_b_2').val(hasil.gas_buang_keluar_silinder_sisi_b_2);
                    $('#gas_buang_keluar_silinder_sisi_b_3').val(hasil.gas_buang_keluar_silinder_sisi_b_3);
                    $('#gas_buang_keluar_silinder_sisi_b_4').val(hasil.gas_buang_keluar_silinder_sisi_b_4);
                    $('#gas_buang_keluar_silinder_sisi_b_5').val(hasil.gas_buang_keluar_silinder_sisi_b_5);
                    $('#gas_buang_keluar_silinder_sisi_b_6').val(hasil.gas_buang_keluar_silinder_sisi_b_6);
                    $('#main_bearing_1').val(hasil.main_bearing_1);
                    $('#main_bearing_2').val(hasil.main_bearing_2);
                    $('#main_bearing_3').val(hasil.main_bearing_3);
                    $('#main_bearing_4').val(hasil.main_bearing_4);
                    $('#main_bearing_5').val(hasil.main_bearing_5);
                    $('#main_bearing_6').val(hasil.main_bearing_6);
                    $('#main_bearing_7').val(hasil.main_bearing_7);
                    $('#main_bearing_8').val(hasil.main_bearing_8);
                    $('#main_bearing_9').val(hasil.main_bearing_9);
                    $('#turbo_a_masuk').val(hasil.turbo_a_masuk);
                    $('#turbo_a_keluar').val(hasil.turbo_a_keluar);
                    $('#turbo_b_masuk').val(hasil.turbo_b_masuk);
                    $('#turbo_b_keluar').val(hasil.turbo_b_keluar);
                    $('#turbo_keluar_a').val(hasil.turbo_keluar_a);
                    $('#turbo_keluar_b').val(hasil.turbo_keluar_b);
                    $('#air_pendingin_keluar_mesin').val(hasil.air_pendingin_keluar_mesin);
                    $('#bahan_bakar_masuk_mesin').val(hasil.bahan_bakar_masuk_mesin);
                }
            });
        });

        $('.tekanan').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zv_pltd/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#udara_start').val(hasil.udara_start);
                    $('#presure_udara_masuk_sisi_a').val(hasil.presure_udara_masuk_sisi_a);
                    $('#presure_udara_masuk_sisi_b').val(hasil.presure_udara_masuk_sisi_b);
                    $('#udara_masuk_ab').val(hasil.udara_masuk_ab);
                    $('#bahan_bakar_masuk_mesin1').val(hasil.bahan_bakar_masuk_mesin1);
                    $('#minyak_pelumas').val(hasil.minyak_pelumas);
                    $('#air_pendingin_mesin').val(hasil.air_pendingin_mesin);
                    $('#air_pendingin_injektor').val(hasil.air_pendingin_injektor);
                    $('#udara_masuk_disalurkan_sisi_a').val(hasil.udara_masuk_disalurkan_sisi_a);
                    $('#udara_masuk_disalurkan_sisi_b').val(hasil.udara_masuk_disalurkan_sisi_b);
                }
            });
        });

        $('.putaran_turbo').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zv_pltd/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#putaran_turbo_sisi_a').val(hasil.putaran_turbo_sisi_a);
                    $('#putaran_turbo_sisi_b').val(hasil.putaran_turbo_sisi_b);
                }
            });
        });

        $('.sikap_flow_meter_bahan_bakar').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_zv_pltd/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#mfo_in').val(hasil.mfo_in);
                    $('#mfo_return').val(hasil.mfo_return);
                    $('#hsd').val(hasil.hsd);
                }
            });
        });
    });
</script>