<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\Bundle\InscriptionBundle\Process;

use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\FlowBundle\Process\Scenario\ProcessScenarioInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class InscriptionScenario extends ContainerAware implements ProcessScenarioInterface
{
    public function build(ProcessBuilderInterface $builder)
    {
        $builder
            ->add('register', new Step\RegisterStep())
            ->add('addressing', new Step\AddressingStep())
        ;
    }
}
