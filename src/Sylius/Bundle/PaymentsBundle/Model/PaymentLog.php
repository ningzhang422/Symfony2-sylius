<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\PaymentsBundle\Model;

/**
 * Payment log model.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class PaymentLog implements PaymentLogInterface
{
    /**
     * Payments log identifier.
     *
     * @var mixed
     */
    protected $id;

    /**
     * Payment.
     *
     * @var PaymentMethodInterface
     */
    protected $payment;

    /**
     * Message.
     *
     * @var string
     */
    protected $message;

    /**
     * Creation date.
     *
<<<<<<< HEAD
     * @var \DateTime
=======
     * @var DateTime
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     */
    protected $createdAt;

    /**
     * Last update time.
     *
<<<<<<< HEAD
     * @var \DateTime
=======
     * @var DateTime
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     */
    protected $updatedAt;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * {@inheritdoc}
     */
    public function setPayment(PaymentInterface $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
