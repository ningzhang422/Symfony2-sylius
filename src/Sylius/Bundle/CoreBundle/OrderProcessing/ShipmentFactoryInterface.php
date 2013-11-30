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
 * Order shipment factory.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface ShipmentFactoryInterface
{
    /**
     * Create shipment for order.
     *
     * @param OrderInterface $order
     */
    public function createShipment(OrderInterface $order);
<<<<<<< HEAD

    /**
     * Update shipment state after order is confirmed.
     *
     * @param OrderInterface $order
     */
    public function updateShipmentStates(OrderInterface $order);
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
}
