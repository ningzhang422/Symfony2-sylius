<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Bundle\CoreBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\UserInterface as BaseUserInterface;
use Sylius\Bundle\AddressingBundle\Model\AddressInterface;
use Sylius\Bundle\ResourceBundle\Model\TimestampableInterface;

/**
 * User interface.
 *
 * @author Paweł Jędrzjewski <pjedrzejewski@diweb.pl>
 */
interface UserInterface extends BaseUserInterface, TimestampableInterface
{
<<<<<<< HEAD
    /**
     * Get first name
     */
    public function getFirstName();

    /**
     * Set first name
=======
    public function getFirstName();

    /**
     * Set firstname.
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     *
     * @param string $firstName
     */
    public function setFirstName($firstName);

<<<<<<< HEAD
    /**
     * Get last name
     */
    public function getLastName();

    /**
     * Set last name
     *
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Set currency
     *
     * @param string $currency
     */
=======
    public function getLastName();
    public function setLastName($lastName);

    public function getCurrency();
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function setCurrency($currency);

    /**
     * Get orders.
     *
     * @return ArrayCollection
     */
    public function getOrders();

    /**
     * Get billing address.
     *
     * @return AddressInterface
     */
    public function getBillingAddress();

    /**
     * Set billing address.
     *
     * @param AddressInterface $billingAddress
     */
    public function setBillingAddress(AddressInterface $billingAddress = null);

    /**
     * Get shipping address.
     *
     * @return AddressInterface
     */
    public function getShippingAddress();

    /**
     * Set shipping address.
     *
     * @param AddressInterface $shippingAddress
     */
    public function setShippingAddress(AddressInterface $shippingAddress = null);

    /**
     * Get addresses.
     *
     * @return ArrayCollection
     */
    public function getAddresses();

    /**
     * Add address.
     *
     * @param AddressInterface $address
     */
    public function addAddress(AddressInterface $address);

    /**
     * Remove address.
     *
<<<<<<< HEAD
     * @param AddressInterface $address
=======
     * @param AddressInterface $addresses
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     */
    public function removeAddress(AddressInterface $address);

    /**
     * Has address?
     *
     * @param AddressInterface $addresses
     *
     * @return Boolean
     */
    public function hasAddress(AddressInterface $address);
}
