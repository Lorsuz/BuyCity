<?php
require_once "jogadores.php";
require_once "cidades.php";
class Game
{
	private $rounds;
	public function transacao($paying, $receiver, $value)
	{
		$this->paying = $paying;
		$this->paying = $receiver;
		$this->value = $value;

		$this->paying->pagar($this->value);
		$this->paying->receber($this->value);
	}
}
