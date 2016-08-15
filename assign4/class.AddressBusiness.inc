<?php

  /**
   * Hanchen (Zero) Liu
   * IT 355
   * Assignment 4 OOP 3
   * 07/17/2016
   */

/**
 * Business Address. 
 */
class AddressBusiness extends Address {
  /**
   * Initialization. 
   */
  protected function _init() {
    $this->_setAddressTypeId(Address::ADDRESS_TYPE_BUSINESS);
  }
}