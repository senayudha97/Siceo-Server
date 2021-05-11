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
    <p class="title">Log Ampenan ZA CMR</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-baqh" rowspan="4">No</th>
                <th class="tg-baqh" rowspan="4">Tanggal Input</th>
                <th class="tg-baqh" rowspan="4">WAKTU</th>
                <th class="tg-baqh" colspan="7">TEKANAN (Bar)</th>
                <th class="tg-baqh" colspan="16">TEMPERATUR ( ?C )</th>
            </tr>
            <tr class="heading">
                <td class="tg-baqh" rowspan="3">UDARA START</td>
                <td class="tg-baqh" rowspan="3">AIR PENDINGIN MESIN</td>
                <td class="tg-baqh" rowspan="3">AIR PENDINGIN INJECTOR</td>
                <td class="tg-baqh" rowspan="3">RAW WATER</td>
                <td class="tg-baqh" rowspan="3">MINYAK PELUMAS</td>
                <td class="tg-baqh" rowspan="3">BAHAN BAKAR</td>
                <td class="tg-baqh" rowspan="3">UDARA MASUK</td>
                <td class="tg-baqh" colspan="16">GAS BUANG</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh" colspan="6">KELUAR SILINDER SISI A</td>
                <td class="tg-baqh" colspan="6">KELUAR SILINDER SISI B</td>
                <td class="tg-baqh" colspan="2">TURBO A</td>
                <td class="tg-baqh" colspan="2">TURBO B</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh">1</td>
                <td class="tg-baqh">2</td>
                <td class="tg-baqh">3</td>
                <td class="tg-baqh">4</td>
                <td class="tg-baqh">5</td>
                <td class="tg-baqh">6</td>
                <td class="tg-baqh">1</td>
                <td class="tg-baqh">2</td>
                <td class="tg-baqh">3</td>
                <td class="tg-baqh">4</td>
                <td class="tg-baqh">5</td>
                <td class="tg-baqh">6</td>
                <td class="tg-baqh">MASUK</td>
                <td class="tg-baqh">KELUAR</td>
                <td class="tg-baqh">MASUK</td>
                <td class="tg-baqh">KELUAR</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['udara_start']; ?></td>
                    <td><?= $row['air_pendingin_mesin']; ?></td>
                    <td><?= $row['air_pendingin_injector']; ?></td>
                    <td><?= $row['raw_water']; ?></td>
                    <td><?= $row['minyak_pelumas']; ?></td>
                    <td><?= $row['bahan_bakar']; ?></td>
                    <td><?= $row['udara_masuk']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_1']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_2']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_3']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_4']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_5']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_6']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_1']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_2']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_3']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_4']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_5']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_6']; ?></td>
                    <td><?= $row['turbo_a_masuk']; ?></td>
                    <td><?= $row['turbo_a_keluar']; ?></td>
                    <td><?= $row['turbo_b_masuk']; ?></td>
                    <td><?= $row['turbo_b_keluar']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <pagebreak />
    </pagebreak>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0pky" rowspan="3">No</th>
                <th class="tg-0pky" rowspan="3">Tanggal Input</th>
                <th class="tg-0pky" rowspan="3">WAKTU</th>
                <th class="tg-0pky" colspan="22">TEMPERATUR ( ?C )</th>
                <th class="tg-0pky" colspan="2">PUTARAN TURBO (RPM) X 100</th>
            </tr>
            <tr class="heading">
                <td class="tg-0pky" rowspan="2">AIR PENDINGIN MESIN</td>
                <td class="tg-0pky" rowspan="2">AIR PENDINGIN INJECTOR</td>
                <td class="tg-0pky" rowspan="2">MINYAK PELUMAS</td>
                <td class="tg-0pky" rowspan="2">BAHAN BAKAR</td>
                <td class="tg-0pky" rowspan="2">RAW WATER</td>
                <td class="tg-0pky" rowspan="2">UDARA MASUK</td>
                <td class="tg-0pky" colspan="2">BEARING GENERATOR</td>
                <td class="tg-0pky" rowspan="2">THRUST BEARING</td>
                <td class="tg-0pky" colspan="7">MAIN BEARING</td>
                <td class="tg-0pky" colspan="6">STATOR</td>
                <td class="tg-0pky" rowspan="2">A</td>
                <td class="tg-0pky" rowspan="2">B</td>
            </tr>
            <tr class="heading">
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
                <td class="tg-0pky">7</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['temperatur_air_pendingin_mesin']; ?></td>
                    <td><?= $row['temperatur_air_pendingin_injector']; ?></td>
                    <td><?= $row['temperatur_minyak_pelumas']; ?></td>
                    <td><?= $row['temperatur_bahan_bakar']; ?></td>
                    <td><?= $row['temperatur_raw_water']; ?></td>
                    <td><?= $row['temperatur_udara_masuk']; ?></td>
                    <td><?= $row['bearing_generator1']; ?></td>
                    <td><?= $row['bearing_generator2']; ?></td>
                    <td><?= $row['thrust_bearing']; ?></td>
                    <td><?= $row['main_bearing1']; ?></td>
                    <td><?= $row['main_bearing2']; ?></td>
                    <td><?= $row['main_bearing3']; ?></td>
                    <td><?= $row['main_bearing4']; ?></td>
                    <td><?= $row['main_bearing5']; ?></td>
                    <td><?= $row['main_bearing6']; ?></td>
                    <td><?= $row['main_bearing7']; ?></td>
                    <td><?= $row['stator1']; ?></td>
                    <td><?= $row['stator2']; ?></td>
                    <td><?= $row['stator3']; ?></td>
                    <td><?= $row['stator4']; ?></td>
                    <td><?= $row['stator5']; ?></td>
                    <td><?= $row['stator6']; ?></td>
                    <td><?= $row['putaran_turbo_a']; ?></td>
                    <td><?= $row['putaran_turbo_b']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>

</body>

</html>