<!doctype html>
<html lang="en">
<head>
<head>
	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
    rel="stylesheet"/>
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet"> 
	<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">    
	<title>Casino royale - rock, paper, scissors</title>

</head>
<body>

<div class="score-board">
	<?php if(!empty($_SESSION["computerScore"])){ echo "Comp:"." ".$_SESSION["computerScore"]."<br>";} ?>
	<?php if(!empty($_SESSION["playerScore"])){ echo "player:"." ".$_SESSION["playerScore"];} ?>
</div>
<div class="choices">
	<h3><?php if(!empty($game->result)){ echo $game->result;} ?></h3>
	<h3 >Player &#128100; </h3>
	<form  method="post" >
  		<button name="playerChoice" value="scissors"> <img src="image/jari.png" alt="scissors" ></button>
  		<button name="playerChoice" value="rock"> <img src="image/batu1.png" alt="rock"></button>
  		<button name="playerChoice" value="paper"> <img src="image/kertas.png" alt="paper"></button> 
		<button name="playerChoice" value="reset"> <img src="image/reset.png" alt="paper"></button> 
	</form> 
	<h1>Make Your Move</h1>
</div>
</body>
</html>