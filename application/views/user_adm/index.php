<?php $arr_sess = $this->session->userdata(); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
            <?php if ($arr_sess['role_id'] == 5) : ?>
                <a href="" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">Tambah Admin</a>
            <?php endif; ?>
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['name']; ?></td>
                            <td><?= $m['email']; ?></td>
                            <?php if ($m['is_active'] == 0) : ?>
                                <td>Belum Aktif</td>
                            <?php else : ?>
                                <td>Aktif</td>
                            <?php endif; ?>
                            <td>
                                <!-- <button id="edit" data-toggle="modal" data-target="#editModal" class="badge badge-warning" data-id="<?= $m['id']; ?>" class="badge badge-warning">Edit</button> -->
                                <?php if ($m['is_active'] == 0) : ?>
                                    <a href="<?= base_url($this->page_dir . '/verif/') . $m['id']; ?>" class="badge badge-success">Aktifkan</a>
                                <?php else : ?>
                                    <a href="<?= base_url($this->page_dir . '/ban/') . $m['id']; ?>" class="badge badge-warning">Nonaktif</a>
                                <?php endif; ?>

                                <a href="<?= base_url($this->page_dir . '/delete/') . $m['id']; ?>" onclick="return confirm('Hapus User ?')" class="badge badge-danger">Delete</a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user_adm/addAdmin'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="input[name]" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="input[email]" onKeyDown="if(event.keyCode === 32)
                           return false;" placeholder="Username">
                        <p id="pesan" class="text-danger h6"></p>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="input[password]" onKeyDown="if(event.keyCode === 32)
                           return false;" placeholder="Password">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" onclick="myFunction()" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="input[wa]" placeholder="Nomor WA">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="input[role_id]">
                            <option value="15">Admin Paok Motong</option>
                            <option value="6">Admin Ampenan</option>
                            <option value="7">Admin EBT</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="addAdmin">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {


        $('#table_id').DataTable({
            "scrollX": true
        });

        $('#username').on('keyup', function() {
            $.ajax({
                url: "<?= base_url('user_adm/checkolddata'); ?>",
                method: 'GET',
                data: {
                    username: $(this).val()
                },
                datatype: 'json',
                success: function(param) {
                    if (param == 0) {
                        $('#addAdmin').prop('disabled', true);
                        $('#pesan').html('Username sudah ada <i class="fa fa-times"></i>');
                    } else if (param == 1) {
                        $('#addAdmin').prop('disabled', false);
                        $('#pesan').html('');
                    }
                }
            });
        });
    });

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>