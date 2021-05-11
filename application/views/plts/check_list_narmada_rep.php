<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .heading {
            background-color: deepskyblue;
            font-size: 16px;
        }

        .table-header {
            text-align: center;
            font-weight: 700;
        }

        .title {
            text-align: center;
            font-size: x-large;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            font-size: small;
        }
    </style>
</head>

<body style="font-size: 10pt;">
    <img src="<?= base_url('assets/img/kop.png'); ?>" style="padding-left: -12px;" width="20%">
    <br>
    <p class="title">Check List</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-baqh" rowspan="3">No</th>
                <th class="tg-baqh" rowspan="3">Tanggal Input</th>
                <th class="tg-baqh" rowspan="3">JAM</th>
                <th class="tg-baqh" colspan="5">PV MODUL ( DC )</th>
                <th class="tg-baqh" rowspan="2">IRRADIANS</th>
                <th class="tg-baqh" rowspan="2">IRRADIATIONS</th>
                <th class="tg-baqh" colspan="10">GRID ( AC )</th>
                <th class="tg-baqh" rowspan="3">GEN. POWER (kW)</th>
                <th class="tg-baqh" colspan="3">ENERGY</th>
                <th class="tg-baqh" colspan="2">TEMP</th>
                <th class="tg-baqh" rowspan="3">KWH PS</th>
                <th class="tg-baqh" rowspan="3">KWH EKS. TOT</th>
            </tr>
            <tr class="heading">
                <td class="tg-baqh">VOLT</td>
                <td class="tg-baqh">CURR.</td>
                <td class="tg-baqh">POWER</td>
                <td class="tg-baqh">TODAY</td>
                <td class="tg-baqh">ACC.</td>
                <td class="tg-baqh" colspan="3">VOLT ( V )</td>
                <td class="tg-baqh" colspan="3">CURRENT ( A )</td>
                <td class="tg-baqh" colspan="3">POWER ( kW )</td>
                <td class="tg-baqh">FREQ.</td>
                <td class="tg-baqh">TODAY</td>
                <td class="tg-baqh">ACC.</td>
                <td class="tg-baqh">EB</td>
                <td class="tg-baqh" rowspan="2">PV</td>
                <td class="tg-baqh" rowspan="2">AMBIEN</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh">( V )</td>
                <td class="tg-baqh">( A )</td>
                <td class="tg-baqh">( kW )</td>
                <td class="tg-baqh">(kWh)</td>
                <td class="tg-baqh">(kWh)</td>
                <td class="tg-baqh">(W/mē)</td>
                <td class="tg-baqh">kWh/m2</td>
                <td class="tg-baqh">R</td>
                <td class="tg-baqh">S</td>
                <td class="tg-baqh">T</td>
                <td class="tg-baqh">R</td>
                <td class="tg-baqh">S</td>
                <td class="tg-baqh">T</td>
                <td class="tg-baqh">R</td>
                <td class="tg-baqh">S</td>
                <td class="tg-baqh">T</td>
                <td class="tg-baqh">HZ</td>
                <td class="tg-baqh">(kWh)</td>
                <td class="tg-baqh">(kWh)</td>
                <td class="tg-baqh">(kWh)</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']) ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['pv_modul_volt']; ?></td>
                    <td><?= $row['pv_modul_curr']; ?></td>
                    <td><?= $row['pv_modul_power']; ?></td>
                    <td><?= $row['pv_modul_today']; ?></td>
                    <td><?= $row['pv_modul_acc']; ?></td>
                    <td><?= $row['irradians']; ?></td>
                    <td><?= $row['irradiations']; ?></td>
                    <td><?= $row['grid_volt_r']; ?></td>
                    <td><?= $row['grid_volt_s']; ?></td>
                    <td><?= $row['grid_volt_t']; ?></td>
                    <td><?= $row['grid_current_r']; ?></td>
                    <td><?= $row['grid_current_s']; ?></td>
                    <td><?= $row['grid_current_t']; ?></td>
                    <td><?= $row['grid_power_r']; ?></td>
                    <td><?= $row['grid_power_s']; ?></td>
                    <td><?= $row['grid_power_t']; ?></td>
                    <td><?= $row['grid_freq']; ?></td>
                    <td><?= $row['gen_power']; ?></td>
                    <td><?= $row['energy_today']; ?></td>
                    <td><?= $row['energy_acc']; ?></td>
                    <td><?= $row['energy_eb']; ?></td>
                    <td><?= $row['temp_pv']; ?></td>
                    <td><?= $row['temp_ambien']; ?></td>
                    <td><?= $row['kwh_ps']; ?></td>
                    <td><?= $row['kwh_eks_tot']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>