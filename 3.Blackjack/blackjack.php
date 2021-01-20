<?PHP

class Game
{
	//public $deck = array();
	public $dealer = array();
    public $player= array();
    public $totalValue;
    //public $cards = array("1","2","3","4","5","6","7","8","9","10");
    
    public function __construct(){


        if(empty($_SESSION["player"])){
            $this->startGame();

        }
    
         if(!empty($_SESSION["player"])){
            $this->player= $_SESSION["player"];
        }
    
        if(!empty($_SESSION["totalValue"])){
            $this->totalValue = $_SESSION["totalValue"];
        }
    }
    

	public function startGame(){
         array_push($this->player,rand(1,10),rand(1,10));
         $_SESSION["player"]= $this->player;
         
    }	
    
    public function getValue(){
    
        $this->totalValue = array_sum($this->player);
        $_SESSION["totalValue"]= $this->totalValue;

    }

    public function getCompare(){
       if($this->totalValue < 21){
           echo "YOU WIN";

       }else{
        echo "YOU LOSE";
      
        }

    }


}
		



