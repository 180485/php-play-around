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
		if(!empty($_POST["playerChoice"]) && ($_POST["playerChoice"] == "reset")){
			$this->reset();
		}

		//getting the score
		if(!empty($_SESSION["playerScore"])){
			$this->playerScore = $_SESSION["playerScore"];
		}
		if(!empty($_SESSION["computerScore"])){
			$this->computerScore = $_SESSION["computerScore"];
	
		
		}
		

		if(!empty($_POST["playerChoice"])){
			if(($_POST["playerChoice"]) == ($this->computerChoice)){
			$this->playerDraw();
			
			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="paper")){
			$this->playerWin();
			$this->playerScore++;
		
			
			
			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="rock")){
			$this->playerLose();
			$this->computerScore++;


			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="scissors")){
			$this->playerWin();
			$this->playerScore++;
		
		
				
			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="paper")){
			$this->playerLose();
			$this->computerScore++;
		


			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="rock")){
			$this->playerWIN();
			$this->playerScore++;
			
		
				
			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="scissors")){
			$this->playerLose();
			$this->computerScore++;
		

			}
			$_SESSION['playerScore']=$this->playerScore;
			$_SESSION['computerScore']=$this->computerScore;
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
		}else if($this->choice == 3){
			$this->computerChoice="rock";
			echo "<center>"."<h3>"."COMPUTER " ."</h3>"."</center>";
			echo "<center><img src=\"image/batu1.png\" alt=\"image of rock1\">"."</center>";
		}
	
	}	

	
	public function playerWin () 
	{
		$this->result='<div class="alert alert-success &#x1F60A;" role="alert" <i class="far fa-smile"></i> YOU WIN !</div>';
		
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
		$this->playerScore = 0;
		$this->computerScore = 0;

		$_SESSION["playerScore"]=0;
		$_SESSION["computerScore"]=0;


		}	

        
}
	


		

        