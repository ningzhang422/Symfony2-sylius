<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\PromotionsBundle\Model;

/**
 * Coupon model.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Coupon implements CouponInterface
{
<<<<<<< HEAD
    /**
     * Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Coupon code
     *
     * @var string
     */
    protected $code;

    /**
     * Usage limit
     *
     * @var integer
     */
    protected $usageLimit;

    /**
     * Number of times used
     *
     * @var integer
     */
    protected $used;

    /**
     * Associated promotion
     *
     * @var PromotionInterface
     */
    protected $promotion;

    /**
     * Expiration date
     *
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * Constructor
     */
=======
    protected $id;
    protected $code;
    protected $usageLimit;
    protected $used;
    protected $promotion;
    protected $expiresAt;

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function __construct()
    {
        $this->used = 0;
    }

<<<<<<< HEAD
    /**
     * Get id
     *
     * @return integer
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getId()
    {
        return $this->id;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getCode()
    {
        return $this->code;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setCode($code)
    {
        $this->code = $code;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getUsageLimit()
    {
        return $this->usageLimit;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getUsed()
    {
        return $this->used;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function incrementUsed()
    {
        $this->used++;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function incrementUsed()
    {
        $this->used++;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getPromotion()
    {
        return $this->promotion;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setPromotion(PromotionInterface $promotion = null)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setPromotion(PromotionInterface $promotion = null)
    {
        $this->promotion = $promotion;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function setExpiresAt(\DateTime $expiresAt = null)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function isValid()
    {
        if (null !== $this->usageLimit && $this->used >= $this->usageLimit) {
            return false;
        }

        $now = new \DateTime();

        if (null !== $this->expiresAt && $this->expiresAt < $now) {
            return false;
        }

        return true;
    }
}
