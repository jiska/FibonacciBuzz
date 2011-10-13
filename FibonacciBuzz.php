<?php
class FibonacciBuzz
{
  public static function FizzBuzz($count)
  {
    $fibonacci = self::fibonacci($count);

    $fizzbuzz = array();
    foreach ($fibonacci as $number) {
      $fizzbuzz[] = self::examination($number);
    }

    return $fizzbuzz;
  }

  public function fibonacci($count)
  {
    $count = intval($count);
    $fibonacci = array();
    if (1 <= $count) {
      $fibonacci[] = 1;
    }

    if (2 <= $count) {
      $fibonacci[] = 1;
    }

    for ($i = 2; $i < $count; $i ++) {
      $fibonacci[] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
    }

    return $fibonacci;
  }

  public static function examination($number)
  {
    $result = '';
    if (0 === $number % 3) {
      $result = 'Fizz';
    }

    if (0 === $number % 5) {
      $result = 'Buzz';
    }

    if (true === empty($result)) {
      $result = $number;
    }

    return $result;
  }
}

