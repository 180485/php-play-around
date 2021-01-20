<!doctype html>
<html lang="en">

	<meta charset="UTF-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
    rel="stylesheet"/>
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">    
	<title>BlackJack</title>
<head>
<body>
<p> Total value: <?php if(!empty($game->totalValue)){echo $game->totalValue;} ?> </p>
<p> Your card: <?php if(!empty($game->player)){
        foreach ($game->player as $card) {
            echo $card. " ";
        }}?></p>
<?php if(!empty($game->result)){ ?><p> Your result: <?php echo $game->result;} ?> </p>
<form method="post">
    <input type="submit" name="Start" class="button" value="Start"/>
    <input type="submit" name="Hit" class="button" value="Hit"/>
    <input type="submit" name="Stand" class="button" value="Stand"/>
</form>

</body>
</html>