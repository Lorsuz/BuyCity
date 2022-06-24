<?php
require_once "classPlayer.php";
class City
{
	protected $nameCity;
	protected $priceCity;
	protected $priceHypothec;
	protected $isHypothecate;
	protected $priceHouse;
	protected $priceHotel;
	protected $rent_0;
	protected $rent_1;
	protected $rent_2;
	protected $rent_3;
	protected $owner;

	public function __construct($nameCity, $priceCity, $hypothec, $priceHouse, $priceHotel, $rent_0, $rent_1, $rent_2, $rent_3)
	{
		$this->nameCity = $nameCity;
		$this->priceCity = $priceCity;
		$this->hypothec = $hypothec;
		$this->priceHouse = $priceHouse;
		$this->priceHotel = $priceHotel;
		$this->rent_0 = $rent_0;
		$this->rent_1 = $rent_1;
		$this->rent_2 = $rent_2;
		$this->rent_3 = $rent_3;
		$this->owner = "Bank";
	}

	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}
	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function status()
	{
		echo "<br>Cidade: " . $this->__get('nameCity');
	}
}
$city = [];
$city[1] = new City("LISBOA", 100, 80, 30, 60, 30, 60, 60, 30, 60);
$city[2] = new City("PEQUIN", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[3] = new City("VIENA", 50, 80, 30, 60, 30, 60, 60, 30, 60);
$city[4] = new City("WASHINGTON", 60, 80, 30, 60, 30, 60, 60, 30, 60);
$city[5] = new City("VARSOVIA", 35, 80, 30, 60, 30, 60, 60, 30, 60);
$city[6] = new City("BERLIM", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[7] = new City("NOVA DELHI", 65, 80, 30, 60, 30, 60, 60, 30, 60);
$city[8] = new City("PARIZ", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[9] = new City("MOSCOU", 200, 80, 30, 60, 30, 60, 60, 30, 60);
$city[10] = new City("ROMA", 100, 80, 30, 60, 30, 60, 60, 30, 60);
$city[11] = new City("MADRI", 30, 80, 30, 60, 30, 60, 60, 30, 60);
$city[12] = new City("CARACAS", 90, 80, 30, 60, 30, 60, 60, 30, 60);
$city[13] = new City("HANOI", 40, 80, 30, 60, 30, 60, 60, 30, 60);
$city[14] = new City("HAVANA", 150, 80, 30, 60, 30, 60, 60, 30, 60);
$city[15] = new City("BUENOS ARIES", 40, 80, 30, 60, 30, 60, 60, 30, 60);
$city[16] = new City("ATENAS", 200, 80, 30, 60, 30, 60, 60, 30, 60);
$city[17] = new City("AMISTERDAN", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[18] = new City("ESTOCOLMO", 120, 80, 30, 60, 30, 60, 60, 30, 60);
$city[19] = new City("LONDRES", 70, 80, 30, 60, 30, 60, 60, 30, 60);
$city[20] = new City("KUALA LUNPUR", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[21] = new City("OSLO", 65, 80, 30, 60, 30, 60, 60, 30, 60);
$city[22] = new City("BRASILIA", 150, 80, 30, 60, 30, 60, 60, 30, 60);
$city[23] = new City("TRIPOLI", 50, 80, 30, 60, 30, 60, 60, 30, 60);
$city[24] = new City("BANGOG", 70, 80, 30, 60, 30, 60, 60, 30, 60);
$city[25] = new City("DUBLIN", 80, 80, 30, 60, 30, 60, 60, 30, 60);
$city[26] = new City("SANTIAGO", 65, 80, 30, 60, 30, 60, 60, 30, 60);
$city[27] = new City("CAIRO", 120, 80, 30, 60, 30, 60, 60, 30, 60);
$city[28] = new City("OTTAWA", 200, 80, 30, 60, 30, 60, 60, 30, 60);

$city[2]->status();
