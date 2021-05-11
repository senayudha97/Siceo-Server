<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> Laporan Tiap Jam Sentral </h2>

            <a class="btn btn-primary  my-4" href="<?= base_url() . 'Log_ampenan_niigata_generator/add'; ?>"> Input Data </a>

            <table class="table table-hover table-responsive table-bordered text-center">
                <tr class="bg-primary text-light">
                    <th scope="col" rowspan="4">Waktu</th>
                    <th scope="col" colspan="13">Generator</th>
                    <th scope="col" rowspan="4">Bearing</th>
                    <th scope="col" rowspan="5" colspan="3">Action</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="3"> Tegangan</th>
                    <th scope="row" rowspan="3">Frekuensi</th>
                    <th scope="row" rowspan="3">Faktor Daya</th>
                    <th scope="row" rowspan="3">Daya Semu</th>
                    <th scope="row" rowspan="3">Beban</th>
                    <th scope="row" rowspan="2" colspan="3">Arus</th>
                    <th scope="row" rowspan="2" colspan="2">Penguat Medan (Exciter)</th>
                    <th scope="row" colspan="3">Suhu Celcius</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="1" colspan="3"> Winding </th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row">R</th>
                    <th scope="row">S</th>
                    <th scope="row">T</th>
                    <th scope="row">Arus</th>
                    <th scope="row">Tegangan</th>
                    <th scope="row">1</th>
                    <th scope="row">2</th>
                    <th scope="row">3</th>
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
                <?php for ($i = 1; $i <= 5; $i++) : ?> <tr>
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
                            <a href="<?php echo (base_url('log_ampenan_niigata_generator/edit')) ?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                        </td>
                        <td>
                            <a href="<?php echo (base_url('log_ampenan_niigata_generator/detail')) ?>" class="btn btn-success btn-sm"><span class=<i class="fas fa-info-circle"></i>></span></a>&nbsp;
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

<!-- update 30 Oktober 2020 by Septandita -->
<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Log_ampenan_niigata_generator/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('Log_ampenan_niigata_generator/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Generator</th>
                        <th>Bearing</th>
                        <th>Pendingin Udara Generator</th>
                        <th>Putaran Turbo</th>
                        <th>Sikap KWH Meter HSD</th>
                        <th>Sikap KWH Meter MFO</th>
                        <th>Level Become</th>
                        <th>Daya</th>
                        <th>Temperatur</th>
                        <th>Operator</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row">
                                <?= $i; ?>
                            </td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm generator" data-toggle="modal" data-id="<?= $value['pk_niigata_generator']; ?>" data-target="#generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['bearing']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm pendingin_udara_generator" data-toggle="modal" data-id="<?= $value['pk_niigata_generator']; ?>" data-target="#pendingin_udara_generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm putaran_turbo" data-toggle="modal" data-id="<?= $value['pk_niigata_generator']; ?>" data-target="#putaran_turbo"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['sikap_kwh_meter_hsd']; ?></td>
                            <td><?= $value['sikap_kwh_meter_mfo']; ?></td>
                            <td><?= $value['level_become']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm daya" data-id="<?= $value['pk_niigata_generator']; ?>" data-toggle="modal" data-target="#daya"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm temperatur" data-toggle="modal" data-id="<?= $value['pk_niigata_generator']; ?>" data-target="#temperatur"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['operator']; ?></td>
                            <td>
                                <a href="<?php echo (base_url('log_ampenan_niigata_generator/edit/')) . $value['pk_niigata_generator'] ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_niigata_generator/delete/') . $value['pk_niigata_generator']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- Modal Generator-->
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
                        <label for="tegangan" class="col-sm-3 col-form-label">Tegangan</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="tegangan" name="input[tegangan]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="frekuensi" class="col-sm-3 col-form-label">Frekuensi</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="frekuensi" name="input[frekuensi]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faktor_daya" class="col-sm-3 col-form-label">Faktor Daya</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="faktor_daya" name="input[faktor_daya]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_semu" class="col-sm-3 col-form-label">Daya Semu</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_semu" name="input[daya_semu]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="beban" class="col-sm-3 col-form-label">Beban</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="beban" name="input[beban]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Arus (kA)</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_r" name="input[arus_r]" placeholder="R">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_s" name="input[arus_s]" placeholder="S">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_t" name="input[arus_t]" placeholder="T">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Penguat Medan</label>
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
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Suhu Winding</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="suhu_1" name="input[suhu_1]" placeholder="1">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="suhu_2" name="input[suhu_2]" placeholder="2">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="suhu_3" name="input[suhu_3]" placeholder="3">
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

    <!-- modal Pendingin Udara Generator -->
    <div class="modal fade" id="pendingin_udara_generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendingin Udara Generator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="pendingin_udara_generator_masuk" class="col-sm-3 col-form-label">Masuk</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="pendingin_udara_generator_masuk" name="input[pendingin_udara_generator_masuk]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pendingin_udara_generator_keluar" class="col-sm-3 col-form-label">Keluar</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="pendingin_udara_generator_keluar" name="input[pendingin_udara_generator_keluar]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Putaran Turbo -->
    <div class="modal fade" id="putaran_turbo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Putaran Turbo X 1000</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="putaran_turbo_a" class="col-sm-3 col-form-label">A</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="putaran_turbo_a" name="input[putaran_turbo_a]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="putaran_turbo_b" class="col-sm-3 col-form-label">B</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="putaran_turbo_b" name="input[putaran_turbo_b]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal DAya -->
    <div class="modal fade" id="daya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="daya_r" class="col-sm-3 col-form-label">R</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_r" name="input[daya_r]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_s" class="col-sm-3 col-form-label">S</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_s" name="input[daya_s]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_t" class="col-sm-3 col-form-label">T</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_t" name="input[daya_t]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_mw" class="col-sm-3 col-form-label">MW</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="daya_mw" name="input[daya_mw]">
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
                        <label class="col-sm-3 col-form-label">Air Pendingin Mesin</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_mesin_masuk" name="input[air_pendingin_mesin_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_mesin_keluar" name="input[air_pendingin_mesin_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_masuk" name="input[minyak_pelumas_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_keluar" name="input[minyak_pelumas_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Udara Bilas</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_bilas_A" name="input[udara_bilas_A]" placeholder="A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_bilas_B" name="input[udara_bilas_B]" placeholder="B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pendingin_udara_masuk" class="col-sm-3 col-form-label">Air Pendingin Udara Masuk</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pendingin_udara_masuk" name="input[air_pendingin_udara_masuk]">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">Gas Buang</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Silinder Sisi A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_1" name="input[silinder_sisi_A_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_2" name="input[silinder_sisi_A_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_3" name="input[silinder_sisi_A_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_4" name="input[silinder_sisi_A_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_5" name="input[silinder_sisi_A_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_A_6" name="input[silinder_sisi_A_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Silinder Sisi B</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_1" name="input[silinder_sisi_B_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_2" name="input[silinder_sisi_B_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_3" name="input[silinder_sisi_B_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_4" name="input[silinder_sisi_B_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_5" name="input[silinder_sisi_B_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="silinder_sisi_B_6" name="input[silinder_sisi_B_6]">
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
                        <label class="col-sm-3 col-form-label">Turbo</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_a_1_a" name="input[turbo_a_1_a]" placeholder="A">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_a_2_a" name="input[turbo_a_2_a]" placeholder="A">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_b_1_a" name="input[turbo_b_1_a]" placeholder="B">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_b_2_a" name="input[turbo_b_2_a]" placeholder="B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Turbo</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_a_1_b" name="input[turbo_a_1_b]" placeholder="A">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_a_2_b" name="input[turbo_a_2_b]" placeholder="A">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_b_1_b" name="input[turbo_b_1_b]" placeholder="B">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_b_2_b" name="input[turbo_b_2_b]" placeholder="B">
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
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
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
                    $('#arus_r').val(hasil.arus_r);
                    $('#arus_s').val(hasil.arus_s);
                    $('#arus_t').val(hasil.arus_t);
                    $('#penguat_medan_arus').val(hasil.penguat_medan_arus);
                    $('#penguat_medan_tegangan').val(hasil.penguat_medan_tegangan);
                    $('#suhu_1').val(hasil.suhu_1);
                    $('#suhu_2').val(hasil.suhu_2);
                    $('#suhu_3').val(hasil.suhu_3);
                }
            });
        });

        $('.pendingin_udara_generator').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pendingin_udara_generator_masuk').val(hasil.pendingin_udara_generator_masuk);
                    $('#pendingin_udara_generator_keluar').val(hasil.pendingin_udara_generator_keluar);
                }
            });
        });

        $('.generator').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pendingin_udara_generator_masuk').val(hasil.pendingin_udara_generator_masuk);
                    $('#pendingin_udara_generator_keluar').val(hasil.pendingin_udara_generator_keluar);
                }
            });
        });

        $('.putaran_turbo').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#putaran_turbo_a').val(hasil.putaran_turbo_a);
                    $('#putaran_turbo_b').val(hasil.putaran_turbo_b);
                }
            });
        });

        $('.daya').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#daya_r').val(hasil.daya_r);
                    $('#daya_s').val(hasil.daya_s);
                    $('#daya_t').val(hasil.daya_t);
                    $('#daya_mw').val(hasil.daya_mw);
                }
            });
        });

        $('.temperatur').on('click', function() {
            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('log_ampenan_niigata_generator/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#air_pendingin_mesin_masuk').val(hasil.air_pendingin_mesin_masuk);
                    $('#air_pendingin_mesin_keluar').val(hasil.air_pendingin_mesin_keluar);
                    $('#minyak_pelumas_masuk').val(hasil.minyak_pelumas_masuk);
                    $('#minyak_pelumas_keluar').val(hasil.minyak_pelumas_keluar);
                    $('#udara_bilas_A').val(hasil.udara_bilas_A);
                    $('#udara_bilas_B').val(hasil.udara_bilas_B);
                    $('#air_pendingin_udara_masuk').val(hasil.air_pendingin_udara_masuk);
                    $('#silinder_sisi_A_1').val(hasil.silinder_sisi_A_1);
                    $('#silinder_sisi_A_2').val(hasil.silinder_sisi_A_2);
                    $('#silinder_sisi_A_3').val(hasil.silinder_sisi_A_3);
                    $('#silinder_sisi_A_4').val(hasil.silinder_sisi_A_4);
                    $('#silinder_sisi_A_5').val(hasil.silinder_sisi_A_5);
                    $('#silinder_sisi_A_6').val(hasil.silinder_sisi_A_6);
                    $('#silinder_sisi_B_1').val(hasil.silinder_sisi_B_1);
                    $('#silinder_sisi_B_2').val(hasil.silinder_sisi_B_2);
                    $('#silinder_sisi_B_3').val(hasil.silinder_sisi_B_3);
                    $('#silinder_sisi_B_4').val(hasil.silinder_sisi_B_4);
                    $('#silinder_sisi_B_5').val(hasil.silinder_sisi_B_5);
                    $('#silinder_sisi_B_6').val(hasil.silinder_sisi_B_6);
                    $('#turbo_a_1_a').val(hasil.turbo_a_1_a);
                    $('#turbo_a_2_a').val(hasil.turbo_a_2_a);
                    $('#turbo_b_1_a').val(hasil.turbo_b_1_a);
                    $('#turbo_b_2_a').val(hasil.turbo_b_2_a);
                    $('#turbo_a_1_b').val(hasil.turbo_a_1_b);
                    $('#turbo_a_2_b').val(hasil.turbo_a_2_b);
                    $('#turbo_b_1_b').val(hasil.turbo_b_1_b);
                    $('#turbo_b_2_b').val(hasil.turbo_b_2_b);
                }
            });
        });
    });
</script>