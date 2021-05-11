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
    <p class="title">Log Ampenan Niigata Generator</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-c3ow" rowspan="4">No</th>
                <th class="tg-c3ow" rowspan="4">Tanggal Input</th>
                <th class="tg-c3ow" rowspan="4">Waktu</th>
                <th class="tg-c3ow" colspan="13">GENERATOR</th>
                <th class="tg-c3ow" rowspan="4">BEARING</th>
                <th class="tg-c3ow" colspan="2" rowspan="3">Pendingin<br>Udara<br>Generator</th>
                <th class="tg-c3ow" colspan="2" rowspan="3">Putaran Turbo</th>
                <th class="tg-c3ow" rowspan="4">Sikap<br>KWH<br>Meter</th>
                <th class="tg-c3ow" rowspan="4">Level<br>Become</th>
                <th class="tg-c3ow" colspan="4" rowspan="3"></th>
                <th class="tg-c3ow" colspan="23">TEMPERATUR ( °C )</th>
                <th class="tg-c3ow" rowspan="4">WAKTU INPUT</th>
                <th class="tg-c3ow" rowspan="4">OPERATOR</th>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" rowspan="3">TEGANGAN <br>(Kv)</td>
                <td class="tg-c3ow" rowspan="3">FREKUENSI<br>(Hz)</td>
                <td class="tg-c3ow" rowspan="3">FAKTOR DAYA<br>(COS ?)</td>
                <td class="tg-c3ow" rowspan="3">DAYA SEMU<br>(MVAR)</td>
                <td class="tg-c3ow" rowspan="3">BEBAN<br>(MW)</td>
                <td class="tg-c3ow" colspan="3">ARUS (kA)</td>
                <td class="tg-c3ow" colspan="2">PENGUAT MEDAN (EXCITER)</td>
                <td class="tg-c3ow" colspan="3">SUHU (?C)</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">Air Pendingin<br>Mesin</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">MINYAK PELUMAS</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">UDARA BILAS</td>
                <td class="tg-c3ow" rowspan="3">Air<br>Pendingin<br>Udara<br>Masuk</td>
                <td class="tg-c3ow" colspan="12">GAS BUANG</td>
                <td class="tg-c3ow" colspan="4">TURBO</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" rowspan="2">R</td>
                <td class="tg-c3ow" rowspan="2">S</td>
                <td class="tg-c3ow" rowspan="2">T</td>
                <td class="tg-c3ow" rowspan="2">Arus</td>
                <td class="tg-c3ow" rowspan="2">Tegangan</td>
                <td class="tg-c3ow" colspan="3">WINDING</td>
                <td class="tg-c3ow" colspan="6">SILINDER SISI A</td>
                <td class="tg-c3ow" colspan="6">SILINDER SISI B</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">3</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">R</td>
                <td class="tg-c3ow">S</td>
                <td class="tg-c3ow">T</td>
                <td class="tg-c3ow">MW</td>
                <td class="tg-c3ow">Masuk</td>
                <td class="tg-c3ow">Keluar</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">3</td>
                <td class="tg-c3ow">4</td>
                <td class="tg-c3ow">5</td>
                <td class="tg-c3ow">6</td>
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">3</td>
                <td class="tg-c3ow">4</td>
                <td class="tg-c3ow">5</td>
                <td class="tg-c3ow">6</td>
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['tegangan']; ?></td>
                    <td><?= $row['frekuensi']; ?></td>
                    <td><?= $row['faktor_daya']; ?></td>
                    <td><?= $row['daya_semu']; ?></td>
                    <td><?= $row['beban']; ?></td>
                    <td><?= $row['arus_r']; ?></td>
                    <td><?= $row['arus_s']; ?></td>
                    <td><?= $row['arus_t']; ?></td>
                    <td><?= $row['penguat_medan_arus']; ?></td>
                    <td><?= $row['penguat_medan_tegangan']; ?></td>
                    <td><?= $row['suhu_1']; ?></td>
                    <td><?= $row['suhu_2']; ?></td>
                    <td><?= $row['suhu_3']; ?></td>
                    <td><?= $row['bearing']; ?></td>
                    <td><?= $row['pendingin_udara_generator_masuk']; ?></td>
                    <td><?= $row['pendingin_udara_generator_keluar']; ?></td>
                    <td><?= $row['putaran_turbo_a']; ?></td>
                    <td><?= $row['putaran_turbo_b']; ?></td>
                    <td><?= $row['sikap_kwh_meter']; ?></td>
                    <td><?= $row['level_become']; ?></td>
                    <td><?= $row['daya_r']; ?></td>
                    <td><?= $row['daya_s']; ?></td>
                    <td><?= $row['daya_t']; ?></td>
                    <td><?= $row['daya_mw']; ?></td>
                    <td><?= $row['air_pendingin_mesin_masuk']; ?></td>
                    <td><?= $row['air_pendingin_mesin_keluar']; ?></td>
                    <td><?= $row['minyak_pelumas_masuk']; ?></td>
                    <td><?= $row['minyak_pelumas_keluar']; ?></td>
                    <td><?= $row['udara_bilas_A']; ?></td>
                    <td><?= $row['udara_bilas_B']; ?></td>
                    <td><?= $row['air_pendingin_udara_masuk']; ?></td>
                    <td><?= $row['silinder_sisi_A_1']; ?></td>
                    <td><?= $row['silinder_sisi_A_2']; ?></td>
                    <td><?= $row['silinder_sisi_A_3']; ?></td>
                    <td><?= $row['silinder_sisi_A_4']; ?></td>
                    <td><?= $row['silinder_sisi_A_5']; ?></td>
                    <td><?= $row['silinder_sisi_A_6']; ?></td>
                    <td><?= $row['silinder_sisi_B_1']; ?></td>
                    <td><?= $row['silinder_sisi_B_2']; ?></td>
                    <td><?= $row['silinder_sisi_B_3']; ?></td>
                    <td><?= $row['silinder_sisi_B_4']; ?></td>
                    <td><?= $row['silinder_sisi_B_5']; ?></td>
                    <td><?= $row['silinder_sisi_B_6']; ?></td>
                    <td><?= $row['turbo_a_1_a']; ?></td>
                    <td><?= $row['turbo_b_1_a']; ?></td>
                    <td><?= $row['turbo_a_1_b']; ?></td>
                    <td><?= $row['turbo_b_1_b']; ?></td>
                    <td><?= $row['waktu_input']; ?></td>
                    <td><?= $row['operator']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>