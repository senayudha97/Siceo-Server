<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('blanko_serah_terima_jaga/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('blanko_serah_terima_jaga/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th class="tg-0lax">Mesin Utama</th>
                        <th class="tg-0lax">Peralatan Bantu</th>
                        <th class="tg-0lax">Peralatan Tambahan</th>
                        <th class="tg-0lax">Info Pelumas</th>
                        <th class="tg-0lax">WTP</th>
                        <th class="tg-0lax">Tugas Jaga</th>
                        <th class="tg-0lax">Keterangan Tambahan</th>
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
                                <div class="btn btn-success btn-sm btn-sm mesin_utama" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#mesin_utama"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm peralatan_bantu" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#peralatan_bantu"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm peralatan_tambahan" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#peralatan_tambahan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm info_pelumas" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#info_pelumas"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm wtp" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#wtp"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tugas_jaga" data-id="<?= $value['pk_blanko_serah_terima_jaga']; ?>" data-toggle="modal" data-target="#tugas_jaga"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['keterangan_tambahan']; ?></td>
                            <td>
                                <a href="<?= base_url('blanko_serah_terima_jaga/edit/') . $value['pk_blanko_serah_terima_jaga']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('blanko_serah_terima_jaga/delete/') . $value['pk_blanko_serah_terima_jaga']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal mesin_utama-->
    <div class="modal fade" id="mesin_utama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mesin Utama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (I)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keadaan_1" name="input[sulzer_keadaan_1]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_1" name="input[sulzer_keterangan_1]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_buffer_1" name="input[sulzer_buffer_1]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_daily_1" name="input[sulzer_daily_1]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (II)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keadaan_2" name="input[sulzer_keadaan_2]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_2" name="input[sulzer_keterangan_2]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_buffer_2" name="input[sulzer_buffer_2]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_daily_2" name="input[sulzer_daily_2]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (III)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keadaan_3" name="input[sulzer_keadaan_3]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_3" name="input[sulzer_keterangan_3]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_buffer_3" name="input[sulzer_buffer_3]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_daily_3" name="input[sulzer_daily_3]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niigata (IV)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_keadaan_4" name="input[niigata_keadaan_4]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_keterangan_4" name="input[niigata_keterangan_4]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_buffer_4" name="input[niigata_buffer_4]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_daily_4" name="input[niigata_daily_4]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (V)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keadaan_5" name="input[new_sulzer_keadaan_5]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_5" name="input[new_sulzer_keterangan_5]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_buffer_5" name="input[new_sulzer_buffer_5]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_daily_5" name="input[new_sulzer_daily_5]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VI)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keadaan_6" name="input[new_sulzer_keadaan_6]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_6" name="input[new_sulzer_keterangan_6]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_buffer_6" name="input[new_sulzer_buffer_6]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_daily_6" name="input[new_sulzer_daily_6]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keadaan_7" name="input[new_sulzer_keadaan_7]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_7" name="input[new_sulzer_keterangan_7]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_buffer_7" name="input[new_sulzer_buffer_7]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_daily_7" name="input[new_sulzer_daily_7]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VIII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keadaan_8" name="input[new_sulzer_keadaan_8]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_8" name="input[new_sulzer_keterangan_8]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_buffer_8" name="input[new_sulzer_buffer_8]" placeholder="Tangki BBM Buffer">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_daily_8" name="input[new_sulzer_daily_8]" placeholder="Tangki BBM Daily">
                                        </div>
                                    </div>
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

    <!-- modal Peraltan bantu-->
    <div class="modal fade" id="peralatan_bantu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peralatan Bantu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (I)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_glacier_1" name="input[sulzer_glacier_1]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_separator_oli_1" name="input[sulzer_separator_oli_1]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_kompresor_1" name="input[sulzer_kompresor_1]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_bantu_1" name="input[sulzer_keterangan_bantu_1]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (II)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_glacier_2" name="input[sulzer_glacier_2]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_separator_oli_2" name="input[sulzer_separator_oli_2]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_kompresor_2" name="input[sulzer_kompresor_2]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_bantu_2" name="input[sulzer_keterangan_bantu_2]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (III)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_glacier_3" name="input[sulzer_glacier_3]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_separator_oli_3" name="input[sulzer_separator_oli_3]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_kompresor_3" name="input[sulzer_kompresor_3]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_keterangan_bantu_3" name="input[sulzer_keterangan_bantu_3]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niigata (IV)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_glacier_4" name="input[niigata_glacier_4]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_separator_oli_4" name="input[niigata_separator_oli_4]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_kompresor_4" name="input[niigata_kompresor_4]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_keterangan_bantu_4" name="input[niigata_keterangan_bantu_4]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (V)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_glacier_5" name="input[new_sulzer_glacier_5]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_separator_oli_5" name="input[new_sulzer_separator_oli_5]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_kompresor_5" name="input[new_sulzer_kompresor_5]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_bantu_5" name="input[new_sulzer_keterangan_bantu_5]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VI)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_glacier_6" name="input[new_sulzer_glacier_6]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_separator_oli_6" name="input[new_sulzer_separator_oli_6]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_kompresor_6" name="input[new_sulzer_kompresor_6]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_bantu_6" name="input[new_sulzer_keterangan_bantu_6]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_glacier_7" name="input[new_sulzer_glacier_7]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_separator_oli_7" name="input[new_sulzer_separator_oli_7]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_kompresor_7" name="input[new_sulzer_kompresor_7]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_bantu_7" name="input[new_sulzer_keterangan_bantu_7]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VIII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_glacier_8" name="input[new_sulzer_glacier_8]" placeholder="Glacier Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_separator_oli_8" name="input[new_sulzer_separator_oli_8]" placeholder="Separator Oli Normal / Tidak">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_kompresor_8" name="input[new_sulzer_kompresor_8]" placeholder="Kompresor">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_keterangan_bantu_8" name="input[new_sulzer_keterangan_bantu_8]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <ul class="list-group mt-3">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (I)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_jw_1" name="input[sulzer_jw_1]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_icw_1" name="input[sulzer_icw_1]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_rw_1" name="input[sulzer_rw_1]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_make_up_1" name="input[sulzer_make_up_1]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (II)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_jw_2" name="input[sulzer_jw_2]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_icw_2" name="input[sulzer_icw_2]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_rw_2" name="input[sulzer_rw_2]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_make_up_2" name="input[sulzer_make_up_2]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sulzer (III)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_jw_3" name="input[sulzer_jw_3]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_icw_3" name="input[sulzer_icw_3]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_rw_3" name="input[sulzer_rw_3]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="sulzer_make_up_3" name="input[sulzer_make_up_3]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niigata (IV)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_jw_4" name="input[niigata_jw_4]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_icw_4" name="input[niigata_icw_4]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_rw_4" name="input[niigata_rw_4]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="niigata_make_up_4" name="input[niigata_make_up_4]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (V)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_jw_5" name="input[new_sulzer_jw_5]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_icw_5" name="input[new_sulzer_icw_5]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_rw_5" name="input[new_sulzer_rw_5]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_make_up_5" name="input[new_sulzer_make_up_5]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VI)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_jw_6" name="input[new_sulzer_jw_6]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_icw_6" name="input[new_sulzer_icw_6]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_rw_6" name="input[new_sulzer_rw_6]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_make_up_6" name="input[new_sulzer_make_up_6]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_jw_7" name="input[new_sulzer_jw_7]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_icw_7" name="input[new_sulzer_icw_7]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_rw_7" name="input[new_sulzer_rw_7]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_make_up_7" name="input[new_sulzer_make_up_7]" placeholder="Make Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Sulzer (VIII)</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_jw_8" name="input[new_sulzer_jw_8]" placeholder="JW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_icw_8" name="input[new_sulzer_icw_8]" placeholder="ICW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_rw_8" name="input[new_sulzer_rw_8]" placeholder="RW">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="new_sulzer_make_up_8" name="input[new_sulzer_make_up_8]" placeholder="Make Up">
                                        </div>
                                    </div>
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

    <!-- modal Peralatan tambahan-->
    <div class="modal fade" id="peralatan_tambahan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peralatan Tambahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kabel Rool</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kabel_rool_keadaan" name="input[kabel_rool_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kabel_rool_keterangan" name="input[kabel_rool_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">TLP</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tlp_keadaan" name="input[tlp_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tlp_keterangan" name="input[tlp_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Radio HT</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="radio_ht_keadaan" name="input[radio_ht_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="radio_ht_keterangan" name="input[radio_ht_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kursi Pijat</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kursi_pijat_keadaan" name="input[kursi_pijat_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kursi_pijat_keterangan" name="input[kursi_pijat_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Thermo Gun</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="thermo_gun_keadaan" name="input[thermo_gun_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="thermo_gun_keterangan" name="input[thermo_gun_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Despenser</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="despenser_keadaan" name="input[despenser_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="despenser_keterangan" name="input[despenser_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kunci Inggris</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kunci_inggris_keadaan" name="input[kunci_inggris_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kunci_inggris_keterangan" name="input[kunci_inggris_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
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

    <!-- modal info pelumas-->
    <div class="modal fade" id="info_pelumas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info Pelumas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Salyx 430</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="salyx_430" name="input[salyx_430]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tangki ZA</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tangki_za" name="input[tangki_za]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tangki ZV</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tangki_zv" name="input[tangki_zv]">
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

    <!-- modal wtp-->
    <div class="modal fade" id="wtp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">WTP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bak Tampung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bak_tampung" name="input[bak_tampung]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bak Distribusi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bak_distribusi" name="input[bak_distribusi]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">R.O</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ro" name="input[ro]">
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

    <!-- modal tugas jaga-->
    <div class="modal fade" id="tugas_jaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tugas Jaga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_jp_1" name="input[tugas_jaga_jp_1]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_jp_2" name="input[tugas_jaga_jp_2]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_jm_1" name="input[tugas_jaga_jm_1]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_jm_2" name="input[tugas_jaga_jm_2]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_jm_3" name="input[tugas_jaga_jm_3]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Taman</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_taman_1" name="input[tugas_jaga_taman_1]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Taman</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tugas_jaga_taman_2" name="input[tugas_jaga_taman_2]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">HZ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hz_1" name="input[hz_1]">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">HZ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hz_2" name="input[hz_2]">
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

            $('.mesin_utama').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sulzer_keadaan_1').val(hasil.sulzer_keadaan_1);
                        $('#sulzer_keterangan_1').val(hasil.sulzer_keterangan_1);
                        $('#sulzer_buffer_1').val(hasil.sulzer_buffer_1);
                        $('#sulzer_daily_1').val(hasil.sulzer_daily_1);
                        $('#sulzer_keadaan_2').val(hasil.sulzer_keadaan_2);
                        $('#sulzer_keterangan_2').val(hasil.sulzer_keterangan_2);
                        $('#sulzer_buffer_2').val(hasil.sulzer_buffer_2);
                        $('#sulzer_daily_2').val(hasil.sulzer_daily_2);
                        $('#sulzer_keadaan_3').val(hasil.sulzer_keadaan_3);
                        $('#sulzer_keterangan_3').val(hasil.sulzer_keterangan_3);
                        $('#sulzer_buffer_3').val(hasil.sulzer_buffer_3);
                        $('#sulzer_daily_3').val(hasil.sulzer_daily_3);
                        $('#niigata_keadaan_4').val(hasil.niigata_keadaan_4);
                        $('#niigata_keterangan_4').val(hasil.niigata_keterangan_4);
                        $('#niigata_buffer_4').val(hasil.niigata_buffer_4);
                        $('#niigata_daily_4').val(hasil.niigata_daily_4);
                        $('#new_sulzer_keadaan_5').val(hasil.new_sulzer_keadaan_5);
                        $('#new_sulzer_keterangan_5').val(hasil.new_sulzer_keterangan_5);
                        $('#new_sulzer_buffer_5').val(hasil.new_sulzer_buffer_5);
                        $('#new_sulzer_daily_5').val(hasil.new_sulzer_daily_5);
                        $('#new_sulzer_keadaan_6').val(hasil.new_sulzer_keadaan_6);
                        $('#new_sulzer_keterangan_6').val(hasil.new_sulzer_keterangan_6);
                        $('#new_sulzer_buffer_6').val(hasil.new_sulzer_buffer_6);
                        $('#new_sulzer_daily_6').val(hasil.new_sulzer_daily_6);
                        $('#new_sulzer_keadaan_7').val(hasil.new_sulzer_keadaan_7);
                        $('#new_sulzer_keterangan_7').val(hasil.new_sulzer_keterangan_7);
                        $('#new_sulzer_buffer_7').val(hasil.new_sulzer_buffer_7);
                        $('#new_sulzer_daily_7').val(hasil.new_sulzer_daily_7);
                        $('#new_sulzer_keadaan_8').val(hasil.new_sulzer_keadaan_8);
                        $('#new_sulzer_keterangan_8').val(hasil.new_sulzer_keterangan_8);
                        $('#new_sulzer_buffer_8').val(hasil.new_sulzer_buffer_8);
                        $('#new_sulzer_daily_8').val(hasil.new_sulzer_daily_8);
                    }
                });
            });

            $('.peralatan_bantu').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sulzer_glacier_1').val(hasil.sulzer_glacier_1);
                        $('#sulzer_separator_oli_1').val(hasil.sulzer_separator_oli_1);
                        $('#sulzer_kompresor_1').val(hasil.sulzer_kompresor_1);
                        $('#sulzer_keterangan_bantu_1').val(hasil.sulzer_keterangan_bantu_1);
                        $('#sulzer_glacier_2').val(hasil.sulzer_glacier_2);
                        $('#sulzer_separator_oli_2').val(hasil.sulzer_separator_oli_2);
                        $('#sulzer_kompresor_2').val(hasil.sulzer_kompresor_2);
                        $('#sulzer_keterangan_bantu_2').val(hasil.sulzer_keterangan_bantu_2);
                        $('#sulzer_glacier_3').val(hasil.sulzer_glacier_3);
                        $('#sulzer_separator_oli_3').val(hasil.sulzer_separator_oli_3);
                        $('#sulzer_kompresor_3').val(hasil.sulzer_kompresor_3);
                        $('#sulzer_keterangan_bantu_3').val(hasil.sulzer_keterangan_bantu_3);
                        $('#niigata_glacier_4').val(hasil.niigata_glacier_4);
                        $('#niigata_separator_oli_4').val(hasil.niigata_separator_oli_4);
                        $('#niigata_kompresor_4').val(hasil.niigata_kompresor_4);
                        $('#niigata_keterangan_4').val(hasil.niigata_keterangan_4);
                        $('#new_sulzer_glacier_5').val(hasil.new_sulzer_glacier_5);
                        $('#new_sulzer_separator_oli_5').val(hasil.new_sulzer_separator_oli_5);
                        $('#new_sulzer_kompresor_5').val(hasil.new_sulzer_kompresor_5);
                        $('#new_sulzer_keterangan_bantu_5').val(hasil.new_sulzer_keterangan_bantu_5);
                        $('#new_sulzer_glacier_6').val(hasil.new_sulzer_glacier_6);
                        $('#new_sulzer_separator_oli_6').val(hasil.new_sulzer_separator_oli_6);
                        $('#new_sulzer_kompresor_6').val(hasil.new_sulzer_kompresor_6);
                        $('#new_sulzer_keterangan_bantu_6').val(hasil.new_sulzer_keterangan_bantu_6);
                        $('#new_sulzer_glacier_7').val(hasil.new_sulzer_glacier_7);
                        $('#new_sulzer_separator_oli_7').val(hasil.new_sulzer_separator_oli_7);
                        $('#new_sulzer_kompresor_7').val(hasil.new_sulzer_kompresor_7);
                        $('#new_sulzer_keterangan_bantu_7').val(hasil.new_sulzer_keterangan_bantu_7);
                        $('#new_sulzer_glacier_8').val(hasil.new_sulzer_glacier_8);
                        $('#new_sulzer_separator_oli_8').val(hasil.new_sulzer_separator_oli_8);
                        $('#new_sulzer_kompresor_8').val(hasil.new_sulzer_kompresor_8);
                        $('#new_sulzer_keterangan_bantu_8').val(hasil.new_sulzer_keterangan_bantu_8);
                        $('#sulzer_jw_1').val(hasil.sulzer_jw_1);
                        $('#sulzer_icw_1').val(hasil.sulzer_icw_1);
                        $('#sulzer_rw_1').val(hasil.sulzer_rw_1);
                        $('#sulzer_make_up_1').val(hasil.sulzer_make_up_1);
                        $('#sulzer_jw_2').val(hasil.sulzer_jw_2);
                        $('#sulzer_icw_2').val(hasil.sulzer_icw_2);
                        $('#sulzer_rw_2').val(hasil.sulzer_rw_2);
                        $('#sulzer_make_up_2').val(hasil.sulzer_make_up_2);
                        $('#sulzer_jw_3').val(hasil.sulzer_jw_3);
                        $('#sulzer_icw_3').val(hasil.sulzer_icw_3);
                        $('#sulzer_rw_3').val(hasil.sulzer_rw_3);
                        $('#sulzer_make_up_3').val(hasil.sulzer_make_up_3);
                        $('#niigata_jw_4').val(hasil.niigata_jw_4);
                        $('#niigata_icw_4').val(hasil.niigata_icw_4);
                        $('#niigata_rw_4').val(hasil.niigata_rw_4);
                        $('#niigata_make_up_4').val(hasil.niigata_make_up_4);
                        $('#new_sulzer_jw_5').val(hasil.new_sulzer_jw_5);
                        $('#new_sulzer_icw_5').val(hasil.new_sulzer_icw_5);
                        $('#new_sulzer_rw_5').val(hasil.new_sulzer_rw_5);
                        $('#new_sulzer_make_up_5').val(hasil.new_sulzer_make_up_5);
                        $('#new_sulzer_jw_6').val(hasil.new_sulzer_jw_6);
                        $('#new_sulzer_icw_6').val(hasil.new_sulzer_icw_6);
                        $('#new_sulzer_rw_6').val(hasil.new_sulzer_rw_6);
                        $('#new_sulzer_make_up_6').val(hasil.new_sulzer_make_up_6);
                        $('#new_sulzer_jw_7').val(hasil.new_sulzer_jw_7);
                        $('#new_sulzer_icw_7').val(hasil.new_sulzer_icw_7);
                        $('#new_sulzer_rw_7').val(hasil.new_sulzer_rw_7);
                        $('#new_sulzer_make_up_7').val(hasil.new_sulzer_make_up_7);
                        $('#new_sulzer_jw_8').val(hasil.new_sulzer_jw_8);
                        $('#new_sulzer_icw_8').val(hasil.new_sulzer_icw_8);
                        $('#new_sulzer_rw_8').val(hasil.new_sulzer_rw_8);
                        $('#new_sulzer_make_up_8').val(hasil.new_sulzer_make_up_8);
                    }
                });
            });

            $('.peralatan_tambahan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#kabel_rool_keadaan').val(hasil.kabel_rool_keadaan);
                        $('#kabel_rool_keterangan').val(hasil.kabel_rool_keterangan);
                        $('#tlp_keadaan').val(hasil.tlp_keadaan);
                        $('#tlp_keterangan').val(hasil.tlp_keterangan);
                        $('#radio_ht_keadaan').val(hasil.radio_ht_keadaan);
                        $('#radio_ht_keterangan').val(hasil.radio_ht_keterangan);
                        $('#kursi_pijat_keadaan').val(hasil.kursi_pijat_keadaan);
                        $('#kursi_pijat_keterangan').val(hasil.kursi_pijat_keterangan);
                        $('#thermo_gun_keadaan').val(hasil.thermo_gun_keadaan);
                        $('#thermo_gun_keterangan').val(hasil.thermo_gun_keterangan);
                        $('#despenser_keadaan').val(hasil.despenser_keadaan);
                        $('#despenser_keterangan').val(hasil.despenser_keterangan);
                        $('#kunci_inggris_keadaan').val(hasil.kunci_inggris_keadaan);
                        $('#kunci_inggris_keterangan').val(hasil.kunci_inggris_keterangan);
                    }
                });
            });

            $('.info_pelumas').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#salyx_430').val(hasil.salyx_430);
                        $('#tangki_za').val(hasil.tangki_za);
                        $('#tangki_zv').val(hasil.tangki_zv);
                    }
                });
            });

            $('.wtp').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#bak_tampung').val(hasil.bak_tampung);
                        $('#bak_distribusi').val(hasil.bak_distribusi);
                        $('#ro').val(hasil.ro);
                    }
                });
            });

            $('.tugas_jaga').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('blanko_serah_terima_jaga/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tugas_jaga_jp_1').val(hasil.tugas_jaga_jp_1);
                        $('#tugas_jaga_jp_2').val(hasil.tugas_jaga_jp_2);
                        $('#tugas_jaga_jm_1').val(hasil.tugas_jaga_jm_1);
                        $('#tugas_jaga_jm_2').val(hasil.tugas_jaga_jm_2);
                        $('#tugas_jaga_jm_3').val(hasil.tugas_jaga_jm_3);
                        $('#tugas_jaga_taman_1').val(hasil.tugas_jaga_taman_1);
                        $('#tugas_jaga_taman_2').val(hasil.tugas_jaga_taman_2);
                        $('#hz_1').val(hasil.hz_1);
                        $('#hz_2').val(hasil.hz_2);
                    }
                });
            });
        });
    </script>