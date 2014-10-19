<?php

namespace Cwp\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CwpAdminBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
