<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\OmnipayBundle\Model;

/**
 * Credit Card interface.
 *
 * @author Dylan Johnson <eponymi.dev@gmail.com>
 */
<<<<<<< HEAD
interface CreditCardInterface
=======
 interface CreditCardInterface
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
{
    /**
     * Transform any credit card model into an array matching Omnipay
     * format and naming conventions.
     *
     * @return array
     */
    public function transformToOmnipay(array $map);
}
