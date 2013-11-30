<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\OmnipayBundle\DependencyInjection;

use PHPSpec2\ObjectBehavior;

/**
 * Sylius cart extension.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusOmnipayExtension extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\OmnipayBundle\DependencyInjection\SyliusOmnipayExtension');
    }

    function it_is_a_container_extension()
    {
        $this->shouldHaveType('Symfony\Component\HttpKernel\DependencyInjection\Extension');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
