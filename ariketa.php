<html>
<head>
</head>
<body>
<table border=1>
<tr>

<?php 

for($i=1;$i<=$_POST['num'];$i++){
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
