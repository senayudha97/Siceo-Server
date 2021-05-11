<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-6">
            <a href="" class="btn btn-primary rounded-0 mb-5" data-toggle="modal" data-target="#exampleModal">Data Baru</a>
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Input</th>
                        <th scope="col">No Dokumen</th>
                        <th scope="col">Edit Revisi</th>
                        <th scope="col">Halaman</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= content_date($row['setup_tanggal_input']); ?></td>
                            <td><?= $row['no_dokumen']; ?></td>
                            <td><?= $row['edit_revisi']; ?></td>
                            <td><?= $row['halaman']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-sm editModal" data-id="<?= $row['pk_setup_beban_penyulang']; ?>" data-toggle="modal" data-target="#editModal"><span class=" fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('setup_beban_penyulang/delete/') . $row['pk_setup_beban_penyulang']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </di>
</div>
</div>


<!-- Modal add-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Data Beban Penyulang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_beban_penyulang/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_setup_beban_penyulang]" value="<?= 'SBP' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Hari/Tgl : </label>
                        <input type="text" class="form-control easydatepicker" name="input[setup_tanggal_input]" placeholder="Menu Name">
                    </div>
                    <div class="form-group">
                        <label for="no_dokumen">No Dokumen : </label>
                        <input type="text" class="form-control" name="input[no_dokumen]">
                    </div>
                    <div class="form-group">
                        <label for="id">Edit Revisi : </label>
                        <input type="text" class="form-control" name="input[edit_revisi]">
                    </div>
                    <div class="form-group">
                        <label for="id">Halaman : </label>
                        <input type="number" class="form-control" name="input[halaman]">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Data Beban Penyulang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_beban_penyulang/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="pk[pk_setup_beban_penyulang]" id="pk_setup_beban_penyulang">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Hari/Tgl : </label>
                        <input type="text" class="form-control easydatepicker" id="setup_tanggal_input" name="input[setup_tanggal_input]" placeholder="Menu Name">
                    </div>
                    <div class="form-group">
                        <label for="no_dokumen">No Dokumen : </label>
                        <input type="text" class="form-control" id="no_dokumen" name="input[no_dokumen]">
                    </div>
                    <div class="form-group">
                        <label for="id">Edit Revisi : </label>
                        <input type="text" class="form-control" id="edit_revisi" name="input[edit_revisi]">
                    </div>
                    <div class="form-group">
                        <label for="id">Halaman : </label>
                        <input type="number" class="form-control" id="halaman" name="input[halaman]">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();


        $('.editModal').on('click', function() {
            $('#pk_setup_beban_penyulang, #setup_tanggal_input, #no_dokumen, #edit_revisi, #halaman').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_beban_penyulang/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pk_setup_beban_penyulang').val(hasil.pk_setup_beban_penyulang);
                    $('#setup_tanggal_input').val(hasil.setup_tanggal_input);
                    $('#no_dokumen').val(hasil.no_dokumen);
                    $('#edit_revisi').val(hasil.edit_revisi);
                    $('#halaman').val(hasil.halaman);
                }
            });
        });

    });
</script>