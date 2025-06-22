<?php
	enum Worth: int
	{
		case Five = 5;
		case Ten = 10;
		case Twenty = 20;
		case Fifty = 50;
		case Hundred = 100;
		case FiveHundred = 500;
	}

	class Bill
	{
		protected Worth $value;
		
		public function __construct($value)
		{
			$this->$value = $value;
		}
	}
?>