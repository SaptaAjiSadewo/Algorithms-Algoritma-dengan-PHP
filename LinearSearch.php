<?php
$angka = [10, 20, 30, 50, 60];

$n = 10;

for ($i = 0; $i < count($angka) ; $i++ ) {
	if ($angka[$i] === $n ){
		echo "Ketemu $angka[$i]";
		return true;
	}
}
echo "Tidak ketemu";
return false;
?>
