<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include("Utils.php");

class UtilsTest extends TestCase
{

  public function testAddition1Plus3Equals4(): void
  {
    $result = Utils::addition(1, 3);
    self::assertEquals(4, $result);
  }

  public function testAddition5Plus7Equals12(): void
  {
    $result = Utils::addition(5, 7);
    self::assertEquals(12, $result);
  }
}

