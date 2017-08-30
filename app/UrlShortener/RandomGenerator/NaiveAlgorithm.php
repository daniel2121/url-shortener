<?php

namespace App\UrlShortener\RandomGenerator;

class NaiveAlgorithm implements RandomStringGenerationInterface {
  public function getString($length) {
    $random_string_length = $length;

    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $string = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $random_string_length; $i++) {
      $string .= $characters[mt_rand(0, $max)];
    }

    return $string;
  }
}
