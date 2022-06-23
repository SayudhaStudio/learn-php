<?php
	$bank_balance = null;
	$money = 0;
	$savings = 0;
	if ($bank_balance < 100) {
		$money = 1000;
		$bank_balance += $money;
	} else {
		$savings += 50;
		$bank_balance -= 50;
	}