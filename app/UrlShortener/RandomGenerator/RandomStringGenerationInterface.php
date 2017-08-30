<?php

namespace App\UrlShortener\RandomGenerator;

interface RandomStringGenerationInterface {
  /**
   * Get a random alphanumeric string
   * @param  int $length
   * @return string
   */
  public function getString($length);
}
