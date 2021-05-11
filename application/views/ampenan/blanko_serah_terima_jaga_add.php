<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('blanko_serah_terima_jaga/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[created_date]" value="<?= 'BST' . date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_blanko_serah_terima_jaga]" value="<?= 'BST' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input readonly type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal">
                        </div>
                        <div class="col-sm-5">
                            <input readonly type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Mesin Utama
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Peralatan Bantu
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Peralatan Tambahan
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Info Pelumas
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        WTP
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Tugas Jaga
                    </div>
                    <div class="card-body">
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
                </div>
                <div class="form-group row mt-3">
                    <label for="keterangan_tambahan" class="col-sm-2 col-form-label">Keterangan Tambahan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterangan_tambahan]" name="input[keterangan_tambahan]">
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>