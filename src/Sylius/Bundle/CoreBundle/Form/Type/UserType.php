<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Form\Type;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;
<<<<<<< HEAD
use Symfony\Component\Form\FormInterface;
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class UserType extends ProfileFormType
{
<<<<<<< HEAD
    /** @var string */
    private $dataClass;

    /**
     * {@inheritdoc}
     */
=======
    private $dataClass;

>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addEventListener(FormEvents::PRE_BIND, function (FormEvent $event) {
                $data = $event->getData();

                if (!array_key_exists('differentBillingAddress', $data) || false === $data['differentBillingAddress']) {
                    $data['billingAddress'] = $data['shippingAddress'];

                    $event->setData($data);
                }
            })
            ->add('firstName', 'text', array(
                'label' => 'sylius.form.user.first_name'
            ))
            ->add('lastName', 'text', array(
                'label' => 'sylius.form.user.last_name'
            ))
        ;

        $this->buildUserForm($builder, $options);

        $builder
            ->add('plainPassword', 'password', array(
                'label' => 'sylius.form.user.password'
            ))
            ->add('enabled', 'checkbox', array(
                'label' => 'sylius.form.user.enabled'
            ))
<<<<<<< HEAD
            ->add('groups', 'sylius_group_choice', array(
                'label'    => 'sylius.form.user.groups',
                'multiple' => true,
                'required' => false
            ))
            ->add('shippingAddress', 'sylius_address', array(
                'label' => 'sylius.form.user.shipping_address',
                'error_bubbling' => false
            ))
            ->add('differentBillingAddress', 'checkbox', array(
                'mapped' => false,
                'label'  => 'sylius.form.user.different_billing_address',
                'error_bubbling' => false
            ))
            ->add('billingAddress', 'sylius_address', array(
                'label' => 'sylius.form.user.billing_address',
                'error_bubbling' => false
=======
            ->add('shippingAddress', 'sylius_address', array(
                'label' => 'sylius.form.user.shipping_address'
            ))
            ->add('differentBillingAddress', 'checkbox', array(
                'mapped' => false,
                'label'  => 'sylius.form.user.different_billing_address'
            ))
            ->add('billingAddress', 'sylius_address', array(
                'label' => 'sylius.form.user.billing_address'
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
            ))
            ->remove('username')
        ;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => $this->dataClass,
<<<<<<< HEAD
            'validation_groups'  => function(FormInterface $form) {
                $data = $form->getData();
                $groups = array('Profile', 'sylius');
                if ($data && !$data->getId()) {
                    $groups[] = 'ProfileAdd';
                }

                return $groups;
            },
=======
            'validation_groups'  => array('Profile', 'sylius'),
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
            'cascade_validation' => true,
            'intention'          => 'profile',
        ));
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
    public function getName()
    {
        return 'sylius_user';
    }
}
