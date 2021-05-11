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
    <p class="title">Log Perjaman Mesin</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="8">No</th>
                <th class="tg-0lax" rowspan="8">Tanggal Input</th>
                <th class="tg-0lax" rowspan="8">WAKTU</th>
                <th class="tg-0lax" colspan="30">MESIN</th>
                <th class="tg-0lax" rowspan="8">FLOWMETER BAHAN BAKAR</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="30">S U H U ( ⁰ C )</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2" rowspan="3">UDARA MASUK</td>
                <td class="tg-0lax" colspan="4">MINYAK PELUMAS</td>
                <td class="tg-0lax" colspan="18">AIR PENDINGIN MESIN</td>
                <td class="tg-0lax" colspan="6" rowspan="3">GAS BUANG CYLINDER L</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">MASUK</td>
                <td class="tg-0lax" colspan="2" rowspan="2">RADIATOR</td>
                <td class="tg-0lax" colspan="2">MESIN</td>
                <td class="tg-0lax" colspan="2" rowspan="2">RADIATOR</td>
                <td class="tg-0lax" colspan="2" rowspan="2">INJEKTOR</td>
                <td class="tg-0lax" colspan="6" rowspan="2">KELUAR CYLINDER L</td>
                <td class="tg-0lax" colspan="6" rowspan="2">KELUAR CYLINDER R</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">MESIN</td>
                <td class="tg-0lax" colspan="2">MASUK</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">35 - 70 ⁰C</td>
                <td class="tg-0lax" colspan="2">50 - 70 ⁰C</td>
                <td class="tg-0lax" colspan="2">50 - 70 ⁰C</td>
                <td class="tg-0lax" colspan="2">70 - 90 ⁰C</td>
                <td class="tg-0lax" colspan="2">70 - 90 ⁰C</td>
                <td class="tg-0lax" colspan="2">75 - 85 ⁰C</td>
                <td class="tg-0lax" colspan="6">80 - 95 ⁰C</td>
                <td class="tg-0lax" colspan="6">80 - 95 ⁰C</td>
                <td class="tg-0lax" colspan="6">≤ 500 ⁰C</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" rowspan="2">L</td>
                <td class="tg-0lax" rowspan="2">R</td>
                <td class="tg-0lax" rowspan="2">L</td>
                <td class="tg-0lax" rowspan="2">R</td>
                <td class="tg-0lax" rowspan="2">MASUK</td>
                <td class="tg-0lax" rowspan="2">KELUAR</td>
                <td class="tg-0lax" rowspan="2">L</td>
                <td class="tg-0lax" rowspan="2">R</td>
                <td class="tg-0lax" rowspan="2">MASUK</td>
                <td class="tg-0lax" rowspan="2">KELUAR</td>
                <td class="tg-0lax" rowspan="2">MASUK</td>
                <td class="tg-0lax" rowspan="2">KELUAR</td>
                <td class="tg-0lax" rowspan="2">1</td>
                <td class="tg-0lax" rowspan="2">2</td>
                <td class="tg-0lax" rowspan="2">3</td>
                <td class="tg-0lax" rowspan="2">4</td>
                <td class="tg-0lax" rowspan="2">5</td>
                <td class="tg-0lax" rowspan="2">6</td>
                <td class="tg-0lax" rowspan="2">1</td>
                <td class="tg-0lax" rowspan="2">2</td>
                <td class="tg-0lax" rowspan="2">3</td>
                <td class="tg-0lax" rowspan="2">4</td>
                <td class="tg-0lax" rowspan="2">5</td>
                <td class="tg-0lax" rowspan="2">6</td>
                <td class="tg-0lax" rowspan="2">1</td>
                <td class="tg-0lax" rowspan="2">2</td>
                <td class="tg-0lax" rowspan="2">3</td>
                <td class="tg-0lax" rowspan="2">4</td>
                <td class="tg-0lax" rowspan="2">5</td>
                <td class="tg-0lax" rowspan="2">6</td>
            </tr>
            <tr class="heading">
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu'] ?></td>
                    <td><?= $row['udara_masuk_l'] ?></td>
                    <td><?= $row['udara_masuk_r'] ?></td>
                    <td><?= $row['minyak_pelumas_masuk_mesin_l'] ?></td>
                    <td><?= $row['minyak_pelumas_masuk_mesin_r'] ?></td>
                    <td><?= $row['minyak_pelumas_radiator_masuk'] ?></td>
                    <td><?= $row['minyak_pelumas_radiator_keluar'] ?></td>
                    <td><?= $row['air_pendingin_mesin_masuk_l'] ?></td>
                    <td><?= $row['air_pendingin_mesin_masuk_r'] ?></td>
                    <td><?= $row['air_pendingin_radiator_masuk'] ?></td>
                    <td><?= $row['air_pendingin_radiator_keluar'] ?></td>
                    <td><?= $row['air_pendingin_injektor_masuk'] ?></td>
                    <td><?= $row['air_pendingin_injektor_keluar'] ?></td>
                    <td><?= $row['keluar_cylinder_l_1'] ?></td>
                    <td><?= $row['keluar_cylinder_l_2'] ?></td>
                    <td><?= $row['keluar_cylinder_l_3'] ?></td>
                    <td><?= $row['keluar_cylinder_l_4'] ?></td>
                    <td><?= $row['keluar_cylinder_l_5'] ?></td>
                    <td><?= $row['keluar_cylinder_l_6'] ?></td>
                    <td><?= $row['keluar_cylinder_r_1'] ?></td>
                    <td><?= $row['keluar_cylinder_r_2'] ?></td>
                    <td><?= $row['keluar_cylinder_r_3'] ?></td>
                    <td><?= $row['keluar_cylinder_r_4'] ?></td>
                    <td><?= $row['keluar_cylinder_r_5'] ?></td>
                    <td><?= $row['keluar_cylinder_r_6'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_1'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_2'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_3'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_4'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_5'] ?></td>
                    <td><?= $row['gas_buang_cylinder_l_6'] ?></td>
                    <td><?= $row['flow_meter_bahan_bakar'] ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <pagebreak></pagebreak>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-c3ow" rowspan="3">no</th>
                <th class="tg-c3ow" rowspan="3">tanggal input</th>
                <th class="tg-c3ow" rowspan="3">Waktu</th>
                <th class="tg-c3ow" colspan="12">Suhu</th>
                <th class="tg-c3ow" rowspan="3">Rak BBM</th>
                <th class="tg-c3ow" rowspan="3">Governor Load Limit</th>
                <th class="tg-c3ow" colspan="8">Tekanan</th>
                <th class="tg-c3ow" colspan="2">Putaran Turbo</th>
                <th class="tg-c3ow" colspan="8">Temperature Bearing</th>
            </tr>
            <tr class="heading">
                <th class="tg-c3ow" colspan="6">GBC</th>
                <th class="tg-c3ow" colspan="4">TM</th>
                <th class="tg-c3ow" colspan="2">TK<br></th>
                <td class="tg-c3ow" rowspan="2">API</td>
                <td class="tg-c3ow" rowspan="2">PM</td>
                <th class="tg-c3ow" colspan="2">UM<br></th>
                <td class="tg-c3ow" rowspan="2">BBM</td>
                <td class="tg-c3ow" rowspan="2">UM</td>
                <td class="tg-c3ow" rowspan="2">US</td>
                <td class="tg-c3ow" rowspan="2">UPMM</td>
                <td class="tg-c3ow" rowspan="2">Kiri</td>
                <td class="tg-c3ow" rowspan="2">Kanan</td>
                <td class="tg-c3ow" rowspan="2">1</td>
                <td class="tg-c3ow" rowspan="2">2</td>
                <td class="tg-c3ow" rowspan="2">3</td>
                <td class="tg-c3ow" rowspan="2">4</td>
                <td class="tg-c3ow" rowspan="2">5</td>
                <td class="tg-c3ow" rowspan="2">6</td>
                <td class="tg-c3ow" rowspan="2">7</td>
                <td class="tg-c3ow" rowspan="2">8</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">3</td>
                <td class="tg-c3ow">4</td>
                <td class="tg-c3ow">5</td>
                <td class="tg-c3ow">6</td>
                <td class="tg-c3ow">Kitas</td>
                <td class="tg-c3ow">Kibah</td>
                <td class="tg-c3ow">Katas</td>
                <td class="tg-c3ow">Kabah</td>
                <td class="tg-c3ow">Kiri<br></td>
                <td class="tg-c3ow">Kanan</td>
                <td class="tg-c3ow">Kiri</td>
                <td class="tg-c3ow">Kanan</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu'] ?></td>
                    <td><?= $row['gas1'] ?></td>
                    <td><?= $row['gas2'] ?></td>
                    <td><?= $row['gas3'] ?></td>
                    <td><?= $row['gas4'] ?></td>
                    <td><?= $row['gas5'] ?></td>
                    <td><?= $row['gas6'] ?></td>
                    <td><?= $row['turbo_masuk_kiri_atas'] ?></td>
                    <td><?= $row['turbo_masuk_kiri_bawah'] ?></td>
                    <td><?= $row['turbo_masuk_kanan_atas'] ?></td>
                    <td><?= $row['turbo_masuk_kanan_bawah'] ?></td>
                    <td><?= $row['turbo_keluar_kiri'] ?></td>
                    <td><?= $row['turbo_keluar_kanan'] ?></td>
                    <td><?= $row['rak_bbm'] ?></td>
                    <td><?= $row['governor_load_limit'] ?></td>
                    <td><?= $row['air_ped_injektor'] ?></td>
                    <td><?= $row['pelumasan_mesin'] ?></td>
                    <td><?= $row['udara_masuk_kiri'] ?></td>
                    <td><?= $row['udara_masuk_kanan'] ?></td>
                    <td><?= $row['bahan_bakar_mesin'] ?></td>
                    <td><?= $row['udara_masuk'] ?></td>
                    <td><?= $row['udara_start'] ?></td>
                    <td><?= $row['air_pend_masuk_mesin'] ?></td>
                    <td><?= $row['putaran_turbo_kiri'] ?></td>
                    <td><?= $row['putaran_turbo_kanan'] ?></td>
                    <td><?= $row['bearing1'] ?></td>
                    <td><?= $row['bearing2'] ?></td>
                    <td><?= $row['bearing3'] ?></td>
                    <td><?= $row['bearing4'] ?></td>
                    <td><?= $row['bearing5'] ?></td>
                    <td><?= $row['bearing6'] ?></td>
                    <td><?= $row['bearing7'] ?></td>
                    <td><?= $row['bearing8'] ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>