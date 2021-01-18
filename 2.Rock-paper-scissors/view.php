<!doctype html>
<html lang="en">
<head>
<head>
	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
    rel="stylesheet"/>
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
	<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">    
	<title>Casino royale - rock, paper, scissors</title>

</head>
<body>

<div class="score-board">
	<?php if(!empty($game->computerScore)){ echo "Comp :"." ".$game->computerScore."<br>";} ?>
	<?php if(!empty($game->playerScore)){ echo "user :"." ".$game->playerScore;} ?>
</div>
<div class="choices">
	<h3><?php if(!empty($game->result)){ echo $game->result;} ?></h3>
	<h3>Player </h3>
	<form  method="post" >
  		<button name="playerChoice" value="scissors"> <img src="image/jari.png" alt="scissors" ></button>
  		<button name="playerChoice" value="rock"> <img src="image/batu1.png" alt="rock"></button>
  		<button name="playerChoice" value="paper"> <img src="image/kertas.png" alt="paper"></button> 
	</form> 
</div>	
<input type="submit" name="reset" value="Reset">	
</body>
</html>