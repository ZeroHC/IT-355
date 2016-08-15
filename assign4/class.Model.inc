<?php

  /**
   * Hanchen (Zero) Liu
   * IT 355
   * Assignment 4 OOP 3
   * 07/17/2016
   */

/**
 * Shared interface for interactions. 
 */
interface Model {
  /**
   * Load a model.
   * @param int $address_id 
   */
  static function load($address_id);
  
  /**
   * Save a model. 
   */
  function save();
}