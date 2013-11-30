<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\OrderProcessing;

use Sylius\Bundle\CoreBundle\Model\OrderInterface;

/**
 * Order taxation processor.
<<<<<<< HEAD
 * Service implementing this service should apply taxes to given order.
=======
 * Service implementing this servie should apply taxes to given order.
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface TaxationProcessorInterface
{
    /**
     * Apply taxes to given order.
     *
     * @param OrderInterface $order
     */
    public function applyTaxes(OrderInterface $order);
}
