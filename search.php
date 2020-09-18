<!DOCTYPE html>
<html>
    <head>
       <style type="text/css">
    @font-face {
      font-family: LPMQ Isep Misbah;
      src: url(//arsasatria.my.id/LPMQIsepMisbah.ttf);
    }

    @font-face {
      font-family: Nunito Black;
      src: url(https://fonts.gstatic.com/s/nunito/v13/XRXW3I6Li01BKofAtsGUYevIWzgPDA.woff2);
    }

    @font-face {
      font-family: Nunito Regular;
      src: url(https://fonts.gstatic.com/s/nunito/v13/XRXV3I6Li01BKofINeaBTMnFcQ.woff2);
    }

    @font-face {
      font-family: Nunito Bold;
      src: url(https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap);
    }
    </style>
    <link rel="stylesheet" href="/css/roundbtn.css" name="button css">
    </head>
    <body style="font-family:Nunito Regular">
        <h4 style="text-align:center;font-family:Nunito Regular">
        <?php
        if (isset($_GET["Nama"]))
        $Nama = trim($_GET["Nama"]);
        
        else
        $Nama = "";
        
        ?>
        <form method="get">
            <label>Search Our Team:</label>
            <input type="text" name="Nama" value="<?php print ($Nama) ?>" onchange="" placeholder="Enter A Nickname!">
            <input type="submit" value="Search" >
        </form>
        <hr>
        <?php
        
        if (!empty($Nama)) {
            // Koneksi Database
            

$koneksi = new mysqli("localhost:3306", "ajat8154_ns23", "arsasatria.my.id", "ajat8154_konten");

        if (!$koneksi)
        die("Koneksi Gagal!");
        
        //Baca Data
        $sql = "SELECT Nama FROM siswa7m ".
        "WHERE Nama LIKE '%" .
        $Nama . "%' ORDER BY id, Nama";
        
        if ($hasil = $koneksi->query($sql))
        if ($hasil->num_rows > 0)
        while ($baris = $hasil->fetch_array())
        
        print($baris[0] . "<br>");
        else
        print("Data Tidak Ditemukan!");
        
        //Tutup Koneksi
        $koneksi->close();
        }
        
        ?>
        </h4>
        <p></p>
        <h3 style="text-align:center"><button class="my" onclick="mainpage();">Go Back To Main Page</button></h3>
        <hr>
        
        <!-- Advertisement -->
        
        <img src="//arsasatria.my.id" href="/ayam123">
        
        <script>
            function mainpage() {
                window.location.href = "https://madinah.my.id";
            }
        </script>
    </body>
</html>