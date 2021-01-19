<?php


class Game
{
	public $deck = array();
	public $dealer = array();
	public $player = array();
	public $cards = array("1","2","3","4","5","6","7","8","9","10","11");
	
	
	public function Game()
	{
		// Create the deck
		$this->createDeck();
		for ($t = 0; $t <= 3; $t++)
		{
			shuffle($this->deck);
		}
	}
	
}