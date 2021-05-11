<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('log_ampenan_pielstick_engine/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('log_ampenan_pielstick_engine/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
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
                        <th>Suhu</th>
                        <th>Suhu Ruangan</th>
                        <th>Rack Bahan Bakar</th>
                        <th>Governor Load Limit</th>
                        <th>Tekanan</th>
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
                                <div class="btn btn-success btn-sm btn-sm suhu" data-id="<?= $value['pk_pielstick_engine']; ?>" data-toggle="modal" data-target="#suhu"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td><?= $value['suhu_ruangan']; ?></td>
                            <td><?= $value['rack_bahan_bakar']; ?></td>
                            <td><?= $value['governor_load_limit']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tekanan" data-id="<?= $value['pk_pielstick_engine']; ?>" data-toggle="modal" data-target="#tekanan"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
                            </td>
                            <td>
                                <a href="<?= base_url('log_ampenan_pielstick_engine/edit/') . $value['pk_pielstick_engine']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('log_ampenan_pielstick_engine/delete/') . $value['pk_pielstick_engine']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

    <!-- modal suhu-->
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
                        <label class="col-sm-4 col-form-label">Udara Masuk</label>
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
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Minyak Pelumas</label>
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
                    <div class="card">
                        <div class="card-header">
                            Air Pendingin
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" id="air_pendingin_masuk_mesin" name="input[air_pendingin_masuk_mesin]">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Mesin</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" id="air_pendingin_keluar_mesin" name="input[air_pendingin_keluar_mesin]">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Masuk Cooler</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="masuk_cooler_sisi_a" name="input[masuk_cooler_sisi_a]" placeholder="Sisi A">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="masuk_cooler_sisi_b" name="input[masuk_cooler_sisi_b]" placeholder="Sisi B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Cooler</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="keluar_cooler_sisi_a" name="input[keluar_cooler_sisi_a]" placeholder="Sisi B">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="keluar_cooler_sisi_b" name="input[keluar_cooler_sisi_b]" placeholder="Sisi B">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Injector</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="injector_masuk" name="input[injector_masuk]" placeholder="Masuk">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input readonly type="text" class="form-control" id="injector_keluar" name="input[injector_keluar]" placeholder="Keluar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a1" name="input[air_pendingin_keluar_silinder_sisi_a1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a2" name="input[air_pendingin_keluar_silinder_sisi_a2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a3" name="input[air_pendingin_keluar_silinder_sisi_a3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a4" name="input[air_pendingin_keluar_silinder_sisi_a4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a5" name="input[air_pendingin_keluar_silinder_sisi_a5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_a6" name="input[air_pendingin_keluar_silinder_sisi_a6]">
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
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b1" name="input[air_pendingin_keluar_silinder_sisi_b1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b2" name="input[air_pendingin_keluar_silinder_sisi_b2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b3" name="input[air_pendingin_keluar_silinder_sisi_b3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b4" name="input[air_pendingin_keluar_silinder_sisi_b4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b5" name="input[air_pendingin_keluar_silinder_sisi_b5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="air_pendingin_keluar_silinder_sisi_b6" name="input[air_pendingin_keluar_silinder_sisi_b6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            Gas Buang
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keluar Silinder A</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_1" name="input[gas_buang_keluar_silinder_sisi_a_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_2" name="input[gas_buang_keluar_silinder_sisi_a_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_3" name="input[gas_buang_keluar_silinder_sisi_a_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_4" name="input[gas_buang_keluar_silinder_sisi_a_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_5" name="input[gas_buang_keluar_silinder_sisi_a_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_a_6" name="input[gas_buang_keluar_silinder_sisi_a_6]">
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
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_1" name="input[gas_buang_keluar_silinder_sisi_b_1]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_2" name="input[gas_buang_keluar_silinder_sisi_b_2]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_3" name="input[gas_buang_keluar_silinder_sisi_b_3]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_4" name="input[gas_buang_keluar_silinder_sisi_b_4]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_5" name="input[gas_buang_keluar_silinder_sisi_b_5]">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input readonly type="text" class="form-control" id="gas_buang_keluar_silinder_sisi_b_6" name="input[gas_buang_keluar_silinder_sisi_b_6]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Main Bearing</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing1" name="input[main_bearing1]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing2" name="input[main_bearing2]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing3" name="input[main_bearing3]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing4" name="input[main_bearing4]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing5" name="input[main_bearing5]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing6" name="input[main_bearing6]">
                                </div>
                                <div class="col-sm-2">
                                    <input readonly type="text" class="form-control" id="main_bearing7" name="input[main_bearing7]">
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

    <!-- modal tekanan-->
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
                        <label class="col-sm-4 col-form-label">Minyak Pelumas</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="tekanan_minyak_pelumas_masuk" name="input[tekanan_minyak_pelumas_masuk]" placeholder="Masuk">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="tekanan_minyak_pelumas_keluar" name="input[tekanan_minyak_pelumas_keluar]" placeholder="Keluar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Udara Masuk Disalurkan</label>
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
                    <div class="form-group row">
                        <label for="pelumas_rocker_arm" class="col-sm-4 col-form-label">Pelumas Rocker Arm</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="pelumas_rocker_arm" name="input[pelumas_rocker_arm]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Bahan Bakar</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bahan_bakar1" name="input[bahan_bakar1]" placeholder="Sisi A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="bahan_bakar2" name="input[bahan_bakar2]" placeholder="Sisi B">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Air Pendingin</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="air_pendingin_cw" name="input[air_pendingin_cw]" placeholder="CW">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="air_pendingin_jw" name="input[air_pendingin_jw]" placeholder="JW">
                                </div>
                                <div class="col-sm-4">
                                    <input readonly type="text" class="form-control" id="air_pendingin_rw" name="input[air_pendingin_rw]" placeholder="RW">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Putaran Turbo</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="putaran_turbo_sisi_a" name="input[putaran_turbo_sisi_a]" placeholder="Sisi A">
                                </div>
                                <div class="col-sm-6">
                                    <input readonly type="text" class="form-control" id="putaran_turbo_sisi_b" name="input[putaran_turbo_sisi_b]" placeholder="Sisi A">
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

            $('.suhu').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_pielstick_engine/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#udara_masuk_sisi_a').val(hasil.udara_masuk_sisi_a);
                        $('#udara_masuk_sisi_b').val(hasil.udara_masuk_sisi_b);
                        $('#minyak_pelumas_masuk').val(hasil.minyak_pelumas_masuk);
                        $('#minyak_pelumas_keluar').val(hasil.minyak_pelumas_keluar);
                        $('#air_pendingin_masuk_mesin').val(hasil.air_pendingin_masuk_mesin);
                        $('#air_pendingin_keluar_mesin').val(hasil.air_pendingin_keluar_mesin);
                        $('#masuk_cooler_sisi_a').val(hasil.masuk_cooler_sisi_a);
                        $('#masuk_cooler_sisi_b').val(hasil.masuk_cooler_sisi_b);
                        $('#keluar_cooler_sisi_a').val(hasil.keluar_cooler_sisi_a);
                        $('#keluar_cooler_sisi_b').val(hasil.keluar_cooler_sisi_b);
                        $('#injector_masuk').val(hasil.injector_masuk);
                        $('#injector_keluar').val(hasil.injector_keluar);
                        $('#air_pendingin_keluar_silinder_sisi_a1').val(hasil.air_pendingin_keluar_silinder_sisi_a1);
                        $('#air_pendingin_keluar_silinder_sisi_a2').val(hasil.air_pendingin_keluar_silinder_sisi_a2);
                        $('#air_pendingin_keluar_silinder_sisi_a3').val(hasil.air_pendingin_keluar_silinder_sisi_a3);
                        $('#air_pendingin_keluar_silinder_sisi_a4').val(hasil.air_pendingin_keluar_silinder_sisi_a4);
                        $('#air_pendingin_keluar_silinder_sisi_a5').val(hasil.air_pendingin_keluar_silinder_sisi_a5);
                        $('#air_pendingin_keluar_silinder_sisi_a6').val(hasil.air_pendingin_keluar_silinder_sisi_a6);
                        $('#air_pendingin_keluar_silinder_sisi_b1').val(hasil.air_pendingin_keluar_silinder_sisi_b1);
                        $('#air_pendingin_keluar_silinder_sisi_b2').val(hasil.air_pendingin_keluar_silinder_sisi_b2);
                        $('#air_pendingin_keluar_silinder_sisi_b3').val(hasil.air_pendingin_keluar_silinder_sisi_b3);
                        $('#air_pendingin_keluar_silinder_sisi_b4').val(hasil.air_pendingin_keluar_silinder_sisi_b4);
                        $('#air_pendingin_keluar_silinder_sisi_b5').val(hasil.air_pendingin_keluar_silinder_sisi_b5);
                        $('#air_pendingin_keluar_silinder_sisi_b6').val(hasil.air_pendingin_keluar_silinder_sisi_b6);
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
                        $('#main_bearing1').val(hasil.main_bearing1);
                        $('#main_bearing2').val(hasil.main_bearing2);
                        $('#main_bearing3').val(hasil.main_bearing3);
                        $('#main_bearing4').val(hasil.main_bearing4);
                        $('#main_bearing5').val(hasil.main_bearing5);
                        $('#main_bearing6').val(hasil.main_bearing6);
                        $('#main_bearing7').val(hasil.main_bearing7);
                    }
                });
            });

            $('.tekanan').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('log_ampenan_pielstick_engine/ajax'); ?>",
                    method: 'GET',
                    data: {
                        data: id
                    },
                    datatype: 'json',
                    success: function(data) { //menampilkan
                        var hasil = JSON.parse(data);
                        $('#tekanan_minyak_pelumas_masuk').val(hasil.tekanan_minyak_pelumas_masuk);
                        $('#tekanan_minyak_pelumas_keluar').val(hasil.tekanan_minyak_pelumas_keluar);
                        $('#udara_masuk_disalurkan_sisi_a').val(hasil.udara_masuk_disalurkan_sisi_a);
                        $('#udara_masuk_disalurkan_sisi_b').val(hasil.udara_masuk_disalurkan_sisi_b);
                        $('#pelumas_rocker_arm').val(hasil.pelumas_rocker_arm);
                        $('#bahan_bakar1').val(hasil.bahan_bakar1);
                        $('#bahan_bakar2').val(hasil.bahan_bakar2);
                        $('#air_pendingin_cw').val(hasil.air_pendingin_cw);
                        $('#air_pendingin_jw').val(hasil.air_pendingin_jw);
                        $('#air_pendingin_rw').val(hasil.air_pendingin_rw);
                        $('#putaran_turbo_sisi_a').val(hasil.putaran_turbo_sisi_a);
                        $('#putaran_turbo_sisi_b').val(hasil.putaran_turbo_sisi_b);
                    }
                });
            });
        });
    </script>