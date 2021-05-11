<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center mb-5">
                            <h3 id="title" class="h3">Form Kelengkapan Akun</h3>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/google_register'); ?>">
                            <div class="form-group row">
                                <input type="text" value="<?= $role_id; ?>" class="form-control " id="role_id" name="input[role_id]" placeholder="role_id">
                                <div class="col-sm mb-3 mb-sm-0" id="hidden_field">
                                    <input type="text" value="<?= $password; ?>" class="form-control " id="password" name="input[password]" placeholder="password">
                                    <input type="text" value="<?= $menu_style; ?>" class="form-control" id="menu_style" name="input[menu_style]">
                                    <input type="text" value="0" class="form-control" id="is_active" name="input[is_active]">
                                    <input type="text" value="<?= $date_created; ?>" class="form-control" id="date_created" name="input[date_created]">
                                    <input type="text" value="default.jpg" class="form-control" id="image" name="input[image]">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <input type="text" value="<?= $email; ?>" readonly name="input[email]" class="form-control " id="email" placeholder="Nama Lengkap">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= $name; ?>" class="form-control " id="name" name="input[name]" placeholder="name">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <select name="input[unit1]" class="form-control " id="unit1">
                                        <option value="" selected>-- Pilih Unit 1 --</option>
                                        <?php foreach ($unit1 as $row) : ?>
                                            <option value="<?= $row['id']; ?>"><?= $row['unit']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <select name="input[unit2]" class="form-control " id="unit2">
                                        <option value="" selected>-- Pilih Unit 2 --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <select name="input[unit3]" class="form-control " id="unit3">
                                        <option value="" selected>-- Pilih Unit 3 --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <input type="text" name="input[wa]" class="form-control " id="name" placeholder="Nomor WhatsApp">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" id="daftar" class="btn btn-primary  btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Kembali ke halaman login!</a>
                        </div>
                        <div class="text-center">
                            <h6 class="h6 text-gray-900 mt-5">Powered by <img src="<?= base_url('assets/img/logo.svg') ?>" width="70" alt=""></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#hidden_field').hide();

        $('#unit2').change(function() {
            var unit2 = $(this).val();
            if (unit2 == 1) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(17);
            } else if (unit2 == 2) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(16);
            } else if (unit2 == 3) {
                $('#daftar').prop('disabled', true);
            }

        });

        $('#unit3').change(function() {
            var unit3 = $(this).val();
            $('#role_id').val(unit3);

            if (unit3 == 1) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(9);
            } else if (unit3 == 2) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(10);
            } else if (unit3 == 3) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(8);
            } else if (unit3 == 4) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(11);
            } else if (unit3 == 5) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(13);
            } else if (unit3 == 6) {
                $('#daftar').prop('disabled', false);
                $('#role_id').val(12);
            } else {
                $('#daftar').prop('disabled', true);
            }

        });

        $('#unit1').on('change', function() {
            $.ajax({
                url: "<?= base_url('auth/unit2'); ?>",
                data: {
                    'id': $('#unit1').val()
                },
                method: 'GET',
                datatype: 'json',
                success: function(param) {
                    var data = JSON.parse(param);

                    var $unit2 = $('#unit2');
                    $unit2.empty();
                    $unit2.append('<option selected>-- Pilih Unit 2 --</option>');
                    for (var i = 0; i < data.length; i++) {
                        $unit2.append('<option id=' + data[i].unit + ' value=' + data[i].id + '>' + data[i].unit + '</option>');
                    }
                }
            });
        });

        $('#unit2').on('change', function() {
            $.ajax({
                url: "<?= base_url('auth/unit3'); ?>",
                data: {
                    'id': $('#unit2').val()
                },
                method: 'GET',
                datatype: 'json',
                success: function(param) {
                    var data = JSON.parse(param);

                    var $unit3 = $('#unit3');
                    $unit3.empty();
                    $unit3.append('<option selected>-- Pilih Unit 3 --</option>');
                    for (var i = 0; i < data.length; i++) {
                        $unit3.append('<option id=' + data[i].unit + ' value=' + data[i].id + '>' + data[i].unit + '</option>');
                    }
                }
            });
        });
    });
</script>