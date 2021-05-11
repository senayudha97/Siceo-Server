<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('menu/editSubmenu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="title" name="title" class="form-control" id="title" value="<?= $submenu['title']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="menu_id" class="col-sm-2 col-form-label">Menu</label>
                        <div class="col-sm-10">
                            <select name="menu_id" id="menu_id" class="form-control id_100">
                                <option value="" selected>--Select Menu--</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label">Url</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="url" id="url" value="<?= $submenu['url']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input type="icon" class="form-control" name="icon" id="icon" value="<?= $submenu['icon']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="1" checked id="is_active" name="is_active">
                            <label class="custom-control-label" for="is_active">Active ?</label>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $id; ?>">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>
        </div>
    </di>
</div>
</div>
<script>
    $(document).ready(function() {
        var id = "<?= $submenu['menu_id']; ?>";
        console.log(id);
        $("#menu_id option[value='" + id + "'").attr('selected', 'selected');
    });
</script>