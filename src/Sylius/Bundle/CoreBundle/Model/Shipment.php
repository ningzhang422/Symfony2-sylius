<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Model;

use Sylius\Bundle\ShippingBundle\Model\Shipment as BaseShipment;

/**
 * Shipment attached to order.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Shipment extends BaseShipment implements ShipmentInterface
{
    /**
     * Order.
     *
     * @var OrderInterface
     */
    protected $order;

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(OrderInterface $order = null)
    {
        $this->order = $order;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
