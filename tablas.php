
<html>
<table border="1" align= "center"><tr>
<body>
<!-- ejercicio 1 tabla 4x4 con numeros 1 al 4 -->
<?php

for ($td=1;$td<=4;$td++){
	echo "<tr></tr>";
for ($num=1;$num<=4;$num++) {
	echo "<td>$num</td>";
	
}}
echo "</br>";
echo "</br>";
?>
</tr>
</body>
</table>
</html>


<html>
<table border="1" align= "center"><tr>
<body>
<!-- ejercicio 1 b tabla 4x4 con numeros 1 al 4 -->
<?php

for ($td=1;$td<=4;$td++){
	echo "<tr></tr>";
for ($num=1;$num<=4;$num++) {
	echo "<td>$td</td>";
	
	
}}
echo "</br>";
echo "</br>";
?>
</tr>
</body>
</table>
</html>



<html>
<body>
<table border="1" align= "center"><tr>
<!-- ejercicio 2 tabla 4x4 con numeros 1 al 16-->
<?php


for ($num=1;$num<=16;$num++) {
	echo "<td>$num</td>";
	if ($num%4==0) {
		echo "<tr></tr>"; }
}
echo "</br>";
echo "</br>";
?>
</tr>
</table>
</html>




<html>
<body>
<table border="1" align= "center"><tr>
<!-- ejercicio 3: tabla 4x4 con primera fila en negrita -->
<?php


for ($num=1;$num<=16;$num++) {
	if ($num%4==1) {
		echo "<td><b>$num</b></td>";
	}else{
		echo "<td>$num</td>";}
	if ($num%4==0) {
		echo "<tr></tr>"; }
}
echo "</br>";
echo "</br>";
?>
</tr>
</table>
</html>