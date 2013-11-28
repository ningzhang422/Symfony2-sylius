<?php

namespace Acme\Bundle\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeWebBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusWebBundle';
    }
}
