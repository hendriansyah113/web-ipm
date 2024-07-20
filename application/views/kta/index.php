<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Tanda Anggota</title>
    <style>
        .card {
            width: 500px;
            border: 2px solid #000;
            padding: 20px;
            margin: 20px auto;
            background-color: #B03A2E;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            text-align: left;
            color: white;
        }
        .header-box {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-align: left;
        }
        .header-box img.logo {
            width: 55px;
            height: 55px;
            margin-right: 10px;
            margin-bottom: -10px;
        }
        .header-content-box {
            text-align: center;
            display: flex;
            flex-direction: column;
        }
        .header-content-box h4, .header-content-box h2 {
            margin: 5px 0;
        }
        .line {
            width: 100%;
            margin: 5px 0;
            border-top: 1px solid #000;
        }
        .data-section {
            width: 100%;
            padding: 0 20px;
            
        }
        .data-section table {
            width: 100%;
            color: black;
        }
        .data-section table td {
            padding: 5px 0;
        }
        .name-img-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-top: 10px;
        }
        .name-img-container img {
            width: 80px;
            height: auto;
            border: 1px solid #000;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
        .print-btn-container {
            text-align: right;
            margin-right: 50px;
        }
        .print-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .print-btn:hover {
            background-color: #218838;
        }
        .card p {
            margin: 0; /* Atur margin atas dan bawah menjadi nol */
            font-size: 0.8rem;
            text-align: left;
            color: white;
        }
    </style>
</head>
<body>
    <div class="card" id="card">
        <div class="header-box">
            <img src="<?= base_url('uis/img/core-img/logo-ipm.png') ?>" alt="Logo IPM" class="logo" width="50">
            <div class="header-content-box">
                <h4>KARTU TANDA ANGGOTA</h4>
                <h6>IKATAN PELAJAR MUHAMMADIYAH</h6>
                <p>Jl. RTA Milono Kota Palangka Raya Telp. +6282281022494</p>
            </div>
        </div>
        <div class="line"></div>
        <div class="data-section">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <?= $anggota['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat/Tgl Lahir</td>
                    <td>: <?= $anggota['tempat_lahir'] ?> <?= $anggota['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?= $anggota['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?= $anggota['alamat'] ?></td>
                </tr>
            </table>
        </div>
        <div class="name-img-container">
            <img src="<?= base_url('assets/img/'.$anggota['foto']) ?>" alt="Foto" width="100">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        function printCard() {
            const element = document.getElementById('card');
            html2pdf().from(element).save();
        }
    </script>
</body>
</html>
