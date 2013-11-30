<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\InstallerBundle\Requirement;

use PHPSpec2\ObjectBehavior;

class Requirement extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('PHP version', true, '5.4', '5.5', true, 'Please upgrade.');
    }

    function it_gets_label()
    {
        $this->getLabel()->shouldReturn('PHP version');
    }

<<<<<<< HEAD
    function it_gets_fulfilled()
=======
    function it_get_fulsfilled()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $this->isFulfilled()->shouldReturn(true);
    }

<<<<<<< HEAD
    function it_gets_expected()
=======
    function it_get_exspected()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $this->getExpected()->shouldReturn('5.4');
    }

<<<<<<< HEAD
    function it_gets_actual()
=======
    function it_get_sactual()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $this->getActual()->shouldReturn('5.5');
    }

<<<<<<< HEAD
    function it_gets_required()
=======
    function it_get_resquired()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $this->isRequired()->shouldReturn(true);
    }

<<<<<<< HEAD
    function it_gets_help()
=======
    function it_gest_help()
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $this->getHelp()->shouldReturn('Please upgrade.');
    }
}
