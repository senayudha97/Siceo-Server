<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_pielstick_generator/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_pielstick_generator/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>KWH Produksi</th>
                        <th>Flow Meter Bahan Bakar</th>
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
                                <div class="btn btn-success btn-sm btn-sm generator" data-id="<?= $value['pk_pielstick_generator']; ?>" data-toggle="modal" data-target="#generator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['kwh_produksi']; ?></td>
                            <td><?= $value['flow_meter_bahan_bakar']; ?></td>
                            <td>
                                <a href="<?= base_url('log_ampenan_pielstick_generator/edit/') . $value['pk_pielstick_generator']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_pielstick_generator/delete/') . $value['pk_pielstick_generator']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal Generator-->
    <div class="modal fade" id="generator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="tegangan" name="input[tegangan]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="frekwensi" class="col-sm-3 col-form-label">Frekwensi</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="frekwensi" name="input[frekwensi]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faktor_daya" class="col-sm-3 col-form-label">Faktor Daya</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="faktor_daya" name="input[faktor_daya]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="daya_semu" class="col-sm-3 col-form-label">Daya Semu</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="daya_semu" name="input[daya_semu]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="beban" class="col-sm-3 col-form-label">Beban</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="beban" name="input[beban]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Arus (Ampere)</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_r" name="input[arus_r]">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_s" name="input[arus_s]">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="arus_t" name="input[arus_t]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Penguat Medan (Exciter)</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_teg" name="input[penguat_medan_teg]">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="penguat_medan_arus" name="input[penguat_medan_arus]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kumparan Generator</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator1" name="input[kumparan_generator1]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator2" name="input[kumparan_generator2]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator3" name="input[kumparan_generator3]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator4" name="input[kumparan_generator4]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator5" name="input[kumparan_generator5]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="kumparan_generator6" name="input[kumparan_generator6]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bantalan_generator" class="col-sm-3 col-form-label">Bantalan Generator</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="bantalan_generator" name="input[bantalan_generator]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="udara_pendingin" class="col-sm-3 col-form-label">Udara Pendingin</label>
                        <div class="col-sm-9">
                            <input readonly type="text" class="form-control" id="udara_pendingin" name="input[udara_pendingin]">
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

            $('.generator').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_pielstick_generator/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tegangan').val(hasil.tegangan);
                        $('#frekwensi').val(hasil.frekwensi);
                        $('#faktor_daya').val(hasil.faktor_daya);
                        $('#daya_semu').val(hasil.daya_semu);
                        $('#beban').val(hasil.beban);
                        $('#arus_r').val(hasil.arus_r);
                        $('#arus_s').val(hasil.arus_s);
                        $('#arus_t').val(hasil.arus_t);
                        $('#penguat_medan_teg').val(hasil.penguat_medan_teg);
                        $('#penguat_medan_arus').val(hasil.penguat_medan_arus);
                        $('#kumparan_generator1').val(hasil.kumparan_generator1);
                        $('#kumparan_generator2').val(hasil.kumparan_generator2);
                        $('#kumparan_generator3').val(hasil.kumparan_generator3);
                        $('#kumparan_generator4').val(hasil.kumparan_generator4);
                        $('#kumparan_generator5').val(hasil.kumparan_generator5);
                        $('#kumparan_generator6').val(hasil.kumparan_generator6);
                        $('#bantalan_generator').val(hasil.bantalan_generator);
                        $('#udara_pendingin').val(hasil.udara_pendingin);
                    }
                });
            });
        });
    </script>