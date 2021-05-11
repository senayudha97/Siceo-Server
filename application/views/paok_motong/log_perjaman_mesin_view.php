<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Log_paok_motong_perjaman_mesin/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('Log_paok_motong_perjaman_mesin/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
        <div class="col-lg-12 ext1">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="tg-0pky" rowspan="3">No</th>
                        <th class="tg-0pky" rowspan="3">Tanggal Input</th>
                        <th class="tg-0pky" rowspan="3">Waktu</th>
                        <th class="tg-0pky" rowspan="3">User Input</th>
                        <th class="tg-0pky" colspan="5">Logsheet Mesin 1</th>
                        <th class="tg-0pky" colspan="8">Logsheet Mesin 2</th>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="4">Suhu ( ⁰ C )</td>
                        <td class="tg-0pky" rowspan="2">Flowmeter Bahan Bakar</td>
                        <td class="tg-0pky" rowspan="2">Suhu</td>
                        <td class="tg-0pky" rowspan="2">Rak BBM</td>
                        <td class="tg-0pky" rowspan="2">Governor Load Limit</td>
                        <td class="tg-0pky" rowspan="2">Tekanan</td>
                        <td class="tg-0pky" colspan="2">Putaran Turbo</td>
                        <td class="tg-0pky" rowspan="2">Temperatur Bearing</td>
                        <td class="tg-0pky" rowspan="2">Action</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky">Udara Masuk</td>
                        <td class="tg-0pky">Minyak Pelumas</td>
                        <td class="tg-0pky">Air Pendingin Mesin</td>
                        <td class="tg-0pky">Gas Buang Cylinder L</td>
                        <td class="tg-0pky">L</td>
                        <td class="tg-0pky">R</td>
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
                            <!-- logsheet mesin 1 -->
                            <td>
                                <div class="btn btn-success btn-sm udara_masuk" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#udara_masuk"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm minyak_pelumas" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#minyak_pelumas"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm air_pendingin" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#air_pendingin"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm gas_buang" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#gas_buang"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td><?= $value['flow_meter_bahan_bakar']; ?></td>

                            <!-- logsheet mesin 2 -->
                            <td>
                                <div class="btn btn-success btn-sm suhu" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#suhu"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td><?= $value['rak_bbm']; ?></td>
                            <td><?= $value['governor_load_limit']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm tekanan" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#tekanan"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td><?= $value['putaran_turbo_kiri']; ?></td>
                            <td><?= $value['putaran_turbo_kanan']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm bearing" data-id="<?= $value['pk_perjaman_mesin']; ?>" data-toggle="modal" data-target="#bearing"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('Log_paok_motong_perjaman_mesin/edit/') . $value['pk_perjaman_mesin']; ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('Log_paok_motong_perjaman_mesin/delete/') . $value['pk_perjaman_mesin']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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



<!-- Button trigger modal -->

<div id="modal_hider">
    <!-- modal udara_masuk -->
    <div class="modal fade" id="udara_masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Udara Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Udara Masuk</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_l" name="udara_masuk_l" placeholder="L">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_r" name="udara_masuk_r" placeholder="R">
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

    <!-- modal minyak_pelumas -->
    <div class="modal fade" id="minyak_pelumas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Minyak Pelumas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Masuk Mesin</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_masuk_mesin_l" name="minyak_pelumas_masuk_mesin_l" placeholder="L">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_masuk_mesin_r" name="minyak_pelumas_masuk_mesin_r" placeholder="R">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Radiator</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_radiator_masuk" name="minyak_pelumas_radiator_masuk" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="minyak_pelumas_radiator_keluar" name="minyak_pelumas_radiator_keluar" placeholder="Keluar">
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

    <!-- modal air_pendingin -->
    <div class="modal fade" id="air_pendingin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Air Pendingin Mesin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mesin Masuk</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_mesin_masuk_l" name="air_pendingin_mesin_masuk_l" placeholder="L">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_mesin_masuk_r" name="air_pendingin_mesin_masuk_r" placeholder="R">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Radiator</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_radiator_masuk" name="air_pendingin_radiator_masuk" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_radiator_keluar" name="air_pendingin_radiator_keluar" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Injektor</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_injektor_masuk" name="air_pendingin_injektor_masuk" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="air_pendingin_injektor_keluar" name="air_pendingin_injektor_keluar" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keluar Cylinder L</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_1" name="keluar_cylinder_l_1" placeholder="1">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_2" name="keluar_cylinder_l_2" placeholder="2">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_3" name="keluar_cylinder_l_3" placeholder="3">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_4" name="keluar_cylinder_l_4" placeholder="4">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_5" name="keluar_cylinder_l_5" placeholder="5">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_l_6" name="keluar_cylinder_l_6" placeholder="6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keluar Cylinder R</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_1" name="keluar_cylinder_r_1" placeholder="1">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_2" name="keluar_cylinder_r_2" placeholder="2">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_3" name="keluar_cylinder_r_3" placeholder="3">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_4" name="keluar_cylinder_r_4" placeholder="4">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_5" name="keluar_cylinder_r_5" placeholder="5">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="keluar_cylinder_r_6" name="keluar_cylinder_r_6" placeholder="6">
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

    <!-- modal gas_buang -->
    <div class="modal fade" id="gas_buang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gas Buang Cylinder L</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gas Buang Cylinder L</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_1" name="gas_buang_cylinder_l_1" placeholder="1">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_2" name="gas_buang_cylinder_l_2" placeholder="2">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_3" name="gas_buang_cylinder_l_3" placeholder="3">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_4" name="gas_buang_cylinder_l_4" placeholder="4">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_5" name="gas_buang_cylinder_l_5" placeholder="5">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas_buang_cylinder_l_6" name="gas_buang_cylinder_l_6" placeholder="6">
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

    <!-- Modal Suhu-->
    <div class="modal fade" id="suhu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suhu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gas Buang Cylinder</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas1" name="gas1">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas2" name="gas2">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas3" name="gas3">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas4" name="gas4">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas5" name="gas5">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="gas6" name="gas6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input_arus" class="col-sm-2 col-form-label">Turbo Masuk</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_masuk_kiri_atas" name="turbo_masuk_kiri_atas" placeholder="kiri atas">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_masuk_kiri_bawah" name="turbo_masuk_kiri_bawah" placeholder="kiri bawah">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_masuk_kanan_atas" name="turbo_masuk_kanan_atas" placeholder="kanan atas">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" class="form-control" id="turbo_masuk_kanan_bawah" name="turbo_masuk_kanan_bawah" placeholder="kanan bawah">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input readonly_arus" class="col-sm-2 col-form-label">Turbo Keluar</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="turbo_keluar_kiri" name="turbo_keluar_kiri" placeholder="kiri">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="turbo_keluar_kanan" name="turbo_keluar_kanan" placeholder="kanan">
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

    <!-- modal Tekanan (BAR) -->
    <div class="modal fade" id="tekanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tekanan (BAR)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="air_ped_injektor" class="col-sm-2 col-form-label">Air Ped. Injektor</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_ped_injektor" name="air_ped_injektor" placeholder="2 - 4,5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pelumasan_mesin" class="col-sm-2 col-form-label">Pelumasan Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="pelumasan_mesin" name="pelumasan_mesin" placeholder="4 - 7">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Udara Masuk</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_kiri" name="udara_masuk_kiri" placeholder="kiri">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="udara_masuk_kanan" name="udara_masuk_kanan" placeholder="kanan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahan_bakar_mesin" class="col-sm-2 col-form-label">Bahan Bakar Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bahan_bakar_mesin" name="bahan_bakar_mesin" placeholder="4 - 6">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="udara_masuk" class="col-sm-2 col-form-label">Udara Masuk</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_masuk" name="udara_masuk" placeholder="0.5 - 2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="udara_start" class="col-sm-2 col-form-label">Udara Start</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="udara_start" name="udara_start" placeholder="15 - 20">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="air_pend_masuk_mesin" class="col-sm-2 col-form-label">Air Pend. Masuk Mesin</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="air_pend_masuk_mesin" name="air_pend_masuk_mesin" placeholder="2 - 4.5">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Temperatur Bearing -->
    <div class="modal fade" id="bearing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Temperatur Bearing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="bearing1" class="col-sm-2 col-form-label">1</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing1" name="bearing1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing2" class="col-sm-2 col-form-label">2</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing2" name="bearing2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing3" class="col-sm-2 col-form-label">3</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing3" name="bearing3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing4" class="col-sm-2 col-form-label">4</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing4" name="bearing4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing5" class="col-sm-2 col-form-label">5</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing5" name="bearing5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing6" class="col-sm-2 col-form-label">6</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing6" name="bearing6">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing7" class="col-sm-2 col-form-label">7</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing7" name="bearing7">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bearing8" class="col-sm-2 col-form-label">8</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="bearing8" name="bearing8">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
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

        $('.udara_masuk').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#udara_masuk_l').val(hasil.udara_masuk_l);
                    $('#udara_masuk_r').val(hasil.udara_masuk_r);
                }
            });
        });

        $('.minyak_pelumas').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#minyak_pelumas_masuk_mesin_l').val(hasil.minyak_pelumas_masuk_mesin_l);
                    $('#minyak_pelumas_masuk_mesin_r').val(hasil.minyak_pelumas_masuk_mesin_r);
                    $('#minyak_pelumas_radiator_masuk').val(hasil.minyak_pelumas_radiator_masuk);
                    $('#minyak_pelumas_radiator_keluar').val(hasil.minyak_pelumas_radiator_keluar);
                }
            });
        });

        $('.air_pendingin').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#air_pendingin_mesin_masuk_l').val(hasil.air_pendingin_mesin_masuk_l);
                    $('#air_pendingin_mesin_masuk_r').val(hasil.air_pendingin_mesin_masuk_r);
                    $('#air_pendingin_radiator_masuk').val(hasil.air_pendingin_radiator_masuk);
                    $('#air_pendingin_radiator_keluar').val(hasil.air_pendingin_radiator_keluar);
                    $('#air_pendingin_injektor_masuk').val(hasil.air_pendingin_injektor_masuk);
                    $('#air_pendingin_injektor_keluar').val(hasil.air_pendingin_injektor_keluar);
                    $('#keluar_cylinder_l_1').val(hasil.keluar_cylinder_l_1);
                    $('#keluar_cylinder_l_2').val(hasil.keluar_cylinder_l_2);
                    $('#keluar_cylinder_l_3').val(hasil.keluar_cylinder_l_3);
                    $('#keluar_cylinder_l_4').val(hasil.keluar_cylinder_l_4);
                    $('#keluar_cylinder_l_5').val(hasil.keluar_cylinder_l_5);
                    $('#keluar_cylinder_l_6').val(hasil.keluar_cylinder_l_6);
                    $('#keluar_cylinder_r_1').val(hasil.keluar_cylinder_r_1);
                    $('#keluar_cylinder_r_2').val(hasil.keluar_cylinder_r_2);
                    $('#keluar_cylinder_r_3').val(hasil.keluar_cylinder_r_3);
                    $('#keluar_cylinder_r_4').val(hasil.keluar_cylinder_r_4);
                    $('#keluar_cylinder_r_5').val(hasil.keluar_cylinder_r_5);
                    $('#keluar_cylinder_r_6').val(hasil.keluar_cylinder_r_6);
                }
            });
        });

        $('.gas_buang').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#gas_buang_cylinder_l_1').val(hasil.gas_buang_cylinder_l_1);
                    $('#gas_buang_cylinder_l_2').val(hasil.gas_buang_cylinder_l_2);
                    $('#gas_buang_cylinder_l_3').val(hasil.gas_buang_cylinder_l_3);
                    $('#gas_buang_cylinder_l_4').val(hasil.gas_buang_cylinder_l_4);
                    $('#gas_buang_cylinder_l_5').val(hasil.gas_buang_cylinder_l_5);
                    $('#gas_buang_cylinder_l_6').val(hasil.gas_buang_cylinder_l_6);
                }
            });
        });

        $('.suhu').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#gas1').val(hasil.gas1);
                    $('#gas2').val(hasil.gas2);
                    $('#gas3').val(hasil.gas3);
                    $('#gas4').val(hasil.gas4);
                    $('#gas5').val(hasil.gas5);
                    $('#gas6').val(hasil.gas6);
                    $('#turbo_masuk_kiri_atas').val(hasil.turbo_masuk_kiri_atas);
                    $('#turbo_masuk_kiri_bawah').val(hasil.turbo_masuk_kiri_bawah);
                    $('#turbo_masuk_kanan_atas').val(hasil.turbo_masuk_kanan_atas);
                    $('#turbo_masuk_kanan_bawah').val(hasil.turbo_masuk_kanan_bawah);
                    $('#turbo_keluar_kiri').val(hasil.turbo_keluar_kiri);
                    $('#turbo_keluar_kanan').val(hasil.turbo_keluar_kanan);
                }
            });
        });

        $('.tekanan').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#air_ped_injektor').val(hasil.air_ped_injektor);
                    $('#pelumasan_mesin').val(hasil.pelumasan_mesin);
                    $('#udara_masuk_kiri').val(hasil.udara_masuk_kiri);
                    $('#udara_masuk_kanan').val(hasil.udara_masuk_kanan);
                    $('#bahan_bakar_mesin').val(hasil.bahan_bakar_mesin);
                    $('#udara_masuk').val(hasil.udara_masuk);
                    $('#udara_start').val(hasil.udara_start);
                    $('#air_pend_masuk_mesin').val(hasil.air_pend_masuk_mesin);
                }
            });
        });

        $('.bearing').on('click', function() {

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('Log_paok_motong_perjaman_mesin/ajax');  ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) {
                    var hasil = JSON.parse(data);
                    $('#bearing1').val(hasil.bearing1);
                    $('#bearing2').val(hasil.bearing2);
                    $('#bearing3').val(hasil.bearing3);
                    $('#bearing4').val(hasil.bearing4);
                    $('#bearing5').val(hasil.bearing5);
                    $('#bearing6').val(hasil.bearing6);
                    $('#bearing7').val(hasil.bearing7);
                    $('#bearing8').val(hasil.bearing8);
                }
            });
        });
    });
</script>