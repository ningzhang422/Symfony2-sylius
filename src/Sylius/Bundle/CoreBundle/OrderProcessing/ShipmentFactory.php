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
use Sylius\Bundle\ResourceBundle\Model\RepositoryInterface;
<<<<<<< HEAD
use Sylius\Bundle\ShippingBundle\Model\ShipmentInterface;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

/**
 * Shipment factory.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class ShipmentFactory implements ShipmentFactoryInterface
{
    /**
    * Shipment repository.
     *
     * @var RepositoryInterface
     */
    protected $shipmentRepository;

    /**
     * Constructor.
     *
     * @param RepositoryInterface $shipmentRepository
     */
    public function __construct(RepositoryInterface $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function createShipment(OrderInterface $order)
    {
        $shipment = $order->getShipments()->first();

        if (!$shipment) {
            $shipment = $this->shipmentRepository->createNew();
            $order->addShipment($shipment);
        }

        foreach ($order->getInventoryUnits() as $inventoryUnit) {
            if (null === $inventoryUnit->getShipment()) {
                $shipment->addItem($inventoryUnit);
            }
        }
    }
<<<<<<< HEAD

    /**
     * {@inheritdoc}
     */
    public function updateShipmentStates(OrderInterface $order)
    {
        foreach ($order->getShipments() as $shipment) {
            if (ShipmentInterface::STATE_CHECKOUT === $shipment->getState()) {
                $shipment->setState(ShipmentInterface::STATE_READY);
            }
        }
    }
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
}
