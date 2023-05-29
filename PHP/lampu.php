<html>
<title>Kontrol Lampu</title>
<link rel="stylesheet" type="text/css" href="shu.css">
<?php
$system = php_uname() ;
echo "<center><h1> Kontrol Lampu </h1>Server Info : $system</center>";
function save($nmr) {
$cetak = fopen("result.txt", "w");
fwrite($cetak, $nmr);
fclose($cetak);
}
echo "<center><h2> Status:<br>";
// lampu1
if($_GET["lampu1"] == "1") {
echo "Lampu 1 Nyala<br>";
save("1");
} elseif($_GET["lampu1"] == "0") {
echo "Lampu 1 Mati<br>";
save("0");
}
// lampu2
if($_GET["lampu2"] == "1") {
echo "Lampu 2 Nyala<br>";
save("2");
} elseif($_GET["lampu2"] == "0") {
echo "Lampu 2 Mati<br>";
save("4");
}
// lampu 3
if($_GET["lampu3"] == "1") {
echo "Lampu 3 Nyala<br>";
save("3");
} elseif($_GET["lampu3"] == "0") {
echo "Lampu 3 Mati<br>";
save("5");
}
echo "</h2>";
echo '<br><center><a class="tombol" href="?lampu1=1">LED 1 ON</a><a class="tombol2" href="?lampu1=0">LED 1 OFF</a><a class="tombol" href="?lampu2=1">LED 2 ON</a><a class="tombol2" href="?lampu2=0">LED 2 OFF</a><a class="tombol" href="?lampu3=1">LED 3 ON</a><a class="tombol2" href="?lampu3=0">LED 3 OFF</a><br><br>
<h3><font color="red" face="Courier new">root@server:~# cat <a href="result.txt" target=_blank>result.txt</font></h3>';
// indoxploit.or.id - we are indonesian coders
?>