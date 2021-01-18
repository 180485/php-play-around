<?php

class RockPaperScissors
{
    

	public $playerChoice;
	public $computerChoice;
	public $choice;
	public $result;
	
	public function __construct(){
		if(empty($this->computerChoice)){
			$this->choiceRandom();
		}


	}
	
    public function run()
    {
        // This function functions as your game "engine"
		// Now it's on to you to take the steering wheel and determine how it will work
		//TODO: generate computer choice
		//TODO: need to compare 

		if(!empty($_POST["playerChoice"])){
			if(($_POST["playerChoice"]) == ($this->computerChoice)){
			$this->playerDraw();

			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="paper")){
				$this->playerWin();
			
			}elseif(($_POST["playerChoice"]=="scissors") && ($this->computerChoice =="rock")){
				$this->playerLose();

			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="scissors")){
				$this->playerWin();
				
			}elseif(($_POST["playerChoice"]=="rock") && ($this->computerChoice =="paper")){
				$this->playerLose();

			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="rock")){
				$this->playerWIN();
				
			}elseif(($_POST["playerChoice"]=="paper") && ($this->computerChoice =="scissors")){
				$this->playerLose();

			}
		}

	}
	
	public function choiceRandom()
	{
		$this->choice=rand(1,3);
		if($this->choice == 1){
			$this->computerChoice="paper";
		}else if($this->choice == 2){
			$this->computerChoice="scissors";
		}else if($this->choice == 3){
			$this->computerChoice="rock";

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

}