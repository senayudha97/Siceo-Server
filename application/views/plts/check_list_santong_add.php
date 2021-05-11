<div class="container-fluid">
    <h2 class="mb-5">Tambah Data <?= $title; ?></h2>

    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Check_list_santong/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_plts]" value="<?= 'CL' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                    <div class="col-sm-10">
                        <input type="text" readonly placeholder="Klik untuk input tanggal" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control easytimepicker" placeholder="Klik untuk input waktu" id="waktu" name="input[waktu]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">PV Modul (DC)</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="pv_modul_volt" name="input[pv_modul_volt]" placeholder="Volt">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="pv_modul_curr" name="input[pv_modul_curr]" placeholder="CURR">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="pv_modul_power" name="input[pv_modul_power]" placeholder="POWER">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="pv_modul_today" name="input[pv_modul_today]" placeholder="TODAY">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="pv_modul_acc" name="input[pv_modul_acc]" placeholder="ACC">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="irradians" class="col-sm-2 col-form-label">Irradians</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="irradians" name="input[irradians]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="irradiations" class="col-sm-2 col-form-label">Irradiations</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="irradiations" name="input[irradiations]">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Grid (AC)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Volt (V)</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_volt_r" name="input[grid_volt_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_volt_s" name="input[grid_volt_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_volt_t" name="input[grid_volt_t]" placeholder="T">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Current (A)</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_current_r" name="input[grid_current_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_current_s" name="input[grid_current_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_current_t" name="input[grid_current_t]" placeholder="T">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Power (kW)</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_power_r" name="input[grid_power_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_power_s" name="input[grid_power_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="grid_power_t" name="input[grid_power_t]" placeholder="T">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="grid_freq" class="col-sm-2 col-form-label">Freq</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="grid_freq" name="input[grid_freq]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="beban" class="col-sm-2 col-form-label">Gen Power</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gen_power" name="input[gen_power]">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Energy</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="energy_today" name="input[energy_today]" placeholder="TODAY">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="energy_acc" name="input[energy_acc]" placeholder="ACC">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="energy_eb" name="input[energy_eb]" placeholder="EB">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Temp</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="temp_pv" name="input[temp_pv]" placeholder="PV">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="temp_ambien" name="input[temp_ambien]" placeholder="AMBIEN">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kwh_ps" class="col-sm-2 col-form-label">KWH PS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kwh_ps" name="input[kwh_ps]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kwh_eks_tot" class="col-sm-2 col-form-label">KWH EKS.TOT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kwh_eks_tot" name="input[kwh_eks_tot]">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary   mb-3">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>