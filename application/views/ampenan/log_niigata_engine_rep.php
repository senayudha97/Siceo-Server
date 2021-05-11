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
    <p class="title">Log Ampenan Niigata Engine</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-c3ow" rowspan="4">No</th>
                <th class="tg-c3ow" rowspan="4">Tanggal<br>Input</th>
                <th class="tg-c3ow" rowspan="4">JAM</th>
                <th class="tg-c3ow" colspan="8">TEKANAN</th>
                <th class="tg-c3ow" rowspan="4">Gas<br>Buang(<br>mmH2O)</th>
                <th class="tg-c3ow" rowspan="4">Load<br>Limit<br>Governor</th>
                <th class="tg-c3ow" colspan="12">Rack Bahan Bakar (mm)</th>
                <th class="tg-c3ow" colspan="26">Temperatur</th>
                <th class="tg-0lax" rowspan="4">KWH PS</th>
                <th class="tg-0lax" colspan="3" rowspan="3">Stand Flow Meter HSD/MFO</th>
                <th class="tg-0lax" rowspan="4">Waktu Input</th>
                <th class="tg-0lax" rowspan="4">Operator</th>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" colspan="2">Air Pendingin</td>
                <td class="tg-c3ow" rowspan="3">Minyak<br>Pelumas<br>Mesin</td>
                <td class="tg-c3ow" colspan="2">Udara Bilas</td>
                <td class="tg-c3ow" rowspan="3">Bahan<br>Bakar<br>Masuk<br>Mesin</td>
                <td class="tg-c3ow" rowspan="3">Minyak<br>Pelumas<br>Tuas<br>Katup</td>
                <td class="tg-c3ow" rowspan="3">Minyak<br>Pendingin<br>Injektor</td>
                <td class="tg-c3ow" colspan="6">Silinder A</td>
                <td class="tg-c3ow" colspan="6">Silinder B</td>
                <td class="tg-c3ow" rowspan="3">Bahan<br>Bakar<br>Mesin</td>
                <td class="tg-c3ow" colspan="2">Minyak Pendingin<br>Injektor</td>
                <td class="tg-c3ow" colspan="12">Air Pendingin</td>
                <td class="tg-c3ow" colspan="5">Udara</td>
                <td class="tg-c3ow" colspan="6">Radiator</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" rowspan="2">Masuk<br>Mesin</td>
                <td class="tg-c3ow" rowspan="2">Masuk<br>Intercooler</td>
                <td class="tg-c3ow" rowspan="2">A</td>
                <td class="tg-c3ow" rowspan="2">B</td>
                <td class="tg-c3ow" rowspan="2">1A</td>
                <td class="tg-c3ow" rowspan="2">2A</td>
                <td class="tg-c3ow" rowspan="2">3A</td>
                <td class="tg-c3ow" rowspan="2">4A</td>
                <td class="tg-c3ow" rowspan="2">5A</td>
                <td class="tg-c3ow" rowspan="2">6A</td>
                <td class="tg-c3ow" rowspan="2">1B</td>
                <td class="tg-c3ow" rowspan="2">2B</td>
                <td class="tg-c3ow" rowspan="2">3B</td>
                <td class="tg-c3ow" rowspan="2">4B</td>
                <td class="tg-c3ow" rowspan="2">5B</td>
                <td class="tg-c3ow" rowspan="2">6B</td>
                <td class="tg-c3ow" rowspan="2">Masuk</td>
                <td class="tg-c3ow" rowspan="2">Keluar</td>
                <td class="tg-c3ow" colspan="6">Keluar Silinder A</td>
                <td class="tg-c3ow" colspan="6">Keluar Silinder B</td>
                <td class="tg-c3ow" colspan="2">Masuk<br>Intercooler</td>
                <td class="tg-c3ow" colspan="2">Keluar<br>Intercooler</td>
                <td class="tg-c3ow" rowspan="2">Masuk<br>Filter<br>(Blower)</td>
                <td class="tg-c3ow" colspan="2">Minyak<br>Pelumas</td>
                <td class="tg-baqh" colspan="2">Air<br>Pendingin</td>
                <td class="tg-baqh" colspan="2">Air<br>Pendingin</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow">1A</td>
                <td class="tg-c3ow">2A</td>
                <td class="tg-c3ow">3A</td>
                <td class="tg-c3ow">4A</td>
                <td class="tg-c3ow">5A</td>
                <td class="tg-c3ow">6A</td>
                <td class="tg-c3ow">1B</td>
                <td class="tg-c3ow">2B</td>
                <td class="tg-c3ow">3B</td>
                <td class="tg-c3ow">4B</td>
                <td class="tg-c3ow">5B</td>
                <td class="tg-c3ow">6B</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">Masuk</td>
                <td class="tg-c3ow">Keluar</td>
                <td class="tg-baqh">Masuk</td>
                <td class="tg-baqh">Keluar</td>
                <td class="tg-baqh">Masuk</td>
                <td class="tg-baqh">Keluar</td>
                <td class="tg-0lax">HSD</td>
                <td class="tg-0lax">MFO IN</td>
                <td class="tg-0lax">MFO RETURN</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['jam']; ?></td>
                    <td><?= $row['air_pendingin_mesin'] ?></td>
                    <td><?= $row['air_pendingin_intercooler'] ?></td>
                    <td><?= $row['minyak_pelumas_masuk_mesin'] ?></td>
                    <td><?= $row['udara_bilas_a'] ?></td>
                    <td><?= $row['udara_bilas_b'] ?></td>
                    <td><?= $row['bahan_bakar_masuk_mesin'] ?></td>
                    <td><?= $row['minyak_pelumas_tuas_katup'] ?></td>
                    <td><?= $row['minyak_pendingin_injektor'] ?></td>
                    <td><?= $row['gas_buang'] ?></td>
                    <td><?= $row['load_limit_governor'] ?></td>
                    <td><?= $row['silinder_sisi_a_1']; ?></td>
                    <td><?= $row['silinder_sisi_a_2']; ?> </td>
                    <td><?= $row['silinder_sisi_a_3']; ?> </td>
                    <td><?= $row['silinder_sisi_a_4']; ?> </td>
                    <td><?= $row['silinder_sisi_a_5']; ?> </td>
                    <td><?= $row['silinder_sisi_a_6']; ?> </td>
                    <td><?= $row['silinder_sisi_b_1']; ?> </td>
                    <td><?= $row['silinder_sisi_b_2']; ?> </td>
                    <td><?= $row['silinder_sisi_b_3']; ?> </td>
                    <td><?= $row['silinder_sisi_b_4']; ?> </td>
                    <td><?= $row['silinder_sisi_b_5']; ?> </td>
                    <td><?= $row['silinder_sisi_b_6']; ?> </td>
                    <td><?= $row['bahan_bakar_mesin_masuk']; ?></td>
                    <td><?= $row['minyak_pendingin_injektor_masuk']; ?></td>
                    <td><?= $row['minyak_pendingin_injektor_keluar']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_1']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_2']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_3']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_4']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_5']; ?></td>
                    <td><?= $row['air_pendingin_silinder_a_6']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_1']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_2']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_3']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_4']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_5']; ?></td>
                    <td><?= $row['air_pendingin_silinder_b_6']; ?></td>
                    <td><?= $row['udara_masuk_intercooler_a']; ?></td>
                    <td><?= $row['udara_masuk_intercooler_b']; ?></td>
                    <td><?= $row['udara_keluar_intercooler_a']; ?></td>
                    <td><?= $row['udara_keluar_intercooler_b']; ?></td>
                    <td><?= $row['masuk_filter']; ?></td>
                    <td><?= $row['radiator_minyak_pelumas_masuk']; ?></td>
                    <td><?= $row['radiator_minyak_pelumas_keluar']; ?></td>
                    <td><?= $row['radiator_air_pendingin_mesin_masuk']; ?></td>
                    <td><?= $row['radiator_air_pendingin_mesin_keluar']; ?></td>
                    <td><?= $row['radiator_air_pendingin_intercooler_masuk']; ?></td>
                    <td><?= $row['radiator_air_pendingin_intercooler_keluar']; ?></td>
                    <td><?= $row['kwh_ps']; ?></td>
                    <td><?= $row['hsd']; ?></td>
                    <td><?= $row['mfo_in']; ?></td>
                    <td><?= $row['mfo_return']; ?></td>
                    <td><?= $row['waktu_input']; ?></td>
                    <td><?= $row['operator']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>