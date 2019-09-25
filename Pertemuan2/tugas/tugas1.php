<!DOCTYPE html>
<html>
<head>
	<title> Tugas 1</title>
</head>
<body>
    <p>Pengulangan untuk mencari kategori bilangan :</p>
    <ul>
<?php
        $angka = 20;
        
        for($i=1;$i<=$angka;$i++){
            $k=0;
            for($j=1;$j<=$i;$j++){
                if($i % $j == 0){
                    $k++;
        }
        }
        if($k == 2 && $i % 2 == 0){
        echo "<li>Angka $i bilangan genap sekaligus bilangan prima</li>";
        
        }else if ($k == 2 && $i % 2 != 0) {
        echo "<li>Angka $i bilangan ganjil sekaligus bilangan prima</li>";
        
        }else if ($k != 2 && $i % 2 != 0)  {
            echo "<li>Angka $i bilangan ganjil</li>";
        }else if ($k != 2 && $i % 2 == 0) {
        	echo "<li>Angka $i bilangan genap</li>";
        
        }
        
    }
 
?>
</ul>
</body>
</html>