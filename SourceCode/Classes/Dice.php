<?php
	enum Face: int
	{
		case One = 1;
		case Two = 2;
		case Three = 3;
		case Four = 4;
		case Five = 5;
		case Six = 6;
	}

	class Dice
	{
		private Face $value;

		public function __construct()
		{
			$this->$value = random_int(1, 6);
		}

		public function roll()
		{
			$this->$value = random_int(1, 6);
		}

		public function getValue()
		{
			return $this->$value;
		}
	}
?>