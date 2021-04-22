
<?php
// Ray Pratidina IF-C 20 //
// 203040099 //
// Kamis 08:00-09:00 //
$mouse_keyboard = [
    [
        "picture" => "razer hustman.jpg",
        "name" => "Razer Hunstman",
        "description" => "Sakelar Mekanik Lebih Cepat Daripada Sakelar Mekanik Lawas: Sakelar Razer Optik
         menggunakan aktuasi berbasis cahaya, mencatat penekanan tombol pada kecepatan cahaya 
         (jarak aktuasi 30% lebih pendek daripada sakelar clicky lainnya pada 1,5 mm) dengan umpan balik 
         yang memuaskan dan clicky",
        "price" => "Rp1.949.000",
        "category" => "Keyboard Gaming",
    ],
    [
        "picture" => "logitech.png",
        "name" => "Logitech G102 Prodigy",
        "description" => "Tracking
        Resolusi: 200 8.000 dpi
        Maks. akselerasi: >25G*
        Maks. kecepatan: >200 ips*",
        "price" => "Rp 215.000",
        "category" => "Mouse Gaming",
    ],
    [
        "picture" => "rexus daxa.jpg",
        "name" => "Rexus Keyboard Wireless Gaming Mechanical Daxa M71 PRO ",
        "description" => "Keunggulan teknologi keyboard mekanikal Daxa M71 Pro
            dibandingkan dengan tipe Classic adalah teknologi dual connection yang
            mengadopsi teknologi Bluetooth dan kabel sekaligus dalam satu perangkat.
            Keunggulan ini menjadi signature sekaligus memampukan keyboard ini 
            digunakan di manapun karena praktis.",
        "price" => "Rp 1.299.000",
        "category" => "Keyboard Gaming",
    ],
    [
        "picture" => "razer.jpg",
        "name" => "Razer DeathAdder(white)",
        "description" => "Sensor optik 6.400 DPI sejati
        Akselerasi hingga 220 inci per detik (IPS) / 30 G.
        Lima tombol Hyperesponse yang dapat diprogram secara independen
        Razer 'Mechanical Mouse Switches dengan siklus hidup 10 juta klik",
        "price" => "Rp 469.000",
        "category" => "Mouse Gaming",
    ],
    [
        "picture" => "mk240.png",
        "name" => "Logitech MK240 Nano Wireless Combo",
        "description" => "Keyboard ringkas  dan berkontur
        Mengetik menjadi lebih cepat dan lancar dengan layout tombol full-size yang 
        familier nan hemat ruang, dilengkapi dengan penyangga yang dapat disesuaikan untuk kenyamanan pengetikan.
        Mouse dengan ukuran sedang dirancang sesuai dengan bentuk tangan dan dilengkapi kontrol kursor yang lancar
        dengan tracking optik high-definition (1000 dpi).",
        "price" => "Rp 265.000",
        "category" => "Flexible keyboard",
    ],
    [
        "picture" => "rival 600.png",
        "name" => "Steelseries Rival 600 Gaming Mouse",
        "description" => "Sensor System : SteelSeries TrueMove3+ Dual Sensor System
        Primary Sensor : TrueMove 3 Optical Gaming Sensor
        Secondary Sensor : Depth Sensing Linear Optical Detection
        CPI : 100-12000, 100 CPI Increments
        IPS : 350+, on SteelSeries QcK surfaces
        Acceleration : 50G
        Hardware Acceleration : None (Zero Hardware Acceleration)
        Lift Off Distance : Customizable, 0.5mm - 2 mm",
        "price" => "Rp 1.250.000",
        "category" => "Mouse Gaming",
    ],
    [
        "picture" => "rexus mouse.jpg",
        "name" => "Rexus PRO Mouse Gaming Daxa Air II ",
        "description" => "Tipe Sensor : Pixart PMW3389
        Polling Rate : 125-500-1000Hz
        Tombol : Omron 20M (OF)
        Kabel : Paracord 1,8 meter
        Level DPI : 400-16000DPI
        Kecepatan : 400 inch per second (IPS)
        Akselerasi : 50G
        Dimensi : 120 x 63.5 x 39mm
        Berat : 58 - 82gram",
        "price" => "Rp 499.000",
        "category" => "Mouse Gaming",
    ],
    [
        "picture" => "lg gaming.jpg",
        "name" => "Logitech Pro X Gaming Keyboard",
        "description" => "Fitur
        -Pro-GRADE Switch yang dapat Ditukar
        -Ringkas + ULTRA-PORTABEL
        -LIGHTSYNC RGB
        -Kabel yang dapat Dilepaskan
        -3 SUDUT + Alas Karet
        -12 MAKRO Tombol F yang dapat Diprogram",
        "price" => "Rp 1.549.000",
        "category" => "Keyboard Gaming",
    ],
    [
        "picture" => "lg flexibel.jpg",
        "name" => "Logitech Pebble Wireless Bluetooth Mouse M350",
        "description" => "Model yang lebih flexible mudah dibawa dan pas dikantong dan dihubungkan
        dengan jaringan Bluetooth",
        "price" => "Rp 279.000",
        "category" => "Mouse Wirilles",
    ],
    [
        "picture" => "lg kantoran.jpg",
        "name" => "Logitech M170 Mouse Wireless",
        "description" => "Logitech M170 Wireless Mouse - Black
        2.4Ghz wireless yang andal
        Koneksi wireless yang kuat dan konsisten dengan jarak hingga 10 meter (32 kaki).
        Nyaris tanpa jeda atau terputus-putus, Anda dapat bekerja dan bermain dengan penuh percaya diri",
        "price" => "Rp 96.800",
        "category" => "Mouse daily work",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e_203040099</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="5">
            <th>No</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($mouse_keyboard as $mk) : ?>
                <td><?= $nomor; ?></td> 
                <td><img src="img/<?= $mk["picture"]; ?>"></td>
                <td><?= $mk["name"] ?></td>
                <td><?= $mk["description"] ?></td>
                <td><?= $mk["price"] ?></td>
                <td class = "categori"><?= $mk["category"] ?></td>
                <tr></tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>