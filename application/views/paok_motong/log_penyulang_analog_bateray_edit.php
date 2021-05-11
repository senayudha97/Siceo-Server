<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_penyulang_analog_bateray/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_penyulang_analog_bateray]" value="<?= $edit['pk_penyulang_analog_bateray']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal input</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]" placeholder="Tanggal input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[waktu]" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu'] ?>" name="input[waktu]" placeholder="Waktu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[rempung]" class="col-sm-2 col-form-label">Rempung</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[rempung]" value="<?= $edit['rempung'] ?>" name="input[rempung]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[pancor]" class="col-sm-2 col-form-label">Pancor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[pancor]" value="<?= $edit['pancor'] ?>" name="input[pancor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[keruak]" class="col-sm-2 col-form-label">Keruak</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[keruak]" value="<?= $edit['keruak'] ?>" name="input[keruak]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[sakra]" class="col-sm-2 col-form-label">Sakra</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[sakra]" value="<?= $edit['sakra'] ?>" name="input[sakra]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[masbagik]" class="col-sm-2 col-form-label">Masbagik</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[masbagik]" value="<?= $edit['masbagik'] ?>" name="input[masbagik]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[sikur]" class="col-sm-2 col-form-label">Sikur</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[sikur]" value="<?= $edit['sikur'] ?>" name="input[sikur]">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Unit 2 & 3
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">110 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit23_110vdc_v]" value="<?= $edit['unit23_110vdc_v'] ?>" name="input[unit23_110vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit23_110vdc_i]" value="<?= $edit['unit23_110vdc_i'] ?>" name="input[unit23_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">24 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit23_24vdc_v]" value="<?= $edit['unit23_24vdc_v'] ?>" name="input[unit23_24vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit23_110vdc_i]" value="<?= $edit['unit23_110vdc_i'] ?>" name="input[unit23_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Unit 4 & 5
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">110 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit45_110vdc_v]" value="<?= $edit['unit45_110vdc_v'] ?>" name="input[unit45_110vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit45_110vdc_i]" value="<?= $edit['unit45_110vdc_i'] ?>" name="input[unit45_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">24 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit45_24vdc_v]" value="<?= $edit['unit45_24vdc_v'] ?>" name="input[unit45_24vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[unit45_110vdc_i]" value="<?= $edit['unit45_110vdc_i'] ?>" name="input[unit45_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Penyulang
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">110 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[penyulang_110vdc_v]" value="<?= $edit['penyulang_110vdc_v'] ?>" name="input[penyulang_110vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[penyulang_110vdc_i]" value="<?= $edit['penyulang_110vdc_i'] ?>" name="input[penyulang_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">24 VDC</label>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[penyulang_24vdc_v]" value="<?= $edit['penyulang_24vdc_v'] ?>" name="input[penyulang_24vdc_v]" placeholder="V">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[penyulang_110vdc_i]" value="<?= $edit['penyulang_110vdc_i'] ?>" name="input[penyulang_110vdc_i]" placeholder="I">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>