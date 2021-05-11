<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changepassword'); ?>" method="POST">
                <div class="form-group row">
                    <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="current_password" name="current_password" class="form-control" id="current_password">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_password1" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="new_password1" name="new_password1" class="form-control" id="current_password">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_password2" class="col-sm-3 col-form-label">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="new_password2" name="new_password2" class="form-control" id="current_password">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary ">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>