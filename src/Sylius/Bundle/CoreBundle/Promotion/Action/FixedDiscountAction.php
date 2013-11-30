<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Promotion\Action;

use Sylius\Bundle\CoreBundle\Model\OrderInterface;
use Sylius\Bundle\PromotionsBundle\Action\PromotionActionInterface;
<<<<<<< HEAD
use Sylius\Bundle\PromotionsBundle\Model\PromotionInterface;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
use Sylius\Bundle\PromotionsBundle\Model\PromotionSubjectInterface;
use Sylius\Bundle\ResourceBundle\Model\RepositoryInterface;

/**
 * Fixed discount action.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class FixedDiscountAction implements PromotionActionInterface
{
    /**
     * Adjustment repository.
     *
     * @var RepositoryInterface
     */
    protected $repository;

    /**
     * Constructor.
     *
     * @param RepositoryInterface $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function execute(PromotionSubjectInterface $subject, array $configuration, PromotionInterface $promotion)
=======
    public function execute(PromotionSubjectInterface $subject, array $configuration)
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    {
        $adjustment = $this->repository->createNew();

        $adjustment->setAmount(-$configuration['amount']);
        $adjustment->setLabel(OrderInterface::PROMOTION_ADJUSTMENT);
<<<<<<< HEAD
        $adjustment->setDescription($promotion->getDescription());
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

        $subject->addAdjustment($adjustment);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationFormType()
    {
        return 'sylius_promotion_action_fixed_discount_configuration';
    }
}
