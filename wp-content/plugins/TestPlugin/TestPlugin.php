<?php
// Plugin Name: TestPLugin
// Plugin URI: http://www.cdxperience.com/
// Description: Nuevo Plugin
// Version: 1.0.0
// Author: Santiago Sánchez
// Author URI: http://www.cdxperience.com/
// License: Free
// Text Domain: cdxperience

/**
 * Created by PhpStorm.
 * User: chadsfather
 * Date: 24/9/15
 * Time: 20:19
 */

class TestPlugin
{
    private $pull;

    public function __construct()
    {
        \Service\Service::test();
        $this->pulll = 10;
    }

    public function t()
    {
        return $this->pull;
    }
}

$t = new TestPlugin();