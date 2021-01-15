<?php


class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $result;
   

    // set a default amount of max guesses
    public function __construct(int $maxGuesses = 3)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;
        
        if(!empty($_SESSION["secretNumber"])){
            $this->secretNumber = $_SESSION["secretNumber"];
        }    
    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: add secret numbers (according to attempts)
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        if (empty($this->secretNumber)){
            $this->generateSecretNumber(); 
        }

        if (!empty($_POST["guess"]) ){

            

            if($_POST["guess"] == $this->secretNumber){
                $this->playerWins();
            } else if ($_POST["guess"] < $this->secretNumber) {
                $this->higher();
            } else if ($_POST["guess"] > $this->secretNumber) {
                $this->lower();
            } 

        }
        
    }
    

    public function generateSecretNumber()
    {
        $this->secretNumber = rand(1,10);
      
    }
    public function higher()
    {
        $this->result = '<div class="alert alert-warning" role="alert">Too Low try again !</div>';
    }
    public function lower()
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
        //TODO: generate a new secret number to session
        $this->reset= $reset;
     
    }
   

}