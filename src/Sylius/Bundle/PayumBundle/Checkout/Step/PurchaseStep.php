<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Bundle\PayumBundle\Checkout\Step;

use Payum\Bundle\PayumBundle\Security\TokenFactory;
use Payum\Registry\RegistryInterface;
use Payum\Security\HttpRequestVerifierInterface;
use Sylius\Bundle\CoreBundle\Checkout\Step\CheckoutStep;
use Sylius\Bundle\CoreBundle\Model\OrderInterface;
use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
<<<<<<< HEAD
use Sylius\Bundle\PaymentsBundle\SyliusPaymentEvents;
use Sylius\Bundle\PayumBundle\Payum\Request\StatusRequest;
use Symfony\Component\EventDispatcher\GenericEvent;
=======
use Sylius\Bundle\PayumBundle\Payum\Request\StatusRequest;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
use Symfony\Component\HttpFoundation\RedirectResponse;

class PurchaseStep extends CheckoutStep
{
    /**
     * {@inheritdoc}
     */
    public function displayAction(ProcessContextInterface $context)
    {
        $order = $this->getCurrentCart();

        $captureToken = $this->getTokenFactory()->createCaptureToken(
            $order->getPayment()->getMethod()->getGateway(),
            $order,
            'sylius_checkout_forward',
            array('stepName' => $this->getName())
        );

        return new RedirectResponse($captureToken->getTargetUrl());
    }

    /**
     * {@inheritdoc}
     */
    public function forwardAction(ProcessContextInterface $context)
    {
        $token = $this->getHttpRequestVerifier()->verify($this->getRequest());
        $this->getHttpRequestVerifier()->invalidate($token);
        $this->getCartProvider()->abandonCart();

<<<<<<< HEAD
        $status = new StatusRequest($token);
        $this->getPayum()->getPayment($token->getPaymentName())->execute($status);
=======
        $payment = $this->getPayum()->getPayment($token->getPaymentName());

        $status = new StatusRequest($token);
        $payment->execute($status);
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

        /** @var OrderInterface $order */
        $order = $status->getModel();

        if (!$order instanceof OrderInterface) {
            throw new \RuntimeException(sprintf('Expected order to be set as model but it is %s', get_class($order)));
        }

<<<<<<< HEAD
        $payment = $order->getPayment();
        $previousState = $order->getPayment()->getState();
        $payment->setState($status->getStatus());
=======
        $order->getPayment()->setState($status->getStatus());
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

        if ($status->isSuccess()) {
            $type = 'success';
            $msg  = 'sylius.checkout.success';
        } elseif ($status->isPending()) {
            $type = 'notice';
            $msg  = 'sylius.checkout.pending';
        } elseif ($status->isCanceled()) {
            $type = 'notice';
            $msg  = 'sylius.checkout.canceled';
<<<<<<< HEAD
=======
        } elseif ($status->isExpired()) {
            $type = 'notice';
            $msg  = 'sylius.checkout.expired';
        } elseif ($status->isSuspended()) {
            $type = 'notice';
            $msg  = 'sylius.checkout.suspended';
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        } elseif ($status->isFailed()) {
            $type = 'error';
            $msg  = 'sylius.checkout.failed';
        } else {
            $type = 'error';
            $msg  = 'sylius.checkout.unknown';
        }

<<<<<<< HEAD
        if ($previousState !== $payment->getState()) {
            $this->dispatchEvent(
                SyliusPaymentEvents::PRE_STATE_CHANGE,
                new GenericEvent($order->getPayment(), array('previous_state' => $previousState))
            );
        }

        $this->getDoctrine()->getManager()->flush();

        if ($previousState !== $payment->getState()) {
            $this->dispatchEvent(
                SyliusPaymentEvents::POST_STATE_CHANGE,
                new GenericEvent($order->getPayment(), array('previous_state' => $previousState))
            );
        }

=======
        //TODO: an event here

        $this->getDoctrine()->getManager()->flush();

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
        $this->get('session')->getFlashBag()->add($type, $this->get('translator')->trans($msg, array(), 'flashes'));

        return $this->complete();
    }

    /**
     * @return RegistryInterface
     */
    protected function getPayum()
    {
        return $this->get('payum');
    }

    /**
     * @return TokenFactory
     */
    protected function getTokenFactory()
    {
        return $this->get('payum.security.token_factory');
    }

    /**
     * @return HttpRequestVerifierInterface
     */
    protected function getHttpRequestVerifier()
    {
        return $this->get('payum.security.http_request_verifier');
    }
}
