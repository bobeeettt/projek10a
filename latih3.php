<!DOCTYPE HTML>
<html>
    <head>
        <title>Belajar Operator</title>
    </head>
    <body>
        <?php
            $a=7;
            $b=2;
            echo "\$a=$a<br>";
            echo "\$b=$b<br>";
            $c=$a+$b;
            echo "Hasil dari $a + $b = $c<br>";
            $c=$a/$b;
            echo "Hasil dari $a / $b = $c<br>";
            echo '<br>';
        echo 'Dibuat oleh Robert Ang | A12.2024.07160';
    ?>
        ?>
    </body>
</html>

<!-- 
Kemungkinan error pada program ini adalah:
1. Variabel $angka2 bernilai 0 yang menyebabkan division by zero error
2. Tipe data tidak sesuai (bukan numerik)
3. Variabel tidak didefinisikan sebelumnya
Dalam kode di atas, program seharusnya berjalan normal karena pembagian 10/5 = 2
-->