<?php

  /**
   * Hanchen (Zero) Liu
   * IT 355
   * Assignment 4 OOP 3
   * 07/17/2016
   */

/**
 * Park Address. 
 */
class AddressPark extends Address {
  public function display() {
    $output = '<div style="background-color:PaleGreen;">';
    $output .= parent::display();
    $output .= '</div>';
    return $output;
  }
  
  
  /**
   * Initialization. 
   */
  protected function _init() {
    $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
  }
}