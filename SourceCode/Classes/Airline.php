<?php
	class Airline
	{
		private $airlineName;
		public constant $value;

		public function __construct(string $name)
		{
			$this->airlineName = $name;
			$this->value = 200;
		}

		public function mortgageValue()
		{
			return $value/2;
		}
	}
?>