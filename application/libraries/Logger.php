<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 *
 * Logger library for Code Igniter.
 *
 * @package        Logger
 * @author         Parth Sutariya (https://github.com/pathusutariya)
 * @version        1.0.0
 * @license        GPL v3
 */
class Logger
{

  private $tableName    = 'es_logger';

  public function __construct()
  {
    $this->ci = &get_instance();
  }


  public function logDB($topic, $message)
  {
    $data        = array(
      "topic" => $topic,
      "message"      => $message
    );
    $this->ci->db->insert($this->tableName, $data);
    $this->logid = $this->ci->db->insert_id();
  }
}
