<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\TaxationBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Tax category model.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class TaxCategory implements TaxCategoryInterface
{
    /**
     * Identifier.
     *
     * @var mixed
     */
    protected $id;

    /**
     * Tax category name.
     *
     * Can be 'Clothing' or 'Electronics'.
     *
     * @var string
     */
    protected $name;

    /**
     * Short description of tax category.
     *
     * @var string
     */
    protected $description;

    /**
     * All rates applicable for items from this category.
     *
     * @var Collection
     */
    protected $rates;

    /**
     * Creation time.
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Last update time.
     *
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->rates = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->name;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * {@inheritdoc}
     */
    public function addRate(TaxRateInterface $rate)
    {
        if (!$this->hasRate($rate)) {
            $rate->setCategory($this);
            $this->rates->add($rate);
        }
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function removeRate(TaxRateInterface $rate)
    {
        if ($this->hasRate($rate)) {
            $rate->setCategory(null);
            $this->rates->removeElement($rate);
        }
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function hasRate(TaxRateInterface $rate)
    {
        return $this->rates->contains($rate);
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
