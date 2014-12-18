<?php

namespace Cwp\UtilBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CwpUtilBundle extends Bundle {

    public function __construct() {
        $this->get_helpers();
    }

    public function get_helpers() {
        include_once __DIR__.'./Resources/php/helpers.php';
    }

}
