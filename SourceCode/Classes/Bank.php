<?php
	class Bank
	{
		protected Bill $bills[200];
		private Country $countries[24];

		public function __construct()
		{
			for($i = 0;i<30;i++)
			{
				$bills[i] = new Bill(5);
			}
			for($i = 30;i<60;i++)
			{
				$bills[i] = new Bill(10);
			}
			for($i = 60;i<90;i++)
			{
				$bills[i] = new Bill(20);
			}
			for($i = 90;i<130;i++)
			{
				$bills[i] = new Bill(50);
			}
			for($i = 130;i<170;i++)
			{
				$bills[i] = new Bill(100);
			}
			for($i = 170;i<200;i++)
			{
				$bills[i] = new Bill(500);
			}
		}
	}
?>