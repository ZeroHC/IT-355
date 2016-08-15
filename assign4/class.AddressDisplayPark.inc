<?php

  /**
   * Hanchen (Zero) Liu
   * IT 355
   * Assignment 4 OOP 3
   * 07/17/2016
   */

/**
 * Strategy to display a park address.
 */
class AddressDisplayPark implements AddressDisplay {
  /**
   * Display an addess with a green background.
   */
  public static function display($address) {
    $output = '<div style="background-color:PaleGreen;">';
    if (AddressDisplayNoCountry::isAvailable($address)) {
      $output .= AddressDisplayNoCountry::display($address);
    }
    else {
      $output .= AddressDisplayFull::display($address);
    }
    $output .= '</div>';
    return $output;
  }

  /**
   * Is this method of display available?
   * @return boolean
   */
  public static function isAvailable($address) {
    return $address instanceof AddressPark;
  }
}