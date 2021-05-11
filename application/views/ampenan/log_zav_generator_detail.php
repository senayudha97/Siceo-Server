<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> Laporan Tiap Jam Sentral </h2>

            <table class="table table-hover table-responsive table-bordered text-center mt-5">
                <tr class="bg-primary text-light">
                    <th scope="col" rowspan="4">Waktu</th>
                    <th scope="col" colspan="10">Generator</th>
                    <th scope="col" rowspan="4">Bearing</th>
                    <th scope="col" rowspan="2" colspan="3">Sikap KWH Meter</th>
                    <th scope="col" rowspan="2" colspan="3">Arus(A)</th>
                    <th scope="col" rowspan="4">Level Becoms</th>
                    <th scope="col" rowspan="4">Waktu Input</th>
                    <th scope="col" rowspan="4">Operator</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" rowspan="3"> Tegangan</th>
                    <th scope="row" rowspan="3">Frekuensi</th>
                    <th scope="row" rowspan="3">Faktor Daya</th>
                    <th scope="row" rowspan="3">Daya Semu</th>
                    <th scope="row" rowspan="3">Beban</th>
                    <th scope="row" rowspan="2" colspan="3">Arus (kA)</th>
                    <th scope="row" rowspan="2" colspan="2">Penguat Medan (Exciter)</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row" colspan="2"> KWH Produksi </th>
                    <th scope="row" rowspan="2">KWH Alat Bantu</th>
                    <th scope="row" rowspan="2"> R</th>
                    <th scope="row" rowspan="2"> S</th>
                    <th scope="row" rowspan="2"> T</th>
                </tr>
                <tr class="bg-primary text-light">
                    <th scope="row">R</th>
                    <th scope="row">S</th>
                    <th scope="row">T</th>
                    <th scope="row">Arus</th>
                    <th scope="row">Tegangan</th>
                    <th scope="row">HSD</th>
                    <th scope="row">MFO</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th scope="row">2</th>
                    <th scope="row">3</th>
                    <th scope="row">4</th>
                    <th scope="row">5</th>
                    <th scope="row">6</th>
                    <th scope="row">7</th>
                    <th scope="row">8</th>
                    <th scope="row">9</th>
                    <th scope="row">10</th>
                    <th scope="row">11</th>
                    <th scope="row">12</th>
                    <th scope="row">13</th>
                    <th scope="row">14</th>
                    <th scope="row">15</th>
                    <th scope="row">16</th>
                    <th scope="row">17</th>
                    <th scope="row">18</th>
                    <th scope="row">19</th>
                    <th scope="row">20</th>
                    <th scope="row">21</th>
                </tr>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <tr>
                        <td scope="row">10.00</td>
                        <td scope="row">2</td>
                        <td scope="row">3</td>
                        <td scope="row">4</td>
                        <td scope="row">5</td>
                        <td scope="row">6</td>
                        <td scope="row">7</td>
                        <td scope="row">8</td>
                        <td scope="row">9</td>
                        <td scope="row">10</td>
                        <td scope="row">11</td>
                        <td scope="row">12</td>
                        <td scope="row">13</td>
                        <td scope="row">14</td>
                        <td scope="row">15</td>
                        <td scope="row">16</td>
                        <td scope="row">17</td>
                        <td scope="row">18</td>
                        <td scope="row">19</td>
                        <td scope="row">20</td>
                        <td scope="row">21</td>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>
</div>
</div>