<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<H1>1.</H2>";
for($i=1; $i<=5; $i++){
    $j=1;
    while ($j <= $i){
        print("$i");
        $j++;
    }
    print("<br>");
}
?>





<h2>bilangan factorial</h2>
 <form method="post">
     <input type="number" name="faktorialial" required>
     <button type="submit" name="hitung">Hitung Angka</button>
</form>
<?php

if(isset($_POST['hitung'])){
    $x = $_POST['faktorialial'];
    echo 'Hasilnya adalah'.faktorialial($x);
}
function faktorialial($x){
    $angka = 1;
    $faktorial = 1;
    while($angka <= $x){
        $faktorial = $faktorial * $angka;
        $angka = $angka + 1;
    }
    return $faktorial;
}

?>





</body>
</html>