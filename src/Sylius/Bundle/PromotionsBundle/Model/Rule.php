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
 * Promotion rule model.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Rule implements RuleInterface
{
<<<<<<< HEAD
    /**
     * Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Type
     *
     * @var string
     */
    protected $type;

    /**
     * Configuration
     *
     * @var array
     */
    protected $configuration;

    /**
     * Associated promotion
     *
     * @var PromotionInterface
     */
    protected $promotion;

    /**
     * Constructor
     */
=======
    protected $id;
    protected $type;
    protected $configuration;
    protected $promotion;

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function __construct()
    {
        $this->configuration = array();
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
    public function getType()
    {
        return $this->type;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setType($type)
    {
        $this->type = $type;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getConfiguration()
    {
        return $this->configuration;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setConfiguration(array $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setConfiguration(array $configuration)
    {
        $this->configuration = $configuration;
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
=======
    public function setPromotion(PromotionInterface $promotion = null)
    {
        $this->promotion = $promotion;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
