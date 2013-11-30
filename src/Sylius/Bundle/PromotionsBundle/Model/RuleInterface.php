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
 * Promotion rule model interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface RuleInterface
{
    const TYPE_ITEM_TOTAL = 'item_total';
    const TYPE_ITEM_COUNT = 'item_count';

<<<<<<< HEAD
    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type);

    /**
     * Get configuration
     *
     * @return array
     */
    public function getConfiguration();

    /**
     * Set configuration
     *
     * @param array $configuration
     */
    public function setConfiguration(array $configuration);

    /**
     * Get associated promotion
     *
     * @return PromotionInterface
     */
    public function getPromotion();

    /**
     * Set associated promotion
     *
     * @param PromotionInterface $promotion
     */
=======
    public function getType();
    public function setType($type);
    public function getConfiguration();
    public function setConfiguration(array $configuration);
    public function getPromotion();
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function setPromotion(PromotionInterface $promotion = null);
}
