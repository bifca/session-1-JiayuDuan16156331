<!DOCTYPE html>
<html>
<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$query = array(
			"api-key" => '',
			"query" => 'limber'
		);

		curl_setopt($curl, CURLOPT_URL, "https://pokeapi.co"."?".http_build_query($query));

		$poke_search = json_decode(curl_exec($curl));

		$count = 0;
		echo '<div class="container">
				<div class="row">';
					foreach ($poke_search->results as $poke){
						if ($count == 2){
							echo "</div><div class='row'>";
							$count = 0;
						}
						echo "<div class='col-12 col-md-6'>
						<h3>".$poke->name."</h3>";
						if (empty($poke->pokemon->url) == false){
							echo "<img src='".$poke->pokemon->url."'";

						}
						echo "<br><h4>".$poke->name."</h4><br>
						<p>".$poke->order."</p></br>
						<a href='".$poke->version_group->url."'>Review</a>




						</div>";
						$count = $count+1;




					}
					echo "</div>";





	?>
</body>
</html>
