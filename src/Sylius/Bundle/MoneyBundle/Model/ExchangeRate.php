<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\MoneyBundle\Model;

<<<<<<< HEAD
use Symfony\Component\Intl\Intl;

class ExchangeRate implements ExchangeRateInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $rate;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
=======
use DateTime;

class ExchangeRate implements ExchangeRateInterface
{
    protected $id;
    protected $currency;
    protected $rate;
    protected $createdAt;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    protected $updatedAt;

    public function getId()
    {
        return $this->id;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getCurrencyName()
    {
        return Intl::getCurrencyBundle()->getCurrencyName($this->currency);
    }

    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getCurrency()
    {
        return $this->currency;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getRate()
    {
        return $this->rate;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

<<<<<<< HEAD
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
=======
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
=======
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
