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
 * Promotion subject interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface PromotionSubjectInterface
{
    /**
<<<<<<< HEAD
     * Get associated coupon
     *
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     * @return null|CouponInterface
     */
    public function getPromotionCoupon();

    /**
<<<<<<< HEAD
     * Get number of promotion subjects
     *
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     * @return integer
     */
    public function getPromotionSubjectItemCount();

    /**
<<<<<<< HEAD
     * Get total of promotion subjects
     *
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     * @return integer
     */
    public function getPromotionSubjectItemTotal();
}
