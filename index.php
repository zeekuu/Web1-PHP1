<?php
$nama = "Tengku Muhamad Azi Juniar";
$nim = 251110204;
$kelas = 'D2025';
$skill = ["HTML", "CSS", "JS", "PHP"];
$tKeahlian = 7.5;
$ipk = 4.00;
$kerja = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="foto.jpg">
    <title>Profile</title>
</head>
<body>
    <div class="main-container">
        <img src="foto-removebg-preview.png" alt="profil">
        <div class="biodata">
            <div class="nama">
                <h1>
                    <?php echo "$nama"?>
                </h1>
            </div>
            <div class="nim">
                <h2><?php echo "$nim";?></h2>
            </div>
            <div class="kelas">
                <h2><?php echo "$kelas";?></h2>
            </div>
            <div class="ipk">
                <?php
                if($ipk >= 3.99) {
                    echo "<h2>IPK: $ipk <span class='status'>Cumlaude</span></h2>";
                }
                    else if($ipk >= 2.00) {
                        echo "<h2>IPK: $ipk <span class='status1'>Cukup Baik</span></h2>";
                    }
                    else {
                        echo "<h2>IPK: $ipk <span class='status2'>Buruk</span></h2>";
                    }
                ?>
            </div>
            <div class="skill">
                <?php 
                foreach ($skill as $keahlian) {
                    echo "<span class='skillList'>" . $keahlian . "</span>";
                    }
                ?>
            </div>
            <div class="tKeahlian">
                <?php 
                echo "Tingkat Keahlian: <strong> $tKeahlian/10 </strong>";
                ?>
            </div>
            <div class="kerja">
                <?php
                if($kerja) {
                    echo "Kerja/Tidak: Kerja";
                }
                else {
                    echo "Kerja/Tidak: <strong class='sColor'>Tidak Bekerja</strong>";
                };
                ?>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        width: 100%;
        height: 100%;
    }

    .main-container {
        background-color: #fbfbfb;
        border: 2px solid #1b1b1b;
        box-shadow: 15px 15px 10px #1b1b1b;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 70px;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 40px;
    }

    .main-container img {
        background-color: #8F0177;
        border-radius: 8px;
    }

    .ipk {
        margin: 10px 0;
    }

    .status {
        background-color: #043915;
        color: #fbfbfb;
        padding: 5px 10px;
        border-radius: 6px;
        margin-left: 8px;
    }
    .status1 {
        background-color: #F4991A;
        color: #fbfbfb;
        padding: 5px 10px;
        border-radius: 6px;
        margin-left: 8px;
    }
    .status2 {
        background-color: #BF1A1A;
        color: #fbfbfb;
        padding: 5px 10px;
        border-radius: 6px;
        margin-left: 8px;
    }

    .skill {
        margin: 25px 0;
    }
    .skillList {
        padding: 10px 20px;
        margin-right: 8px;
        border-radius: 6px;
        background: linear-gradient( to bottom right , blue, purple);
        box-shadow: 4px 4px #1b1b1b;
        color: #fbfbfb;
        font-weight: 600;
    }
    strong {
        color: green;
    }

    .sColor {
        color: #BF1A1A;
    }
</style>