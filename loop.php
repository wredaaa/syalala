<?php
for ($i= 1; $i <= 100; $i++)
{
	if($i%5 == 0 && $i%3 == 0){
		echo "FiverBuzzer";
	}
	else if($i%6 == 0){
		echo "Buzzer";
	}
	else if($i%5 == 0){
		echo "Fiver";
	}
   echo $i;
   echo "<br />";
}
?>

<html>
	<body>
		<form action="loop.php" method="post">
			<label>Account Name</label>
			<input type="text" name="name" placeholder="@example"></input>
			
			<label>Tweet Message</label>
			<input type="text" name="isi" placeholder="@example"></input>
			<input type="submit"></button>
		</form>
		<?php if($_POST){
			echo "Hello Word, ".$_POST["isi"];
			echo " cc: ".$_POST["name"];
		}
		?>
	</body>
</html>
