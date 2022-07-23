<html>
<head>
    <title>Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran Dengan PHP</h1>
   
    <form action="luas_lingkaran.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phi    =3.14;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phi * $jari * $jari;
            $keliling = 2 * $phi * $jari;
            
            echo "Hasil hitung luas lingkaran adalah :<br />";
            echo "Dik,<br />";
            echo "Jari-jari = $jari<br />";
            echo "Phi = $phi<br />";
            echo "luas lingkaran sama dengan [ $phi x $jari x $jari ] = $luas_lingkaran<br />";
            echo " keliling lingkaran = $keliling "."<br>";
        }
    ?>
</body>
</html>