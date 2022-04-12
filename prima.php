<?php 
	if(isset($_POST['cekbil'])){
		$bil = $_POST['bil'];

		$status = "Bilangan Prima";
		for ($i = 2; $i <= $bil-1; $i++)
		{
		if ($bil % $i == 0)
		{
		$status = "Bilangan Bukan Prima";
		break;
		}
		}
		echo "Bilangan ".$bil." merupakan ".$status;
		}
 ?>