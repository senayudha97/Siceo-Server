<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('housekeeping_flm/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('housekeeping_flm/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th class="tg-0lax">Jenis Kegiatan</th>
                        <th class="tg-0lax">Location</th>
                        <th class="tg-0lax">Description</th>
                        <th class="tg-0lax">Eviden</th>
                        <th class="tg-0lax">Checked by</th>
                        <th class="tg-0lax">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= ($value['jenis_kegiatan']); ?></td>
                            <td><?= ($value['location']); ?></td>
                            <td><?= ($value['description']); ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm anggota_serah" data-id="<?= $value['pk_housekeeping_flm']; ?>" data-toggle="modal" data-target="#anggota_serah"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= ($value['checked_by']); ?></td>
                            <td>
                                <a href="<?= base_url('housekeeping_flm/edit/') . $value['pk_housekeeping_flm']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('housekeeping_flm/delete/') . $value['pk_housekeeping_flm']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Anggota Serah-->
    <div class="modal fade" id="anggota_serah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anggot Serah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_serah1" name="input[anggota_serah1]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_serah2" name="input[anggota_serah2]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_serah3" name="input[anggota_serah3]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_serah4" name="input[anggota_serah4]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_serah5" name="input[anggota_serah5]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Anggota Terima-->
    <div class="modal fade" id="anggota_terima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anggot Terima</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_terima1" name="input[anggota_terima1]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_terima2" name="input[anggota_terima2]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_terima3" name="input[anggota_terima3]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_terima4" name="input[anggota_terima4]">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="anggota_terima5" name="input[anggota_terima5]">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Peralatan Utama-->
    <div class="modal fade" id="peralatan_utama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peralatan Utama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sulzer I</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer1_keadaan" name="input[sulzer1_keadaan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer1_keterangan" name="input[sulzer1_keterangan]" placeholder="Keterangan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer1_jumlah_kwh" name="input[sulzer1_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer1_pemakaian_sendiri" name="input[sulzer1_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sulzer II</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer2_keadaan" name="input[sulzer2_keadaan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer2_keterangan" name="input[sulzer2_keterangan]" placeholder="Keterangan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer2_jumlah_kwh" name="input[sulzer2_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer2_pemakaian_sendiri" name="input[sulzer2_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sulzer III</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer3_keadaan" name="input[sulzer3_keadaan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer3_keterangan" name="input[sulzer3_keterangan]" placeholder="Keterangan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer3_jumlah_kwh" name="input[sulzer3_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer3_pemakaian_sendiri" name="input[sulzer3_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sulzer IV</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer4_keadaan" name="input[sulzer4_keadaan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer4_keterangan" name="input[sulzer4_keterangan]" placeholder="Keterangan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer4_jumlah_kwh" name="input[sulzer4_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="sulzer4_pemakaian_sendiri" name="input[sulzer4_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
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

    <!-- modal Peralatan bantu-->
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

                    <ul class="list-group mb-3">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Separator MFO 1</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo1_keadaan" name="input[separator_mfo1_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo1_keterangan" name="input[separator_mfo1_keterangan]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo1_produksi" name="input[separator_mfo1_produksi]" placeholder="Produksi (KL)">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo1_transfer" name="input[separator_mfo1_transfer]" placeholder="Transfer (KL)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Separator MFO 2</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo2_keadaan" name="input[separator_mfo2_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo2_keterangan" name="input[separator_mfo2_keterangan]" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo2_produksi" name="input[separator_mfo2_produksi]" placeholder="Produksi (KL)">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control mb-2" id="separator_mfo2_transfer" name="input[separator_mfo2_transfer]" placeholder="Transfer (KL)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 1</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor1_keadaan" name="input[kompresor1_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor1_keterangan" name="input[kompresor1_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 2</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor2_keadaan" name="input[kompresor2_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor2_keterangan" name="input[kompresor2_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 3</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor3_keadaan" name="input[kompresor3_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor3_keterangan" name="input[kompresor3_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 4</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor4_keadaan" name="input[kompresor4_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor4_keterangan" name="input[kompresor4_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 5</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor5_keadaan" name="input[kompresor5_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor5_keterangan" name="input[kompresor5_keterangan]" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompresor 6</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor6_keadaan" name="input[kompresor6_keadaan]" placeholder="Keadaan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-2" id="kompresor6_keterangan" name="input[kompresor6_keterangan]" placeholder="Keterangan">
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

    <!-- modal Keterangan Tambahan-->
    <div class="modal fade" id="keterangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keterangan Tambahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="nama_peralatan_tambahan" name="input[nama_peralatan_tambahan]" placeholder="Nama Peralatan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keadaan_tambahan" name="input[keadaan_tambahan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keterangna_tambahan" name="input[keterangan_tambahan]" placeholder="Keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="nama_peralatan_tambahan" name="input[nama_peralatan_tambahan]" placeholder="Nama Peralatan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keadaan_tambahan" name="input[keadaan_tambahan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keterangna_tambahan" name="input[keterangan_tambahan]" placeholder="Keterangan">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="nama_peralatan_tambahan" name="input[nama_peralatan_tambahan]" placeholder="Nama Peralatan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keadaan_tambahan" name="input[keadaan_tambahan]" placeholder="Keadaan">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control mb-2" id="keterangna_tambahan" name="input[keterangan_tambahan]" placeholder="Keterangan">
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

            $('.anggota_serah').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('housekeeping_flm/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#anggota_serah1').val(hasil.anggota_serah1);
                        $('#anggota_serah2').val(hasil.anggota_serah2);
                        $('#anggota_serah3').val(hasil.anggota_serah3);
                        $('#anggota_serah4').val(hasil.anggota_serah4);
                        $('#anggota_serah5').val(hasil.anggota_serah5);
                    }
                });
            });

            $('.anggota_terima').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('housekeeping_flm/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#anggota_terima1').val(hasil.anggota_terima1);
                        $('#anggota_terima2').val(hasil.anggota_terima2);
                        $('#anggota_terima3').val(hasil.anggota_terima3);
                        $('#anggota_terima4').val(hasil.anggota_terima4);
                        $('#anggota_terima5').val(hasil.anggota_terima5);
                    }
                });
            });

            $('.peralatan_utama').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('housekeeping_flm/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#sulzer1_keadaan').val(hasil.sulzer1_keadaan);
                        $('#sulzer1_keterangan').val(hasil.sulzer1_keterangan);
                        $('#sulzer1_jumlah_kwh').val(hasil.sulzer1_jumlah_kwh);
                        $('#sulzer1_pemakaian_sendiri').val(hasil.sulzer1_pemakaian_sendiri);
                        $('#sulzer2_keadaan').val(hasil.sulzer2_keadaan);
                        $('#sulzer2_keterangan').val(hasil.sulzer2_keterangan);
                        $('#sulzer2_jumlah_kwh').val(hasil.sulzer2_jumlah_kwh);
                        $('#sulzer2_pemakaian_sendiri').val(hasil.sulzer2_pemakaian_sendiri);
                        $('#sulzer3_keadaan').val(hasil.sulzer3_keadaan);
                        $('#sulzer3_keterangan').val(hasil.sulzer3_keterangan);
                        $('#sulzer3_jumlah_kwh').val(hasil.sulzer3_jumlah_kwh);
                        $('#sulzer3_pemakaian_sendiri').val(hasil.sulzer3_pemakaian_sendiri);
                        $('#sulzer4_keadaan').val(hasil.sulzer4_keadaan);
                        $('#sulzer4_keterangan').val(hasil.sulzer4_keterangan);
                        $('#sulzer4_jumlah_kwh').val(hasil.sulzer4_jumlah_kwh);
                        $('#sulzer4_pemakaian_sendiri').val(hasil.sulzer4_pemakaian_sendiri);
                    }
                });
            });

            $('.peralatan_bantu').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('housekeeping_flm/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#separator_mfo1_keadaan').val(hasil.separator_mfo1_keadaan);
                        $('#separator_mfo1_keterangan').val(hasil.separator_mfo1_keterangan);
                        $('#separator_mfo1_produksi').val(hasil.separator_mfo1_produksi);
                        $('#separator_mfo1_transfer').val(hasil.separator_mfo1_transfer);
                        $('#separator_mfo2_keadaan').val(hasil.separator_mfo2_keadaan);
                        $('#separator_mfo2_keterangan').val(hasil.separator_mfo2_keterangan);
                        $('#separator_mfo2_produksi').val(hasil.separator_mfo2_produksi);
                        $('#separator_mfo2_transfer').val(hasil.separator_mfo2_transfer);
                        $('#kompresor1_keadaan').val(hasil.kompresor1_keadaan);
                        $('#kompresor1_keterangan').val(hasil.kompresor1_keterangan);
                        $('#kompresor2_keadaan').val(hasil.kompresor2_keadaan);
                        $('#kompresor2_keterangan').val(hasil.kompresor2_keterangan);
                        $('#kompresor3_keadaan').val(hasil.kompresor3_keadaan);
                        $('#kompresor3_keterangan').val(hasil.kompresor3_keterangan);
                        $('#kompresor4_keadaan').val(hasil.kompresor4_keadaan);
                        $('#kompresor4_keterangan').val(hasil.kompresor4_keterangan);
                        $('#kompresor5_keadaan').val(hasil.kompresor5_keadaan);
                        $('#kompresor5_keterangan').val(hasil.kompresor5_keterangan);
                        $('#kompresor6_keadaan').val(hasil.kompresor6_keadaan);
                        $('#kompresor6_keterangan').val(hasil.kompresor6_keterangan);
                    }
                });
            });

            $('.keterangan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('housekeeping_flm/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#nama_peralatan_tambahan').val(hasil.nama_peralatan_tambahan);
                        $('#keadaan_tambahan').val(hasil.keadaan_tambahan);
                        $('#keterangan_tambahan').val(hasil.keterangan_tambahan);
                    }
                });
            });
        });
    </script>