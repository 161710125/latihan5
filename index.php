<!DOCTYPE html>
<html>
<head>
	<title>Gems</title>
</head>
<body>
<?php
require_once 'config.php';
$odg= new odong('Merah','4','Ultra Man','Polisi','Kamen Rider','Upin Ipin');
 	echo "Warna Odong Odong : ".$odg->get_wr();
 	echo "<br>Kursi  : ".$odg->get_krs();
 	echo "<br>Kursi 1 : ".$odg->get_1();
 	echo "<br>Kursi 2 : ".$odg->get_2();
 	echo "<br>Kursi 3 : ".$odg->get_3();
 	echo "<br>Kursi 4 : ".$odg->get_4();
?>
</body>
</html>