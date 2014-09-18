<html>
<head>
</head>
<body>
<table border=1>
<tr>

<?php 
if (is_numeric($_POST['num'])&& $_POST['num']>0 && strpos($_POST["num"], '.') == FALSE && strpos($_POST["num"], ',') == FALSE) {
	$num=$_POST['num'];
} else {
	$num=1;
}

for($i=1;$i<=$num;$i++){
?>
	
		<td>
			<?php if ($i%2==0) {
			echo "<font color= 'red'>";
		} else {
			echo "<font color= 'blue'>";
		}
		?>

		<?php echo $i; 
		if($i%10==0){
		?>
		</font>
		</td>
	</tr>
	<tr>

		<?php
			}
		else{
			?>
		</td>
		
		<?php
		}
}?>
</tr>

</table>

</body>
</html>
