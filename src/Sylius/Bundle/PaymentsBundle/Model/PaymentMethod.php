<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\PaymentsBundle\Model;

/**
 * Payments method model.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class PaymentMethod implements PaymentMethodInterface
{
    /**
     * Payments method identifier.
     *
     * @var mixed
     */
    protected $id;

    /**
     * Is method enabled?
     *
     * @var Boolean
     */
    protected $enabled;

    /**
     * Name.
     *
     * @var string
     */
    protected $name;

    /**
     * Description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gateway name.
     *
     * @var string
     */
    protected $gateway;

    /**
     * Required environment.
     *
     * @var string
     */
    protected $environment;

    /**
     * Creation date.
     *
<<<<<<< HEAD
     * @var \DateTime
=======
     * @var DateTime
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     */
    protected $createdAt;

    /**
     * Last update time.
     *
<<<<<<< HEAD
     * @var \DateTime
=======
     * @var DateTime
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
     */
    protected $updatedAt;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->enabled = true;
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
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled)
    {
        $this->enabled = (Boolean) $enabled;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
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
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * {@inheritdoc}
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    }

    /**
     * {@inheritdoc}
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
<<<<<<< HEAD

        return $this;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
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
<<<<<<< HEAD
=======

    /**
     * Get the default requirement labels.
     *
     * @return array
     */
    public static function getCategoryRequirementLabels()
    {
        return array(
            PaymentsMethodInterface::CATEGORY_REQUIREMENT_MATCH_NONE => 'None of items have to match method category',
            PaymentsMethodInterface::CATEGORY_REQUIREMENT_MATCH_ANY  => 'At least 1 item have to match method category',
            PaymentsMethodInterface::CATEGORY_REQUIREMENT_MATCH_ALL  => 'All items have to match method category',
        );
    }
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
}
