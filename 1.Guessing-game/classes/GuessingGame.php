<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $result;
   

    // set a default amount of max guesses
    public function __construct(int $maxGuesses = 3 , int $secretNumber= -1)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;
        
        
        if(!empty($_SESSION["secretNumber"])){
           
        }    
    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        if (empty($this->secretNumber)){
            $this->generateSecretNumber(); 
        }

        if (!empty($_POST["guess"]) ){


            if($_POST["guess"] == $this->secretNumber){
                $this->playerWins();
            } else if ($_POST["guess"] < $this->secretNumber) {
                $this->higherGuess();
            } else if ($_POST["guess"] > $this->secretNumber) {
                $this->lowerGuess();
            } 

        }
        
    }
    
    //function for maxguesses for 3 times
    public function maxGuesses() 
    {
        if(isset($_POST["tries"])){
            $this->maxGuesses = $_POST['tries'];
      

        }else if($_POST["tries"]  < 1 ){
            $this->result = 'To many guesses';
         
            
           }
    }
    

    public function generateSecretNumber()
    {
        $this->secretNumber = rand(1,10);
      
    }
    public function higherGuess()
    {
        $this->result = '<div class="alert alert-warning" role="alert">Too Low try again !</div>';
    }
    public function lowerGuess()
    {
        $this->result = '<div class="alert alert-danger" role="alert"> Too High try again ! </div>';
    }

    public function playerWins()
    {
        $this->result = '<div class="alert alert-success" role="alert"> "Correct! Good Job" </div>';
    }

    public function playerLoses()
    {
        $this->result = $result;
      
    }

    public function reset()  
    {   
  
        return isset($_POST['reset']);
        $this->secretNumber = $_SESSION["secretNumber"]=0;
        resession_destroy();
     
    }
    
}