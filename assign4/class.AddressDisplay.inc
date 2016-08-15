<?php

  /**
   * Hanchen (Zero) Liu
   * IT 355
   * Assignment 4 OOP 3
   * 07/17/2016
   */

/**
 * Specify the methods a strategy must employ for displaying an address.
 */
interface AddressDisplay {
  /**
   * AddressDisplay an Address.
   * @return string
   */
  public static function display($address);

  /**
   * Is this method of display available?
   * @return boolean
   */
  public static function isAvailable($address);
}