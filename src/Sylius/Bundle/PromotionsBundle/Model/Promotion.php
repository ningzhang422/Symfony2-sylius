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

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Promotion model.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Promotion implements PromotionInterface
{
<<<<<<< HEAD
    /**
     * Id
     *
     * @var integer
     */
    protected $id;

    /**
     * Name
     *
     * @var string
     */
    protected $name;

    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Usage limit
     *
     * @var integer
     */
    protected $usageLimit;

    /**
     * Number of times this coupon has been used
     *
     * @var integer
     */
    protected $used;

    /**
     * Start date
     *
     * @var \DateTime
     */
    protected $startsAt;

    /**
     * End date
     *
     * @var \DateTime
     */
    protected $endsAt;

    /**
     * Whether this promotion is triggered by a coupon
     *
     * @var Boolean
     */
    protected $couponBased;

    /**
     * Associated coupons
     *
     * @var CouponInterface[]
     */
    protected $coupons;

    /**
     * Associated rules
     *
     * @var RuleInterface[]
     */
    protected $rules;

    /**
     * Associated actions
     *
     * @var ActionInterface[]
     */
    protected $actions;

    /**
     * Last time updated
     *
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Creation date
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Constructor
     */
=======
    protected $id;
    protected $name;
    protected $description;
    protected $usageLimit;
    protected $used;
    protected $startsAt;
    protected $endsAt;
    protected $couponBased;
    protected $coupons;
    protected $rules;
    protected $actions;
    protected $updatedAt;
    protected $createdAt;

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function __construct()
    {
        $this->used = 0;
        $this->couponBased = false;
        $this->coupons = new ArrayCollection();
        $this->rules = new ArrayCollection();
        $this->actions = new ArrayCollection();
    }

<<<<<<< HEAD
    /**
     * @return int
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
    public function getName()
    {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setName($name)
    {
        $this->name = $name;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getDescription()
    {
        return $this->description;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getStartsAt()
    {
        return $this->startsAt;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setStartsAt(\DateTime $startsAt = null)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setStartsAt(\DateTime $startsAt = null)
    {
        $this->startsAt = $startsAt;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getEndsAt()
    {
        return $this->endsAt;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setEndsAt(\DateTime $endsAt = null)
    {
        $this->endsAt = $endsAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setEndsAt(\DateTime $endsAt = null)
    {
        $this->endsAt = $endsAt;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function isCouponBased()
    {
        return $this->couponBased;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function setCouponBased($couponBased)
    {
        $this->couponBased = (Boolean) $couponBased;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setCouponBased($couponBased)
    {
        $this->couponBased = (Boolean) $couponBased;
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getCoupons()
    {
        return $this->coupons;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasCoupons()
    {
        return !$this->coupons->isEmpty();
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasCoupon(CouponInterface $coupon)
    {
        return $this->coupons->contains($coupon);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function addCoupon(CouponInterface $coupon)
    {
        if (!$this->hasCoupon($coupon)) {
            $coupon->setPromotion($this);
            $this->coupons->add($coupon);
        }
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function removeCoupon(CouponInterface $coupon)
    {
        $coupon->setPromotion(null);
        $this->coupons->removeElement($coupon);
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasRules()
    {
        return !$this->rules->isEmpty();
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getRules()
    {
        return $this->rules;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasRule(RuleInterface $rule)
    {
        return $this->rules->contains($rule);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function addRule(RuleInterface $rule)
    {
        if (!$this->hasRule($rule)) {
            $rule->setPromotion($this);
            $this->rules->add($rule);
        }
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function removeRule(RuleInterface $rule)
    {
        $rule->setPromotion(null);
        $this->rules->removeElement($rule);
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasActions()
    {
        return !$this->actions->isEmpty();
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getActions()
    {
        return $this->actions;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function hasAction(ActionInterface $action)
    {
        return $this->actions->contains($action);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function addAction(ActionInterface $action)
    {
        if (!$this->hasAction($action)) {
            $action->setPromotion($this);
            $this->actions->add($action);
        }
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
    }

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function removeAction(ActionInterface $action)
    {
        $action->setPromotion(null);
        $this->actions->removeElement($action);
<<<<<<< HEAD

        return $this;
    }

    /**
     * {@inheritdoc}
     */
=======
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
    }

    /**
     * {@inheritdoc}
     */
=======
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
=======
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }
}
