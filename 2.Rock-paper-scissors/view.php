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
	<link rel="stylesheet" href="styling.css">    
	<title>Casino royale - rock, paper, scissors</title>

</head>
<body>
    
<h1><?php if(!empty($game->result)){ echo $game->result;} ?></h1>
<h3>Player Choice : </h3>
<form  method="post" >
  <button name="playerChoice" value="scissors"> <img src="scissors1.png" alt="scissors"></button>
  <button name="playerChoice" value="rock"> <img src="rock1.png" alt="rock"></button>
  <button name="playerChoice" value="paper"> <img src="paper.png" alt="paper"></button> 
  <input type="submit" name="reset" value="Reset">
</form> 
<h2><?php if(!empty($game->playerScore)){ echo "Player Score :"." ".$game->playerScore;} ?></h2>
	

</body>
</html>