<!!!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= base_url() ?>assets/dist/nota/nota.css">
        <title>Receipt example</title>
    </head>
    <body>
        <div class="ticket" margin-left='80px'>
            <img src="<?= base_url() ?>assets/dist/nota/logo.bmp" alt="Logo">
            <p class="centered">No. Nota : <?=$idtrx?>
                <br>Address line 1
                <br>Address line 2</p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Jumlah.</th>
                        <th class="description">Menu</th>
                        <th class="price">Harga</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <?php foreach ($datatrx as $d) :
                            $jumlah= $d['jumlah'];
                            $namamenu= $d['nama_menu'];
                            $harga=$d['harga'];

                             ?>
                    <tr>
                        <td class="quantity"><?=$jumlah?></td>
                        <td class="description"><?=$namamenu?></td>
                        <td class="price"><?=$harga?></td>
                    </tr>
                    <?php
                endforeach;?>
                </tbody>
            </table>
            <p class="centered">Terimakasih Atas Pembeliannya
                <br>Selamat Menikmati</p>
        </div>
        <button id="btnPrint" class="hidden-print">Print</button>
        <script src="<?= base_url() ?>assets/dist/nota/scriptprintnota.js"></script>
    </body>
</html>