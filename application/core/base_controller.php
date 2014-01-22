<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base Controller
 *
 * Common tasks of all controllers are done here. Only inherit, no direct use please.
 *
 * @category Controller
 * @author   Emran Hasan <emran@rightbrainsolution.com>
 */
class Base_Controller extends CI_Controller
{
    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->prepareEnvironment();
    }

    protected function prepareEnvironment()
    {
        $this->load->library('Layout');
    }
}