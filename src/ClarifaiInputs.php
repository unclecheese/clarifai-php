<?php

namespace Clarifai;

use Clarifai\Input;

/**
 * Multiple Clarifai Inputs
 *
 * @package Clarifai
 */
class ClarifaiInputs {
  /**
   * A collection of inputs
   *
   * @var array $inputs
   */
  protected $inputs;

  /**
   * The config
   *
   * @var object $config
   */
  protected $config;

  /**
   * The raw data
   *
   * @var array $rawData
   */
  protected $rawData;

  /**
   * Constructor
   *
   * @param array $config The config for the inputs
   * @param array $data   The inputs
   */
  public function __construct(Array $config, Array $data) {
    $this->config = $config;
    $this->rawData = $data;

    foreach ($data as $input) {
      $this->inputs[] = new Concept($config, $input);
    }
  }

  // list
  // get
  // create
  // search
  // delete
  // update
  //
  // mergeConcepts
  // deleteConcepts
  // overwriteConcepts
  //
  // getStatus
}


