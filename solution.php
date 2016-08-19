<?php

function canWin($numStones) {
	if($numStones == 1) return true;
	$nextWinner = $numStones % 3;
	return $nextWinner != 1;
}