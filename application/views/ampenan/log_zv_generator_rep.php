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
    <p class="title">Log Ampenan Zv Generator</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-baqh" rowspan="4">No</th>
                <th class="tg-baqh" rowspan="4">Tanggal Input</th>
                <th class="tg-baqh" rowspan="4">Waktu</th>
                <th class="tg-baqh" colspan="12">GENERATOR</th>
                <th class="tg-baqh" rowspan="4">BEARING</th>
                <th class="tg-baqh" colspan="3" rowspan="2">SIKAP KWH METER</th>
                <th class="tg-baqh" rowspan="4">LEVEL BECOMS</th>
                <th class="tg-baqh" rowspan="4">WAKTU INPUT</th>
                <th class="tg-baqh" rowspan="4">OPERATOR</th>
            </tr>
            <tr class="heading">
                <td class="tg-baqh" rowspan="3">TEGANGAN (Kv)</td>
                <td class="tg-baqh" rowspan="3">FREKUENSI (Hz)</td>
                <td class="tg-baqh" rowspan="3">FAKTOR DAYA (COS ?)</td>
                <td class="tg-baqh" rowspan="3">DAYA SEMU (MVAR)</td>
                <td class="tg-baqh" rowspan="3">BEBAN (MW)</td>
                <td class="tg-baqh" colspan="3">ARUS (kA)</td>
                <td class="tg-baqh" rowspan="3">PENGUAT MEDAN (EXCITER)</td>
                <td class="tg-baqh" colspan="3">SUHU (?C)</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh" rowspan="2">R</td>
                <td class="tg-baqh" rowspan="2">S</td>
                <td class="tg-baqh" rowspan="2">T</td>
                <td class="tg-baqh" colspan="3">WINDING</td>
                <td class="tg-baqh" colspan="2">KWH PRODUKSI</td>
                <td class="tg-baqh" rowspan="2">KWH ALAT BANTU</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh">1</td>
                <td class="tg-baqh">2</td>
                <td class="tg-baqh">3</td>
                <td class="tg-baqh">HSD</td>
                <td class="tg-baqh">MFO</td>
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
                    <td><?= $row['suhu_winding_1']; ?></td>
                    <td><?= $row['suhu_winding_2']; ?></td>
                    <td><?= $row['suhu_winding_3']; ?></td>
                    <td><?= $row['bearing']; ?></td>
                    <td><?= $row['kwh_produksi_hsd']; ?></td>
                    <td><?= $row['kwh_produksi_mfo']; ?></td>
                    <td><?= $row['kwh_alat_bantu']; ?></td>
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