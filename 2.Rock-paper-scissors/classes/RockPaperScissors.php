<?php

class RockPaperScissors
{
    
	public $playerChoice;
	public $computerChoice;
	public $choice;
	public $result;
	public $playerScore = 0;
    public $computerScore = 0;
	
	public function __construct(){
		if(empty($this->computerChoice)){
			$this->choiceRandom();
			
		}

	}
	
	public function run()
	
    {
		//getting the score
		if(!empty($_SESSION["playerScore"])){
			$this->playerScore = $_SESSION["playerScore"];
		}
		if(!empty($_SESSION["computerScore"])){
			$this->computerScore = $_SESSION["computerScore"];
	
		
		}
		
	
        // This function functions as your game "engine"
		// Now it's on to you to take the steering wheel and determine how it will work
		//TODO: generate computer choice
		//TODO: need to compare 

		if(!empty($_POST["playerChoice"])){
			if(($_POST["playerChoice"]) == ($this->computerChoice)){
			$this->playerDraw();
			

			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="paper")){
			$this->playerWin();
			$_SESSION['playerScore']++;
		
			
			
			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="rock")){
			$this->playerLose();
			$_SESSION['computerScore']++;


			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="scissors")){
			$this->playerWin();
			$_SESSION['playerScore']++;
		
		
				
			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="paper")){
			$this->playerLose();
			$_SESSION['computerScore']++;
		


			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="rock")){
			$this->playerWIN();
			$_SESSION['playerScore']++;
			
		
				
			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="scissors")){
			$this->playerLose();
			$_SESSION['computerScore']++;
		

			}
		}

	}


	
	public function choiceRandom()
	{
		$this->choice=rand(1,3);
		if($this->choice == 1){
			$this->computerChoice="paper";
			echo "<center>"."<h3>"."COMPUTER " ."</h3>"."</center>";
			echo "<center><img src=\"image/kertas.png\" alt=\"image of paper\">"."</center>";
		}else if($this->choice == 2){
			$this->computerChoice="scissors";
			echo "<center>"."<h3>"."COMPUTER " ."</h3>"."</center>";
			echo "<center><img src=\"image/jari.png\" alt=\"image of scissors\">"."</center>";
		}else if($this->choice == 2){
		}else if($this->choice == 3){
			$this->computerChoice="rock";
			echo "<center>"."<h3>"."COMPUTER " ."</h3>"."</center>";
			echo "<center><img src=\"image/batu1.png\" alt=\"image of rock1\">"."</center>";
		}
	
	}	

	
	public function playerWin () 
	{
		$this->result='<div class="alert alert-success" role="alert"> YOU WIN !</div>';
		
	}

	public function playerLose () 
	
	{
		$this->result='<div class="alert alert-danger" role="alert"> YOU LOSE !</div>';
	
	}

	public function playerDraw () 
	{
		$this->result='<div class="alert alert-warning" role="alert"> DRAW !</div>';
	}
	public function reset()
    {

		if(isset($_POST['reset'])){
		$_SESSION['computerScore'] = 0;
		$_SESSION['playerScore'] = 0;
		session_destroy();

		}

		//TODO: still need to reset player score back to 0

        
	}
	
 

}