<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\PromotionsBundle\Action;

<<<<<<< HEAD
use Sylius\Bundle\PromotionsBundle\Model\PromotionInterface;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
use Sylius\Bundle\PromotionsBundle\Model\PromotionSubjectInterface;

/**
 * Executes promotion action on given subject.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface PromotionActionInterface
{
<<<<<<< HEAD
    /**
     * Applies the promotion to its subject.
     *
     * @param PromotionSubjectInterface $subject
     * @param array $configuration
     * @return mixed
     */
    public function execute(PromotionSubjectInterface $subject, array $configuration, PromotionInterface $promotion);

    /**
     * Returns the form name related to this action.
     *
     * @return string
     */
=======
    public function execute(PromotionSubjectInterface $subject, array $configuration);
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getConfigurationFormType();
}
