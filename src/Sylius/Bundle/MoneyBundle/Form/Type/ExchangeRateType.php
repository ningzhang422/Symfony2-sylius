<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\MoneyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
=======
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

/**
 * Sylius exchange rate type.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class ExchangeRateType extends AbstractType
{
    protected $dataClass;

    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('currency', 'currency', array(
=======
            ->add('currency', 'text', array( // TODO: use currency type when we upgrade to 2.3
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
                'label' => 'sylius.form.exchange_rate.currency'
            ))
            ->add('rate', 'text', array(
                'label' => 'sylius.form.exchange_rate.rate'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => $this->dataClass
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_exchange_rate';
    }
}
