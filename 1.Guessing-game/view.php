<!doctype html>
<html lang="en">
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
	
	<title>Casino royale - guessing game</title>
</head>
<body>
<img src="girl.png" alt="">
<div class="container">
	<h1>Number Guessing Game </h1>
	<h2><?php if(!empty($game->result)){ echo $game->result;} ?></h2>
	<form  method="post">
		<label for="number">Guess here </label>
		<input type="hidden" name="tries" value="<?= $tries ?>">
		<input type="number" min="0" max="10" name="guess">
    	<input type="submit" name="submit" value="Submit">
		<input type="submit" name="reset" value="Reset">
	</form>	
	<h4>Your Number : <?php if(isset($_POST["guess"])){echo $_POST["guess"];}?></h4>
	<p><?php var_dump ($game);?></p>
</div>		
</body>
</html>