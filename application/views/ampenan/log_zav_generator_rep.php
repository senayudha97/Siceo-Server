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
    <p class="title">Log Ampenan Zav Generator</p>
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
                <th class="tg-c3ow" colspan="10">Generator</th>
                <th class="tg-c3ow" rowspan="4">Bearing</th>
                <th class="tg-c3ow" colspan="3" rowspan="2">Sikap KWH Meter</th>
                <th class="tg-c3ow" colspan="3" rowspan="2">Arus (A)</th>
                <th class="tg-c3ow" rowspan="4">Level Becomes</th>
                <th class="tg-c3ow" rowspan="4">Waktu Input</th>
                <th class="tg-0pky" rowspan="4">Operator</th>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" rowspan="3">Tegangan<br>(Kv)</td>
                <td class="tg-c3ow" rowspan="3">Frekuensi<br>(Hz)</td>
                <td class="tg-c3ow" rowspan="3">Faktor Daya<br>(COS)</td>
                <td class="tg-c3ow" rowspan="3">Daya Semu<br> MVAR)</td>
                <td class="tg-c3ow" rowspan="3">Beban<br> MW)</td>
                <td class="tg-c3ow" colspan="3">Arus (kA)</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">Penguat Medan<br>(Exciter)</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" rowspan="2">R</td>
                <td class="tg-c3ow" rowspan="2">S</td>
                <td class="tg-c3ow" rowspan="2">T</td>
                <td class="tg-c3ow" colspan="2">KWH Produksi</td>
                <td class="tg-c3ow" rowspan="2">KWH Alat Bantu</td>
                <td class="tg-c3ow" rowspan="2">R</td>
                <td class="tg-c3ow" rowspan="2">S</td>
                <td class="tg-c3ow" rowspan="2">T</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow">Arus</td>
                <td class="tg-c3ow">Tegangan</td>
                <td class="tg-c3ow">HSD</td>
                <td class="tg-c3ow">MFO</td>
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
                    <td><?= $row['arus_a_r']; ?></td>
                    <td><?= $row['arus_a_s']; ?></td>
                    <td><?= $row['arus_a_t']; ?></td>
                    <td><?= $row['penguat_medan_arus']; ?></td>
                    <td><?= $row['penguat_medan_tegangan']; ?></td>
                    <td><?= $row['bearing']; ?></td>
                    <td><?= $row['kwh_produksi_hsd']; ?></td>
                    <td><?= $row['kwh_produksi_mfo']; ?></td>
                    <td><?= $row['kwh_alat_bantu']; ?></td>
                    <td><?= $row['arus_b_r']; ?></td>
                    <td><?= $row['arus_b_s']; ?></td>
                    <td><?= $row['arus_b_t']; ?></td>
                    <td><?= $row['level_becomes']; ?></td>
                    <td><?= $row['waktu_input']; ?></td>
                    <td><?= $row['operator']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>