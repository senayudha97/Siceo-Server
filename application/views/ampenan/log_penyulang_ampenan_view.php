<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_penyulang_ampenan/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_penyulang_ampenan/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>LCC</th>
                        <th>PS 9</th>
                        <th>PRAYA</th>
                        <th>SENGGIGI</th>
                        <th>KOPANG</th>
                        <th>GOMONG</th>
                        <th>KEDIRI</th>
                        <th>KOPEL TAMAN A</th>
                        <th>KOPEL AMPENAN - BIAU</th>
                        <th>SEWATAMA 1</th>
                        <th>SEWATAMA 2</th>
                        <th>KOPEL GI 1</th>
                        <th>KOPEL GI 2</th>
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
                                <div class="btn btn-success btn-sm btn-sm lcc" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#lcc"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm ps9" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#ps9"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm praya" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#praya"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm senggigi" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#senggigi"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kopang" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kopang"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm gomong" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#gomong"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kediri" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kediri"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kopel_taman_a" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kopel_taman_a"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kopel_ampenan_biau" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kopel_ampenan_biau"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sewatama1" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#sewatama1"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sewatama2" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#sewatama2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kopel_gi1" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kopel_gi1"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm kopel_gi2" data-id="<?= $value['pk_penyulang_ampenan']; ?>" data-toggle="modal" data-target="#kopel_gi2"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_ampenan_penyulang_ampenan/edit/') . $value['pk_penyulang_ampenan']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_penyulang_ampenan/delete/') . $value['pk_penyulang_ampenan']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal LCC-->
    <div class="modal fade" id="lcc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LCC</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="lcc_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="lcc_analog" name="input[lcc_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lcc_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="lcc_digital" name="input[lcc_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal PS 9-->
    <div class="modal fade" id="ps9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PS 9</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="ps9_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="ps9_analog" name="input[ps9_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ps9_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="ps9_digital" name="input[ps9_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal praya-->
    <div class="modal fade" id="praya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Praya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="praya_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="praya_analog" name="input[praya_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="praya_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="praya_digital" name="input[praya_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal senggigi-->
    <div class="modal fade" id="senggigi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Senggigi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="senggigi_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="senggigi_analog" name="input[senggigi_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="senggigi_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="senggigi_digital" name="input[senggigi_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal kopang-->
    <div class="modal fade" id="kopang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kopang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="kopang_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopang_analog" name="input[kopang_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kopang_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopang_digital" name="input[kopang_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal gomong-->
    <div class="modal fade" id="gomong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gomong</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="gomong_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="gomong_analog" name="input[gomong_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gomong_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="gomong_digital" name="input[gomong_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal kediri-->
    <div class="modal fade" id="kediri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kediri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="kediri_analog" class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kediri_analog" name="input[kediri_analog]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kediri_digital" class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kediri_digital" name="input[kediri_digital]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sewatama1-->
    <div class="modal fade" id="sewatama1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sewatama 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="sewatama1_import" class="col-sm-4 col-form-label">Import</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="sewatama1_import" name="input[sewatama1_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewatama1_export" class="col-sm-4 col-form-label">Export</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="sewatama1_export" name="input[sewatama1_export]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal sewatama2-->
    <div class="modal fade" id="sewatama2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sewatama 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="sewatama2_import" class="col-sm-4 col-form-label">Import</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="sewatama2_import" name="input[sewatama2_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sewatama2_export" class="col-sm-4 col-form-label">Export</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="sewatama2_export" name="input[sewatama2_export]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal kopel_gi1-->
    <div class="modal fade" id="kopel_gi1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kopel GI 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="kopel_gi1_import" class="col-sm-4 col-form-label">Import</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopel_gi1_import" name="input[kopel_gi1_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kopel_gi1_export" class="col-sm-4 col-form-label">Export</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopel_gi1_export" name="input[kopel_gi1_export]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal kopel_gi2-->
    <div class="modal fade" id="kopel_gi2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kopel GI 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="kopel_gi2_import" class="col-sm-4 col-form-label">Import</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopel_gi2_import" name="input[kopel_gi2_import]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kopel_gi2_export" class="col-sm-4 col-form-label">Export</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="kopel_gi2_export" name="input[kopel_gi2_export]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal kopel_taman_a-->
    <div class="modal fade" id="kopel_taman_a" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kopel Taman A</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_taman_a_analog_import" name="input[kopel_taman_a_analog_import]" placeholder="Import">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_taman_a_analog_export" name="input[kopel_taman_a_analog_export]" placeholder="Export">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_taman_a_digital_import" name="input[kopel_taman_a_digital_import]" placeholder="Import">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_taman_a_digital_export" name="input[kopel_taman_a_digital_export]" placeholder="Export">
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

    <!-- modal kopel_ampenan_biau-->
    <div class="modal fade" id="kopel_ampenan_biau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kopel Ampenan-Biau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Analog</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_ampenan_biau_analog_import" name="input[kopel_ampenan_biau_analog_import]" placeholder="Import">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_ampenan_biau_analog_export" name="input[kopel_ampenan_biau_analog_export]" placeholder="Export">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Digital</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_ampenan_biau_digital_import" name="input[kopel_ampenan_biau_digital_import]" placeholder="Import">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="kopel_ampenan_biau_digital_export" name="input[kopel_ampenan_biau_digital_export]" placeholder="Export">
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


    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "scrollX": true
            });

            $('.lcc').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#lcc_analog').val(hasil.lcc_analog);
                        $('#lcc_digital').val(hasil.lcc_digital);
                    }
                });
            });

            $('.ps9').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#ps9_analog').val(hasil.ps9_analog);
                        $('#ps9_digital').val(hasil.ps9_digital);
                    }
                });
            });

            $('.praya').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#praya_analog').val(hasil.praya_analog);
                        $('#praya_digital').val(hasil.praya_digital);
                    }
                });
            });

            $('.senggigi').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#senggigi_analog').val(hasil.senggigi_analog);
                        $('#senggigi_digital').val(hasil.senggigi_digital);
                    }
                });
            });

            $('.kopang').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kopang_analog').val(hasil.kopang_analog);
                        $('#kopang_digital').val(hasil.kopang_digital);
                    }
                });
            });

            $('.gomong').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#gomong_analog').val(hasil.gomong_analog);
                        $('#gomong_digital').val(hasil.gomong_digital);
                    }
                });
            });

            $('.kediri').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kediri_analog').val(hasil.kediri_analog);
                        $('#kediri_digital').val(hasil.kediri_digital);
                    }
                });
            });

            $('.kopel_taman_a').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kopel_taman_a_analog_import').val(hasil.kopel_taman_a_analog_import);
                        $('#kopel_taman_a_analog_export').val(hasil.kopel_taman_a_analog_export);
                        $('#kopel_taman_a_digital_import').val(hasil.kopel_taman_a_digital_import);
                        $('#kopel_taman_a_digital_export').val(hasil.kopel_taman_a_digital_export);
                    }
                });
            });

            $('.kopel_ampenan_biau').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kopel_ampenan_biau_analog_import').val(hasil.kopel_ampenan_biau_analog_import);
                        $('#kopel_ampenan_biau_analog_export').val(hasil.kopel_ampenan_biau_analog_export);
                        $('#kopel_ampenan_biau_digital_import').val(hasil.kopel_ampenan_biau_digital_import);
                        $('#kopel_ampenan_biau_digital_export').val(hasil.kopel_ampenan_biau_digital_export);
                    }
                });
            });

            $('.sewatama1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sewatama1_import').val(hasil.sewatama1_import);
                        $('#sewatama1_export').val(hasil.sewatama1_export);
                    }
                });
            });

            $('.sewatama2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sewatama2_import').val(hasil.sewatama2_import);
                        $('#sewatama2_export').val(hasil.sewatama2_export);
                    }
                });
            });

            $('.kopel_gi1').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kopel_gi1_import').val(hasil.kopel_gi1_import);
                        $('#kopel_gi1_export').val(hasil.kopel_gi1_export);
                    }
                });
            });

            $('.kopel_gi2').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_penyulang_ampenan/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kopel_gi2_import').val(hasil.kopel_gi2_import);
                        $('#kopel_gi2_export').val(hasil.kopel_gi2_export);
                    }
                });
            });
        });
    </script>