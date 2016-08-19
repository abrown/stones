<?php

require_once('../solution.php');

class CanWinTest extends PHPUnit_Framework_TestCase {

  /**
   * @dataProvider provider
   */
  public function testCanWin($numStones, $canWin){
    $this->assertEquals($canWin, canWin($numStones));
  }

  public function provider() {
    return array(
      array(0, true),
      array(1, true),
      array(2, true),
      array(3, true),
      array(4, false), // I pick anything and they win
      array(5, true), // I pick 1, they pick anything, I win
      array(6, true),
      array(7, false),
      array(8, true) // I pick 1, they pick anything, I pick down to 4...
	);
  }
}