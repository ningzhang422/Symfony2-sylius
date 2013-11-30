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
 * Coupon model interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface CouponInterface
{
<<<<<<< HEAD
    /**
     * Get code
     *
     * @return string
     */
    public function getCode();

    /**
     * Set code
     *
     * @param string $code
     */
    public function setCode($code);

    /**
     * Get usage limit
     *
     * @return integer
     */
    public function getUsageLimit();

    /**
     * Set usage limit
     *
     * @param integer $usageLimit
     */
    public function setUsageLimit($usageLimit);

    /**
     * Get number of times this coupon has been used
     *
     * @return integer
     */
    public function getUsed();

    /**
     * Set number of times this coupon has been used
     *
     * @param integer $used
     */
    public function setUsed($used);

    /**
     * Increment usage
     */
    public function incrementUsed();

    /**
     * Get associated promotion
     *
     * @return PromotionInterface
     */
    public function getPromotion();

    /**
     * Set the associated promotion
     *
     * @param PromotionInterface $promotion
     */
    public function setPromotion(PromotionInterface $promotion = null);

    /**
     * Get the expiration date
     *
     * @return \DateTime
     */
    public function getExpiresAt();

    /**
     * Set the expiration date
     *
     * @param \DateTime $expiresAt
     */
    public function setExpiresAt(\DateTime $expiresAt = null);

    /**
     * Is this coupon valid?
     *
     * @return Boolean
     */
=======
    public function getCode();
    public function setCode($code);
    public function getUsageLimit();
    public function setUsageLimit($usageLimit);
    public function getUsed();
    public function setUsed($used);
    public function incrementUsed();
    public function getPromotion();
    public function setPromotion(PromotionInterface $promotion = null);
    public function getExpiresAt();
    public function setExpiresAt(\DateTime $expiresAt = null);
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function isValid();
}
