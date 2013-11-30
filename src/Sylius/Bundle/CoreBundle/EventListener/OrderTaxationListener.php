<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\EventListener;

use Sylius\Bundle\CoreBundle\Model\OrderInterface;
use Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessorInterface;
use Symfony\Component\EventDispatcher\GenericEvent;

/**
 * Order taxation listener.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class OrderTaxationListener
{
    /**
     * Order taxation processor.
     *
     * @var TaxationProcessorInterface
     */
    protected $taxationProcessor;

    /**
     * Constructor.
     *
     * @param TaxationProcessorInterface $taxationProcessor
     */
    public function __construct(TaxationProcessorInterface $taxationProcessor)
    {
        $this->taxationProcessor = $taxationProcessor;
    }

    /**
     * Get the order from event and run the taxation processor on it.
     *
     * @param GenericEvent $event
     */
    public function onCartChange(GenericEvent $event)
    {
        $order = $event->getSubject();

        if (!$order instanceof OrderInterface) {
            throw new \InvalidArgumentException(
<<<<<<< HEAD
                'Order taxation listener requires event subject to be instance of "Sylius\Bundle\CoreBundle\Model\OrderInterface"'
=======
                'Order taxation listener requires event subjct to be instance of "Sylius\Bundle\CoreBundle\Model\OrderInterface"'
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
            );
        }

        $this->taxationProcessor->applyTaxes($order);
    }
}
