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

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top
        }
    </style>
</head>

<body style="font-size: 10pt;">
    <img src="<?= base_url('assets/img/kop.png'); ?>" style="padding-left: -12px;" width="20%">
    <br>
    <p class="title">Log Ampenan Pielstick Generator</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="3">No</th>
                <th class="tg-0lax" rowspan="3">tanggal Input</th>
                <th class="tg-0lax" rowspan="3">WAKTU</th>
                <th class="tg-0lax" colspan="18">GENERATOR</th>
                <th class="tg-0lax" rowspan="3">KWH PRODUKSI</th>
                <th class="tg-0lax" rowspan="3">FLOW METER BAHAN BAKAR</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" rowspan="2">TEGANGAN ( KV )</td>
                <td class="tg-0lax" rowspan="2">FREKWENSI ( HZ )</td>
                <td class="tg-0lax" rowspan="2">FAKTOR DAYA (COS?)</td>
                <td class="tg-0lax" rowspan="2">DAYA SEMU (MVAR)</td>
                <td class="tg-0lax" rowspan="2">BEBAN ( KW )</td>
                <td class="tg-0lax" colspan="3">ARUS ( AMPERE )</td>
                <td class="tg-0lax" colspan="2">PENGUAT MEDAN ( EXCITER )</td>
                <td class="tg-0lax" colspan="6">KUMPARAN GENERATOR</td>
                <td class="tg-0lax" rowspan="2">BANTALAN GENERATOR</td>
                <td class="tg-0lax" rowspan="2">UDARA PENDINGIN</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">R</td>
                <td class="tg-0lax">S</td>
                <td class="tg-0lax">T</td>
                <td class="tg-0lax">TEG (V)</td>
                <td class="tg-0lax">ARUS ( A )</td>
                <td class="tg-0lax">1</td>
                <td class="tg-0lax">2</td>
                <td class="tg-0lax">3</td>
                <td class="tg-0lax">4</td>
                <td class="tg-0lax">5</td>
                <td class="tg-0lax">6</td>
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
                    <td><?= $row['frekwensi']; ?></td>
                    <td><?= $row['faktor_daya']; ?></td>
                    <td><?= $row['daya_semu']; ?></td>
                    <td><?= $row['beban']; ?></td>
                    <td><?= $row['arus_r']; ?></td>
                    <td><?= $row['arus_s']; ?></td>
                    <td><?= $row['arus_t']; ?></td>
                    <td><?= $row['penguat_medan_teg']; ?></td>
                    <td><?= $row['penguat_medan_arus']; ?></td>
                    <td><?= $row['kumparan_generator1']; ?></td>
                    <td><?= $row['kumparan_generator2']; ?></td>
                    <td><?= $row['kumparan_generator3']; ?></td>
                    <td><?= $row['kumparan_generator4']; ?></td>
                    <td><?= $row['kumparan_generator5']; ?></td>
                    <td><?= $row['kumparan_generator6']; ?></td>
                    <td><?= $row['bantalan_generator']; ?></td>
                    <td><?= $row['udara_pendingin']; ?></td>
                    <td><?= $row['kwh_produksi']; ?></td>
                    <td><?= $row['flow_meter_bahan_bakar']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>


</body>

</html>