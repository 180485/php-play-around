<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
</head>
<body>

<h1>Number Guessing Game </h1>
<p><?php if(!empty($game->result)){ echo $game->result;} ?></p>
<form  method="post">
	<label for="number">Guess here </label>
	<input type="number" max="10" name="guess">
    <input type="submit" name="submit" value="Submit">
	<input type="reset" name="submit">
	
	</form>

	<p>Your Number : <?php if(isset($_POST["guess"])){echo $_POST["guess"];}?></p>
</body>
</html>