<?php
require_once "classCity.php";
class Player
{

	private $namePlayer;
	private $collorPlayer;
	private $moneyPlayer;
	private $PIB;
	private $amountHypothec;
	private $patrimony;
	private $currentPosition;
	private $turnPlay;

	public function __construct($namePlayer, $collorPlayer)
	{
		$this->namePlayer = $namePlayer;
		$this->collorPlayer = $collorPlayer;
		$this->__set('moneyPlayer', 805);
		$this->__set('PIB', 0);
		$this->__set('amountHypothec',0);
		$this->__set('patrimony', null);
		$this->__set('currentPosition',0);
		$this->__set('turnPlay',false);

	}
	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}
	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function rolar()
	{
		$dado = rand(1, 6);
		echo $dado;
	}
	public function pagar($value)
	{
		$this->valor = $value;
		$this->__set('moneyPlayer',$this->__get('moneyPlayer') - $this->value);
	}
	public function receber($value)
	{
		$this->valor = $value;
		$this->__set('moneyPlayer', $this->__get('moneyPlayer') + $this->value);

	}
	public function detalhar()
	{
	}
	public function hipotecar()
	{
	}
	public function comprarCasa()
	{
	}
}
