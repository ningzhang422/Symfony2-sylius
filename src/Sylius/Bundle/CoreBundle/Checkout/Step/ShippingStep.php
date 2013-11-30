<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Checkout\Step;

use Sylius\Bundle\CoreBundle\Checkout\SyliusCheckoutEvents;
use Sylius\Bundle\CoreBundle\Model\OrderInterface;
use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Symfony\Component\Form\FormInterface;

/**
 * The shipping step of checkout.
 *
 * Based on the user address, we present the available shipping methods,
<<<<<<< HEAD
 * and ask him to select his preferred one.
=======
 * and ask him to select his preffered one.
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class ShippingStep extends CheckoutStep
{
    /**
     * {@inheritdoc}
     */
    public function displayAction(ProcessContextInterface $context)
    {
        $order = $this->getCurrentCart();
        $this->dispatchCheckoutEvent(SyliusCheckoutEvents::SHIPPING_INITIALIZE, $order);

        $form = $this->createCheckoutShippingForm($order);

        return $this->renderStep($context, $order, $form);
    }

    /**
     * {@inheritdoc}
     */
    public function forwardAction(ProcessContextInterface $context)
    {
        $request = $this->getRequest();

        $order = $this->getCurrentCart();
        $this->dispatchCheckoutEvent(SyliusCheckoutEvents::SHIPPING_INITIALIZE, $order);

        $form = $this->createCheckoutShippingForm($order);

        if ($request->isMethod('POST') && $form->bind($request)->isValid()) {
            $this->dispatchCheckoutEvent(SyliusCheckoutEvents::SHIPPING_PRE_COMPLETE, $order);

            $this->getManager()->persist($order);
            $this->getManager()->flush();

            $this->dispatchCheckoutEvent(SyliusCheckoutEvents::SHIPPING_COMPLETE, $order);

            return $this->complete();
        }

        return $this->renderStep($context, $order, $form);
    }

<<<<<<< HEAD
    protected function renderStep(ProcessContextInterface $context, OrderInterface $order, FormInterface $form)
=======
    private function renderStep(ProcessContextInterface $context, OrderInterface $order, FormInterface $form)
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        return $this->render('SyliusWebBundle:Frontend/Checkout/Step:shipping.html.twig', array(
            'order'   => $order,
            'form'    => $form->createView(),
            'context' => $context
        ));
    }

<<<<<<< HEAD
    protected function createCheckoutShippingForm(OrderInterface $order)
=======
    private function createCheckoutShippingForm(OrderInterface $order)
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $zone = $this->getZoneMatcher()->match($order->getShippingAddress());

        return $this->createForm('sylius_checkout_shipping', $order, array(
            'criteria'  => array('zone' => $zone)
        ));
    }
}
