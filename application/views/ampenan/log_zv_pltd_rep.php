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
    <p class="title">Log Ampenan Zv PLTD</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-c3ow" rowspan="4">No</th>
                <th class="tg-c3ow" rowspan="4">Tanggal Input</th>
                <th class="tg-c3ow" rowspan="4">WAKTU</th>
                <th class="tg-c3ow" colspan="53">TEMPERATUR (C)</th>
                <th class="tg-c3ow" rowspan="4">RACK <br>BAHAN <br>BAKAR</th>
                <th class="tg-c3ow" rowspan="4">GOVERNOR <br>LOAD <br>LIMIT</th>
                <th class="tg-c3ow" colspan="10">TEKANAN</th>
                <th class="tg-c3ow" colspan="2" rowspan="3">PUTARAN <br>TURBO ( RPM ) <br>X 1000</th>
                <th class="tg-c3ow" rowspan="4">TEKANAN <br>OLI <br>PADA <br>SEPARATOR</th>
                <th class="tg-c3ow" rowspan="4">AMPERE <br>POMPA <br>ALI</th>
                <th class="tg-c3ow" rowspan="4">AMPERE <br>POMPA <br>JW</th>
                <th class="tg-c3ow" colspan="3" rowspan="2">SIKAP FLOW-METER <br>BAHAN BAKAR</th>
                <th class="tg-c3ow" rowspan="4">WAKTU <br>INPUT</th>
                <th class="tg-c3ow" rowspan="4">OPERATOR</th>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" colspan="2" rowspan="2">UDARA MASUK</td>
                <td class="tg-c3ow" colspan="4">OLI</td>
                <td class="tg-c3ow" colspan="18">AIR PENDINGIN</td>
                <td class="tg-c3ow" colspan="12">GAS BUANG</td>
                <td class="tg-c3ow" colspan="9" rowspan="2">MAIN BEARING</td>
                <td class="tg-c3ow" colspan="6">TURBO</td>
                <td class="tg-c3ow" rowspan="3">AIR<br>PENDINGIN<br>KELUAR<br>MESIN</td>
                <td class="tg-c3ow" rowspan="3">BAHAN <br>BAKAR <br>MASUK <br>MESIN</td>
                <td class="tg-c3ow" rowspan="3">UDARA <br>START</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">PRESSURE <br>UDARA <br>MASUK</td>
                <td class="tg-c3ow" rowspan="3">UDARA <br>MASUK <br>A&amp;B</td>
                <td class="tg-c3ow" rowspan="3">BAHAN <br>BAKAR <br>MASUK <br>MESIN</td>
                <td class="tg-c3ow" rowspan="3">MINYAK <br>PELUMAS</td>
                <td class="tg-c3ow" rowspan="3">AIR <br>PENDINGIN <br>MESIN</td>
                <td class="tg-c3ow" rowspan="3">AIR <br>PENDINGIN <br>INJEKTOR</td>
                <td class="tg-c3ow" colspan="2" rowspan="2">UDARA <br>MASUK <br>DISALURKAN</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow" colspan="2">MASUK MESIN</td>
                <td class="tg-c3ow" colspan="2">RADIATOR</td>
                <td class="tg-c3ow" colspan="2">MASUK MESIN</td>
                <td class="tg-c3ow" colspan="2">RADIATOR</td>
                <td class="tg-c3ow" colspan="2">INJEKTOR</td>
                <td class="tg-c3ow" colspan="6">KELUAR SILINDER SISI A</td>
                <td class="tg-c3ow" colspan="6">KELUAR SILINDER SISI B</td>
                <td class="tg-c3ow" colspan="6">KELUAR SILINDER SISI A</td>
                <td class="tg-c3ow" colspan="5">KELUAR SILINDER SISI B</td>
                <td class="tg-c3ow"></td>
                <td class="tg-c3ow" colspan="2">MASUK A</td>
                <td class="tg-c3ow" colspan="2">MASUK B</td>
                <td class="tg-c3ow" colspan="2">KELUAR</td>
                <td class="tg-c3ow" colspan="2">MFO</td>
                <td class="tg-c3ow" rowspan="2">HSD</td>
            </tr>
            <tr class="heading">
                <td class="tg-c3ow">SISI A</td>
                <td class="tg-c3ow">SISI B</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
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
                <td class="tg-c3ow">1</td>
                <td class="tg-c3ow">2</td>
                <td class="tg-c3ow">3</td>
                <td class="tg-c3ow">4</td>
                <td class="tg-c3ow">5</td>
                <td class="tg-c3ow">6</td>
                <td class="tg-c3ow">7</td>
                <td class="tg-c3ow">8</td>
                <td class="tg-c3ow">9</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">MASUK</td>
                <td class="tg-c3ow">KELUAR</td>
                <td class="tg-c3ow">A</td>
                <td class="tg-c3ow">B</td>
                <td class="tg-c3ow">SISI A</td>
                <td class="tg-c3ow">SISI B</td>
                <td class="tg-c3ow">SISI A</td>
                <td class="tg-c3ow">SISI B</td>
                <td class="tg-c3ow">SISI A</td>
                <td class="tg-c3ow">SISI B</td>
                <td class="tg-c3ow">IN</td>
                <td class="tg-c3ow">RETURN</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['udara_masuk_sisi_a']; ?></td>
                    <td><?= $row['udara_masuk_sisi_b']; ?></td>
                    <td><?= $row['oli_masuk_mesin_a']; ?></td>
                    <td><?= $row['oli_masuk_mesin_b']; ?></td>
                    <td><?= $row['oli_radiator_masuk']; ?></td>
                    <td><?= $row['oli_radiator_keluar']; ?></td>
                    <td><?= $row['air_pendingin_masuk_mesin_a']; ?></td>
                    <td><?= $row['air_pendingin_masuk_mesin_b']; ?></td>
                    <td><?= $row['air_pendingin_radiator_masuk']; ?></td>
                    <td><?= $row['air_pendingin_radiator_keluar']; ?></td>
                    <td><?= $row['air_pendingin_injektor_masuk']; ?></td>
                    <td><?= $row['air_pendingin_injektor_keluar']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_1']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_2']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_3']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_4']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_5']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a_6']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_1']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_2']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_3']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_4']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_5']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b_6']; ?></td>
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
                    <td><?= $row['main_bearing_1']; ?></td>
                    <td><?= $row['main_bearing_2']; ?></td>
                    <td><?= $row['main_bearing_3']; ?></td>
                    <td><?= $row['main_bearing_4']; ?></td>
                    <td><?= $row['main_bearing_5']; ?></td>
                    <td><?= $row['main_bearing_6']; ?></td>
                    <td><?= $row['main_bearing_7']; ?></td>
                    <td><?= $row['main_bearing_8']; ?></td>
                    <td><?= $row['main_bearing_9']; ?></td>
                    <td><?= $row['turbo_a_masuk']; ?></td>
                    <td><?= $row['turbo_a_keluar']; ?></td>
                    <td><?= $row['turbo_b_masuk']; ?></td>
                    <td><?= $row['turbo_b_keluar']; ?></td>
                    <td><?= $row['turbo_keluar_a']; ?></td>
                    <td><?= $row['turbo_keluar_b']; ?></td>
                    <td><?= $row['air_pendingin_keluar_mesin']; ?></td>
                    <td><?= $row['bahan_bakar_masuk_mesin']; ?></td>
                    <td><?= $row['rack_bahan_bakar']; ?></td>
                    <td><?= $row['governor_load_limit']; ?></td>
                    <td><?= $row['udara_start']; ?></td>
                    <td><?= $row['presure_udara_masuk_sisi_a']; ?></td>
                    <td><?= $row['presure_udara_masuk_sisi_b']; ?></td>
                    <td><?= $row['udara_masuk_ab']; ?></td>
                    <td><?= $row['bahan_bakar_masuk_mesin1']; ?></td>
                    <td><?= $row['minyak_pelumas']; ?></td>
                    <td><?= $row['air_pendingin_mesin']; ?></td>
                    <td><?= $row['air_pendingin_injektor']; ?></td>
                    <td><?= $row['udara_masuk_disalurkan_sisi_a']; ?></td>
                    <td><?= $row['udara_masuk_disalurkan_sisi_b']; ?></td>
                    <td><?= $row['putaran_turbo_sisi_a']; ?></td>
                    <td><?= $row['putaran_turbo_sisi_b']; ?></td>
                    <td><?= $row['tekanan_oli_pada_separator']; ?></td>
                    <td><?= $row['ampere_pompa_ali']; ?></td>
                    <td><?= $row['ampere_pompa_jw']; ?></td>
                    <td><?= $row['mfo_in']; ?></td>
                    <td><?= $row['mfo_return']; ?></td>
                    <td><?= $row['hsd']; ?></td>
                    <td><?= $row['waktu_input']; ?></td>
                    <td><?= $row['operator']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>